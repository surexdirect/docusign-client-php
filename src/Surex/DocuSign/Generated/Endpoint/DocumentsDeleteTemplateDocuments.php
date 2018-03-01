<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class DocumentsDeleteTemplateDocuments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Deletes one or more documents from an existing template.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $envelopeDefinition;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents');
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
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsDeleteTemplateDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocuments
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateDocuments', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\DocumentsDeleteTemplateDocumentsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
