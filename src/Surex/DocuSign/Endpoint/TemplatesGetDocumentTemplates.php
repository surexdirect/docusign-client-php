<?php

namespace Surex\DocuSign\Endpoint;

class TemplatesGetDocumentTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    /**
    * Retrieves the templates associated with a document in the specified envelope.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $documentId The ID of the document being accessed.
    * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
    * @param array $queryParameters {
    *     @var string $include A comma-separated list
    that limits the results.
    Valid values:
    
    * applied
    * matched
    
    * }
    */
    function __construct(string $accountId, string $documentId, string $envelopeId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{envelopeId}'), array($this->accountId, $this->documentId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/templates');
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
        $optionsResolver->setDefined(array('include'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TemplatesGetDocumentTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeTemplates
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeTemplates', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesGetDocumentTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}