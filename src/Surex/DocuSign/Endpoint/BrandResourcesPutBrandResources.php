<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BrandResourcesPutBrandResources extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $brandId;
    protected $resourceContentType;

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     */
    public function __construct(string $accountId, string $brandId, string $resourceContentType)
    {
        $this->accountId           = $accountId;
        $this->brandId             = $brandId;
        $this->resourceContentType = $resourceContentType;
    }

    public function getMethod(): string
    {
        return 'PUT';
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

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BrandResourcesPutBrandResourcesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BrandResources
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BrandResources', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandResourcesPutBrandResourcesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
