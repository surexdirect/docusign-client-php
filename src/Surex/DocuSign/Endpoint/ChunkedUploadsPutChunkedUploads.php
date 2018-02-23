<?php

namespace Surex\DocuSign\Endpoint;

class ChunkedUploadsPutChunkedUploads extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $chunkedUploadId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $chunkedUploadId 
     * @param array $queryParameters {
     *     @var string $action 
     * }
     */
    function __construct(string $accountId, string $chunkedUploadId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->chunkedUploadId = $chunkedUploadId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{chunkedUploadId}'), array($this->accountId, $this->chunkedUploadId), '/v2/accounts/{accountId}/chunked_uploads/{chunkedUploadId}');
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
        $optionsResolver->setDefined(array('action'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('action', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ChunkedUploadsPutChunkedUploadsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ChunkedUploads
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ChunkedUploads', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ChunkedUploadsPutChunkedUploadsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}