<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BrandPutBrand extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $brandId;

    /**
     * @param string                      $accountId the external account number (int) or account ID Guid
     * @param string                      $brandId   the unique identifier of a brand
     * @param \Surex\DocuSign\Model\Brand $brand
     */
    public function __construct(string $accountId, string $brandId, \Surex\DocuSign\Model\Brand $brand)
    {
        $this->accountId = $accountId;
        $this->brandId   = $brandId;
        $this->body      = $brand;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{brandId}'], [$this->accountId, $this->brandId], '/v2/accounts/{accountId}/brands/{brandId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BrandPutBrandBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Brand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Brand', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandPutBrandBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
