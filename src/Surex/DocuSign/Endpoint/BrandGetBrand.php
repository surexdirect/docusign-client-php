<?php

namespace Surex\DocuSign\Endpoint;

class BrandGetBrand extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $brandId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $brandId The unique identifier of a brand.
     * @param array $queryParameters {
     *     @var string $include_external_references 
     *     @var string $include_logos 
     * }
     */
    function __construct(string $accountId, string $brandId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->brandId = $brandId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{brandId}'), array($this->accountId, $this->brandId), '/v2/accounts/{accountId}/brands/{brandId}');
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
        $optionsResolver->setDefined(array('include_external_references', 'include_logos'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include_external_references', array('string'));
        $optionsResolver->setAllowedTypes('include_logos', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BrandGetBrandBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Brand
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Brand', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandGetBrandBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}