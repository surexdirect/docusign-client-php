<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PagesPutPageImage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    protected $pageNumber;

    /**
     * Rotates page image from an envelope for display. The page image can be rotated to the left or right.
     *
     * @param string                            $accountId   the external account number (int) or account ID Guid
     * @param string                            $documentId  the ID of the document being accessed
     * @param string                            $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                            $pageNumber  the page number being accessed
     * @param \Surex\DocuSign\Model\PageRequest $pageRequest
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, string $pageNumber, \Surex\DocuSign\Model\PageRequest $pageRequest)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->pageNumber = $pageNumber;
        $this->body       = $pageRequest;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}', '{pageNumber}'], [$this->accountId, $this->documentId, $this->envelopeId, $this->pageNumber], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}/page_image');
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
     * @throws \Surex\DocuSign\Exception\PagesPutPageImageBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PagesPutPageImageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
