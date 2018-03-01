<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class UserCustomSettingsGetCustomSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

    /**
     * Retrieves a list of custom user settings for a single user.

     Custom settings provide a flexible way to store and retrieve custom user information that can be used in your own system.

     ###### Note: Custom user settings are not the same as user account settings.

     ###Getting Grouped Custom User Settings###

     If the custom user settings you want to retrieve are grouped, you must include the following information in the header, after Content-Type, in the request:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings.

     If the extra header information is not included, only the custom user settings that were added without a group are retrieved.
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
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/custom_settings');
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
     * @throws \Surex\DocuSign\Generated\Exception\UserCustomSettingsGetCustomSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserCustomSettings
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\UserCustomSettings', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\UserCustomSettingsGetCustomSettingsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
