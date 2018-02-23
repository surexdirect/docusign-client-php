<?php

namespace Surex\DocuSign\Endpoint;

class BrandResourcesGetBrandResources extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
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
     * @param array $queryParameters {
     *     @var string $langcode 
     *     @var string $return_master 
     * }
     */
    function __construct(string $accountId, string $brandId, string $resourceContentType, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->brandId = $brandId;
        $this->resourceContentType = $resourceContentType;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('langcode', 'return_master'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('langcode', array('string'));
        $optionsResolver->setAllowedTypes('return_master', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BrandResourcesGetBrandResourcesBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandResourcesGetBrandResourcesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}