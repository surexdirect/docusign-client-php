<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class PermissionProfilesGetPermissionProfile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $permissionProfileId;

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $permissionProfileId
     * @param array  $queryParameters     {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     */
    public function __construct(string $accountId, string $permissionProfileId, array $queryParameters = [])
    {
        $this->accountId           = $accountId;
        $this->permissionProfileId = $permissionProfileId;
        $this->queryParameters     = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{permissionProfileId}'], [$this->accountId, $this->permissionProfileId], '/v2/accounts/{accountId}/permission_profiles/{permissionProfileId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesGetPermissionProfileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPermissionProfiles
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\AccountPermissionProfiles', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\PermissionProfilesGetPermissionProfileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
