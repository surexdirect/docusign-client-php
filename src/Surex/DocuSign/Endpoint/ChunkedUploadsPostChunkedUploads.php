<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ChunkedUploadsPostChunkedUploads extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                     $accountId            the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\ChunkedUploadRequest $chunkedUploadRequest
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\ChunkedUploadRequest $chunkedUploadRequest)
    {
        $this->accountId = $accountId;
        $this->body      = $chunkedUploadRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/chunked_uploads');
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
     * @throws \Surex\DocuSign\Exception\ChunkedUploadsPostChunkedUploadsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ChunkedUploads
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ChunkedUploads', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ChunkedUploadsPostChunkedUploadsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
