<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class DocumentFieldsDeleteDocumentFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;

    /**
     * Deletes custom document fields from an existing envelope document.
     *
     * @param string                                       $accountId              the external account number (int) or account ID Guid
     * @param string                                       $documentId             the ID of the document being accessed
     * @param string                                       $envelopeId             The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeDocumentFields $envelopeDocumentFields
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, \Surex\DocuSign\Model\EnvelopeDocumentFields $envelopeDocumentFields)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->body       = $envelopeDocumentFields;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}'], [$this->accountId, $this->documentId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/fields');
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
     * @throws \Surex\DocuSign\Exception\DocumentFieldsDeleteDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeDocumentFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeDocumentFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentFieldsDeleteDocumentFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
