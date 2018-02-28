<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsPutTemplateRecipientsDocumentVisibility extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * @param string                                           $accountId                  the external account number (int) or account ID Guid
     * @param string                                           $templateId                 the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $templateDocumentVisibility;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/recipients/document_visibility');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientsDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocumentVisibility
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocumentVisibility', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientsDocumentVisibilityBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
