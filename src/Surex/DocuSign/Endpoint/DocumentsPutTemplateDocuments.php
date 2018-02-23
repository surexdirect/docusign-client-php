<?php

namespace Surex\DocuSign\Endpoint;

class DocumentsPutTemplateDocuments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
    * Adds one or more documents to an existing template document.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $templateId The ID of the template being accessed.
    * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition 
    * @param array $queryParameters {
    *     @var string $apply_document_fields When **true**, document fields
    can be added or modified
    while adding or modifying envelope documents.
    
    * }
    */
    function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->body = $envelopeDefinition;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('apply_document_fields'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('apply_document_fields', array('string'));
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