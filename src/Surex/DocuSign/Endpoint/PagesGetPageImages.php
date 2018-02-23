<?php

namespace Surex\DocuSign\Endpoint;

class PagesGetPageImages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $documentId The ID of the document being accessed.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param array $queryParameters {
     *     @var string $count The maximum number of results to be returned by this request.
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height Sets the maximum height (in pixels) of the returned image.
     *     @var string $max_width Sets the maximum width (in pixels) of the returned image.
     *     @var string $nocache 
     *     @var string $show_changes 
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
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
        return str_replace(array('{accountId}', '{documentId}', '{envelopeId}'), array($this->accountId, $this->documentId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages');
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
        $optionsResolver->setDefined(array('count', 'dpi', 'max_height', 'max_width', 'nocache', 'show_changes', 'start_position'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('dpi', array('string'));
        $optionsResolver->setAllowedTypes('max_height', array('string'));
        $optionsResolver->setAllowedTypes('max_width', array('string'));
        $optionsResolver->setAllowedTypes('nocache', array('string'));
        $optionsResolver->setAllowedTypes('show_changes', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\PagesGetPageImagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PageImages
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PageImages', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PagesGetPageImagesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}