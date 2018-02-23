<?php

namespace Surex\DocuSign\Endpoint;

class WatermarkPutWatermark extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param \Surex\DocuSign\Model\AccountWatermarks $accountWatermarks 
     */
    function __construct(string $accountId, \Surex\DocuSign\Model\AccountWatermarks $accountWatermarks)
    {
        $this->accountId = $accountId;
        $this->body = $accountWatermarks;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/watermark');
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
     * @throws \Surex\DocuSign\Exception\WatermarkPutWatermarkBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountWatermarks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountWatermarks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WatermarkPutWatermarkBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}