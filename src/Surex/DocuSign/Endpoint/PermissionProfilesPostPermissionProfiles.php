<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PermissionProfilesPostPermissionProfiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                          $accountId                 the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\AccountPermissionProfiles $accountPermissionProfiles
     * @param array                                           $queryParameters           {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\AccountPermissionProfiles $accountPermissionProfiles, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->body            = $accountPermissionProfiles;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/permission_profiles');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Surex\DocuSign\Exception\PermissionProfilesPostPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountPermissionProfiles
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountPermissionProfiles', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PermissionProfilesPostPermissionProfilesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
