<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class DocumentsGetTemplateDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $templateId;

    /**
     * Retrieves one or more PDF documents from the specified template.

     You can specify the ID of the document to retrieve or can specify `combined` to retrieve all documents in the template as one pdf.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $encrypt
     *     @var string $show_changes
     * }
     */
    public function __construct(string $accountId, string $documentId, string $templateId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->documentId      = $documentId;
        $this->templateId      = $templateId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{templateId}'], [$this->accountId, $this->documentId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}');
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
        $optionsResolver->setDefined(['encrypt', 'show_changes']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('encrypt', ['string']);
        $optionsResolver->setAllowedTypes('show_changes', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsGetTemplateDocumentBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentsGetTemplateDocumentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
