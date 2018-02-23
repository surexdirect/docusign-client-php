<?php

namespace Surex\DocuSign\Endpoint;

class DocumentFieldsGetTemplateDocumentFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $templateId;
    /**
     * Retrieves the custom document fields for an existing template document.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $documentId The ID of the document being accessed.
     * @param string $templateId The ID of the template being accessed.
     */
    function __construct(string $accountId, string $documentId, string $templateId)
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->templateId = $templateId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{templateId}'), array($this->accountId, $this->documentId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/fields');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentFieldsGetTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateDocumentFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateDocumentFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentFieldsGetTemplateDocumentFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}