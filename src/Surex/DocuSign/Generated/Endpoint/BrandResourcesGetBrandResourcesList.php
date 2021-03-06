<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BrandResourcesGetBrandResourcesList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $brandId;

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     */
    public function __construct(string $accountId, string $brandId)
    {
        $this->accountId = $accountId;
        $this->brandId   = $brandId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{brandId}'], [$this->accountId, $this->brandId], '/v2/accounts/{accountId}/brands/{brandId}/resources');
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
     * @throws \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesListBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BrandResourcesList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\BrandResourcesList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesListBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
