<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class UserSettingsGetUserSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

    /**
     * Retrieves a list of the account settings and email notification information for the specified user.

     The response returns the account setting name/value information and the email notification settings for the specified user. For more information about the different user settings, see the [ML:userSettings list].
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     */
    public function __construct(string $accountId, string $userId)
    {
        $this->accountId = $accountId;
        $this->userId    = $userId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/settings');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UserSettingsGetUserSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserSettingsInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserSettingsInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSettingsGetUserSettingsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
