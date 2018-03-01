<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ConnectPublishPutConnectRetry extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Republishes Connect information for the  specified set of envelopes. The primary use is to republish Connect post failures by including envelope IDs for the envelopes that failed to post in the request. The list of envelope IDs that failed to post correctly can be retrieved by calling to [ML:GetConnectLog] retrieve the failure log.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ConnectFailureFilter $connectFailureFilter
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\ConnectFailureFilter $connectFailureFilter)
    {
        $this->accountId = $accountId;
        $this->body      = $connectFailureFilter;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/connect/envelopes/retry_queue');
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
     * @throws \Surex\DocuSign\Generated\Exception\ConnectPublishPutConnectRetryBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectFailureResults
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ConnectFailureResults', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ConnectPublishPutConnectRetryBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
