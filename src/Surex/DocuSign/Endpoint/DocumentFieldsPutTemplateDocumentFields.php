<?php

namespace Surex\DocuSign\Endpoint;

class DocumentFieldsPutTemplateDocumentFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $templateId;
    /**
     * Updates existing custom document fields in an existing template document.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $documentId The ID of the document being accessed.
     * @param string $templateId The ID of the template being accessed.
     * @param \Surex\DocuSign\Model\TemplateDocumentFields $templateDocumentFields 
     */
    function __construct(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Model\TemplateDocumentFields $templateDocumentFields)
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->templateId = $templateId;
        $this->body = $templateDocumentFields;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{templateId}'), array($this->accountId, $this->documentId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/fields');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentFieldsPutTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocumentFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocumentFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentFieldsPutTemplateDocumentFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}