<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class LockDeleteEnvelopeLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Deletes the lock from the specified envelope. The `X-DocuSign-Edit` header must be included in the request.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     */
    public function __construct(string $accountId, string $envelopeId)
    {
        $this->accountId  = $accountId;
        $this->envelopeId = $envelopeId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/lock');
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
     * @throws \Surex\DocuSign\Exception\LockDeleteEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LockDeleteEnvelopeLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
