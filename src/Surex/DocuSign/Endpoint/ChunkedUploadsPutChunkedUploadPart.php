<?php

namespace Surex\DocuSign\Endpoint;

class ChunkedUploadsPutChunkedUploadPart extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $chunkedUploadId;
    protected $chunkedUploadPartSeq;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $chunkedUploadId 
     * @param string $chunkedUploadPartSeq 
     * @param \Surex\DocuSign\Model\ChunkedUploadRequest $chunkedUploadRequest 
     */
    function __construct(string $accountId, string $chunkedUploadId, string $chunkedUploadPartSeq, \Surex\DocuSign\Model\ChunkedUploadRequest $chunkedUploadRequest)
    {
        $this->accountId = $accountId;
        $this->chunkedUploadId = $chunkedUploadId;
        $this->chunkedUploadPartSeq = $chunkedUploadPartSeq;
        $this->body = $chunkedUploadRequest;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{chunkedUploadId}', '{chunkedUploadPartSeq}'), array($this->accountId, $this->chunkedUploadId, $this->chunkedUploadPartSeq), '/v2/accounts/{accountId}/chunked_uploads/{chunkedUploadId}/{chunkedUploadPartSeq}');
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
     * @throws \Surex\DocuSign\Exception\ChunkedUploadsPutChunkedUploadPartBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ChunkedUploads
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ChunkedUploads', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ChunkedUploadsPutChunkedUploadPartBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}