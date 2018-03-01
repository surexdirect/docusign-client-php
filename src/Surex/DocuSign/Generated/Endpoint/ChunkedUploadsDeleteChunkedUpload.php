<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ChunkedUploadsDeleteChunkedUpload extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $chunkedUploadId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $chunkedUploadId
     */
    public function __construct(string $accountId, string $chunkedUploadId)
    {
        $this->accountId       = $accountId;
        $this->chunkedUploadId = $chunkedUploadId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{chunkedUploadId}'], [$this->accountId, $this->chunkedUploadId], '/v2/accounts/{accountId}/chunked_uploads/{chunkedUploadId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsDeleteChunkedUploadBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ChunkedUploads', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ChunkedUploadsDeleteChunkedUploadBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
