<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class DocumentsPutTemplateDocuments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Adds one or more documents to an existing template document.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param string                                   $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                    $queryParameters    {
     *
     *     @var string $apply_document_fields When **true**, document fields
     can be added or modified
     while adding or modifying envelope documents.

     * }
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->templateId      = $templateId;
        $this->body            = $envelopeDefinition;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['apply_document_fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('apply_document_fields', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsPutTemplateDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocuments
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocuments', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentsPutTemplateDocumentsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
