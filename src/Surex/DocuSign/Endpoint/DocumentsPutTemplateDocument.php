<?php

namespace Surex\DocuSign\Endpoint;

class DocumentsPutTemplateDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $templateId;
    /**
    * Adds the specified document to an existing template document.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $documentId The ID of the document being accessed.
    * @param string $templateId The ID of the template being accessed.
    * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition 
    * @param array $queryParameters {
    *     @var string $apply_document_fields When **true**, document fields
    can be added or modified
    while adding or modifying envelope documents.
    
    *     @var string $is_envelope_definition 
    * }
    */
    function __construct(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
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
        return str_replace(array('{accountId}', '{documentId}', '{templateId}'), array($this->accountId, $this->documentId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}');
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
        $optionsResolver->setDefined(array('apply_document_fields', 'is_envelope_definition'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('apply_document_fields', array('string'));
        $optionsResolver->setAllowedTypes('is_envelope_definition', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsPutTemplateDocumentBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeDocument
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeDocument', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentsPutTemplateDocumentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}