<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class DocumentFieldsPostTemplateDocumentFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $templateId;

    /**
     * Creates custom document fields in an existing template document.
     *
     * @param string                                       $accountId              the external account number (int) or account ID Guid
     * @param string                                       $documentId             the ID of the document being accessed
     * @param string                                       $templateId             the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateDocumentFields $templateDocumentFields
     */
    public function __construct(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Model\TemplateDocumentFields $templateDocumentFields)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->templateId = $templateId;
        $this->body       = $templateDocumentFields;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{templateId}'], [$this->accountId, $this->documentId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/fields');
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
     * @throws \Surex\DocuSign\Exception\DocumentFieldsPostTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocumentFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocumentFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentFieldsPostTemplateDocumentFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
