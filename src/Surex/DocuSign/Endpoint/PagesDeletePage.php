<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PagesDeletePage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    protected $pageNumber;

    /**
     * Deletes a page from a document in an envelope based on the page number.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber the page number being accessed
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, string $pageNumber)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->pageNumber = $pageNumber;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}', '{pageNumber}'], [$this->accountId, $this->documentId, $this->envelopeId, $this->pageNumber], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}');
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
     * @throws \Surex\DocuSign\Exception\PagesDeletePageBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PagesDeletePageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
