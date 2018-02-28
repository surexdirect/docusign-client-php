<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class UserSocialLoginGetUserSocialLogin extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

    /**
     * Retrieves a list of social accounts linked to a user's account.
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
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/social');
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
     * @throws \Surex\DocuSign\Exception\UserSocialLoginGetUserSocialLoginBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserSocialIdResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserSocialIdResult', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSocialLoginGetUserSocialLoginBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
