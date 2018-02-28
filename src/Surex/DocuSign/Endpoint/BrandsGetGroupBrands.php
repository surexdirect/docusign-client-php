<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BrandsGetGroupBrands extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $groupId;

    /**
     * Retrieves information about the brands associated with the requested group.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $groupId   the ID of the group being accessed
     */
    public function __construct(string $accountId, string $groupId)
    {
        $this->accountId = $accountId;
        $this->groupId   = $groupId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{groupId}'], [$this->accountId, $this->groupId], '/v2/accounts/{accountId}/groups/{groupId}/brands');
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
     * @throws \Surex\DocuSign\Exception\BrandsGetGroupBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\GroupBrands
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\GroupBrands', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandsGetGroupBrandsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
