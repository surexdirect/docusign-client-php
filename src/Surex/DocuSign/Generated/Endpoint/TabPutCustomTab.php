<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class TabPutCustomTab extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $customTabId;

    /**
     * Updates the information in a custom tab for the specified account.
     *
     * @param string                                     $accountId   the external account number (int) or account ID Guid
     * @param string                                     $customTabId
     * @param \Surex\DocuSign\Generated\Model\CustomTabs $customTabs
     */
    public function __construct(string $accountId, string $customTabId, \Surex\DocuSign\Generated\Model\CustomTabs $customTabs)
    {
        $this->accountId   = $accountId;
        $this->customTabId = $customTabId;
        $this->body        = $customTabs;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{customTabId}'], [$this->accountId, $this->customTabId], '/v2/accounts/{accountId}/tab_definitions/{customTabId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\TabPutCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CustomTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\CustomTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\TabPutCustomTabBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
