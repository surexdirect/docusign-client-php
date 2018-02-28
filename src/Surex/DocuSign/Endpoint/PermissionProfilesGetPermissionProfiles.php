<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PermissionProfilesGetPermissionProfiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves a list of Permission Profiles. Permission Profiles are a standard set of user permissions that you can apply to individual users or users in a Group. This makes it easier to manage user permissions for a large number of users, without having to change permissions on a user-by-user basis.

     Currently, Permission Profiles can only be created and modified in the DocuSign console.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include Reserved for DocuSign.

     * }
     */
    public function __construct(string $accountId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/permission_profiles');
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
        $optionsResolver->setDefined(['include']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\PermissionProfilesGetPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PermissionProfileInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PermissionProfileInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PermissionProfilesGetPermissionProfilesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
