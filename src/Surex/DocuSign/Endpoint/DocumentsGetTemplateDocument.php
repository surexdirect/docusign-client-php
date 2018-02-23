<?php

namespace Surex\DocuSign\Endpoint;

class DocumentsGetTemplateDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $templateId;
    /**
    * Retrieves one or more PDF documents from the specified template.
    
    You can specify the ID of the document to retrieve or can specify `combined` to retrieve all documents in the template as one pdf.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $documentId The ID of the document being accessed.
    * @param string $templateId The ID of the template being accessed.
    * @param array $queryParameters {
    *     @var string $encrypt 
    *     @var string $show_changes 
    * }
    */
    function __construct(string $accountId, string $documentId, string $templateId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->templateId = $templateId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{templateId}'), array($this->accountId, $this->documentId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('encrypt', 'show_changes'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('encrypt', array('string'));
        $optionsResolver->setAllowedTypes('show_changes', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsGetTemplateDocumentBadRequestException
     *
     * @return null
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