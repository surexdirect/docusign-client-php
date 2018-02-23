<?php

namespace Surex\DocuSign\Endpoint;

class BrandResourcesPutBrandResources extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $brandId;
    protected $resourceContentType;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $brandId The unique identifier of a brand.
     * @param string $resourceContentType 
     */
    function __construct(string $accountId, string $brandId, string $resourceContentType)
    {
        $this->accountId = $accountId;
        $this->brandId = $brandId;
        $this->resourceContentType = $resourceContentType;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{brandId}', '{resourceContentType}'), array($this->accountId, $this->brandId, $this->resourceContentType), '/v2/accounts/{accountId}/brands/{brandId}/resources/{resourceContentType}');
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
     * @throws \Surex\DocuSign\Exception\BrandResourcesPutBrandResourcesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BrandResources
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BrandResources', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandResourcesPutBrandResourcesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}