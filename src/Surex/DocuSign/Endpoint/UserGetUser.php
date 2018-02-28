<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class UserGetUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

    /**
     * Retrieves the user information for the specified user.

     To return additional user information that details the last login date, login status, and the user's password expiration date, set the optional `additional_info` query string parameter to **true**.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $additional_info when set to **true**, the full list of user information is returned for each user in the account
     *     @var string $email
     * }
     */
    public function __construct(string $accountId, string $userId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->userId          = $userId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['additional_info', 'email']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('additional_info', ['string']);
        $optionsResolver->setAllowedTypes('email', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UserGetUserBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Users
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Users', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserGetUserBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
