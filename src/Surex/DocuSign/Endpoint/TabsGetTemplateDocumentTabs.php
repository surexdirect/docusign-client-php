<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TabsGetTemplateDocumentTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $templateId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $page_numbers
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
        return str_replace(['{accountId}', '{documentId}', '{templateId}'], [$this->accountId, $this->documentId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/tabs');
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
        $optionsResolver->setDefined(['page_numbers']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page_numbers', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TabsGetTemplateDocumentTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocumentTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocumentTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabsGetTemplateDocumentTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
