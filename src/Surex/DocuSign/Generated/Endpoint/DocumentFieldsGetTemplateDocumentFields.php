<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class DocumentFieldsGetTemplateDocumentFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $templateId;

    /**
     * Retrieves the custom document fields for an existing template document.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $templateId the ID of the template being accessed
     */
    public function __construct(string $accountId, string $documentId, string $templateId)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->templateId = $templateId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{templateId}'], [$this->accountId, $this->documentId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/fields');
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
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsGetTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateDocumentFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\DocumentFieldsGetTemplateDocumentFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
