<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class DocumentsPutTemplateDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $templateId;

    /**
     * Adds the specified document to an existing template document.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $documentId         the ID of the document being accessed
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                              $queryParameters    {
     *
     *     @var string $apply_document_fields When **true**, document fields
     *     @var string $is_envelope_definition
     * }
     */
    public function __construct(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->documentId      = $documentId;
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
        return str_replace(['{accountId}', '{documentId}', '{templateId}'], [$this->accountId, $this->documentId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}');
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
        $optionsResolver->setDefined(['apply_document_fields', 'is_envelope_definition']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('apply_document_fields', ['string']);
        $optionsResolver->setAllowedTypes('is_envelope_definition', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsPutTemplateDocumentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocument
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeDocument', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\DocumentsPutTemplateDocumentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
