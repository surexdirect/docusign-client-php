<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BrandGetBrand extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $brandId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $brandId         the unique identifier of a brand
     * @param array  $queryParameters {
     *
     *     @var string $include_external_references
     *     @var string $include_logos
     * }
     */
    public function __construct(string $accountId, string $brandId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->brandId         = $brandId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{brandId}'], [$this->accountId, $this->brandId], '/v2/accounts/{accountId}/brands/{brandId}');
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
        $optionsResolver->setDefined(['include_external_references', 'include_logos']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_external_references', ['string']);
        $optionsResolver->setAllowedTypes('include_logos', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BrandGetBrandBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Brand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Brand', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandGetBrandBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
