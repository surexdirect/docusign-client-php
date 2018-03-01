<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BrandResourcesGetBrandResources extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $brandId;
    protected $resourceContentType;

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     * @param array  $queryParameters     {
     *
     *     @var string $langcode
     *     @var string $return_master
     * }
     */
    public function __construct(string $accountId, string $brandId, string $resourceContentType, array $queryParameters = [])
    {
        $this->accountId           = $accountId;
        $this->brandId             = $brandId;
        $this->resourceContentType = $resourceContentType;
        $this->queryParameters     = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{brandId}', '{resourceContentType}'], [$this->accountId, $this->brandId, $this->resourceContentType], '/v2/accounts/{accountId}/brands/{brandId}/resources/{resourceContentType}');
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
        $optionsResolver->setDefined(['langcode', 'return_master']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('langcode', ['string']);
        $optionsResolver->setAllowedTypes('return_master', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
