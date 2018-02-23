<?php

namespace Surex\DocuSign\Endpoint;

class BrandResourcesGetBrandResourcesList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $brandId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $brandId The unique identifier of a brand.
     */
    function __construct(string $accountId, string $brandId)
    {
        $this->accountId = $accountId;
        $this->brandId = $brandId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{brandId}'), array($this->accountId, $this->brandId), '/v2/accounts/{accountId}/brands/{brandId}/resources');
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
     * @throws \Surex\DocuSign\Exception\BrandResourcesGetBrandResourcesListBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BrandResourcesList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BrandResourcesList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandResourcesGetBrandResourcesListBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}