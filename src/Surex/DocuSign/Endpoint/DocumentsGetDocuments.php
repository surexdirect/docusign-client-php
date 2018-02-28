<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class DocumentsGetDocuments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Retrieves a list of documents associated with the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     */
    public function __construct(string $accountId, string $envelopeId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->envelopeId      = $envelopeId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents');
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
        $optionsResolver->setDefined(['include_metadata']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_metadata', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsGetDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeDocuments
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeDocuments', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentsGetDocumentsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
