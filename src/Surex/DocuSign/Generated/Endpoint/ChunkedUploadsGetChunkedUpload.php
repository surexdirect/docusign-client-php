<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ChunkedUploadsGetChunkedUpload extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $chunkedUploadId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $chunkedUploadId
     * @param array  $queryParameters {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     */
    public function __construct(string $accountId, string $chunkedUploadId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->chunkedUploadId = $chunkedUploadId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsGetChunkedUploadBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ChunkedUploads', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ChunkedUploadsGetChunkedUploadBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
