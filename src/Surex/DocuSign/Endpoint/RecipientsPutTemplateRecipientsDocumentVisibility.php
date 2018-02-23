<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPutTemplateRecipientsDocumentVisibility extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $templateId The ID of the template being accessed.
     * @param \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility 
     */
    function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility)
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->body = $templateDocumentVisibility;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients/document_visibility');
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