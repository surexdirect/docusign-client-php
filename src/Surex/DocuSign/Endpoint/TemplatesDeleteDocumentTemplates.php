<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesDeleteDocumentTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    protected $templateId;

    /**
     * Deletes the specified template from a document in an existing envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $templateId the ID of the template being accessed
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, string $templateId)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->templateId = $templateId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}', '{templateId}'], [$this->accountId, $this->documentId, $this->envelopeId, $this->templateId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/templates/{templateId}');
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
     * @throws \Surex\DocuSign\Exception\TemplatesDeleteDocumentTemplatesBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesDeleteDocumentTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
