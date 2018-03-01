<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ConnectGetConnectConfig extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $connectId;

    /**
     * Retrieves the information for the specified DocuSign Connect configuration.

     ###### Note: Connect must be enabled for your account to use this function.

     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $connectId the ID of the custom Connect configuration being accessed
     */
    public function __construct(string $accountId, string $connectId)
    {
        $this->accountId = $accountId;
        $this->connectId = $connectId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{connectId}'], [$this->accountId, $this->connectId], '/v2/accounts/{accountId}/connect/{connectId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\ConnectGetConnectConfigBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectConfigResults
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ConnectConfigResults', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ConnectGetConnectConfigBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
