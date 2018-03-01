<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class TabsGetTemplatePageTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $pageNumber;
    protected $templateId;

    /**
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $pageNumber the page number being accessed
     * @param string $templateId the ID of the template being accessed
     */
    public function __construct(string $accountId, string $documentId, string $pageNumber, string $templateId)
    {
        $this->accountId  = $accountId;
        $this->documentId = $documentId;
        $this->pageNumber = $pageNumber;
        $this->templateId = $templateId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{pageNumber}', '{templateId}'], [$this->accountId, $this->documentId, $this->pageNumber, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}/tabs');
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
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetTemplatePageTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateDocumentTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\TabsGetTemplatePageTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
