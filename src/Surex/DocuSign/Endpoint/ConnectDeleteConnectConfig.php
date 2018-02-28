<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConnectDeleteConnectConfig extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $connectId;

    /**
     * Deletes the specified DocuSign Connect configuration.

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
        return 'DELETE';
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
     * @throws \Surex\DocuSign\Exception\ConnectDeleteConnectConfigBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectDeleteConnectConfigBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
