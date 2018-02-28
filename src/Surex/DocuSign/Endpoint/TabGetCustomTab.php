<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TabGetCustomTab extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $customTabId;

    /**
     * Retrieves information about the requested custom tab on the specified account.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $customTabId
     */
    public function __construct(string $accountId, string $customTabId)
    {
        $this->accountId   = $accountId;
        $this->customTabId = $customTabId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{customTabId}'], [$this->accountId, $this->customTabId], '/v2/accounts/{accountId}/tab_definitions/{customTabId}');
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
     * @throws \Surex\DocuSign\Exception\TabGetCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CustomTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CustomTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabGetCustomTabBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
