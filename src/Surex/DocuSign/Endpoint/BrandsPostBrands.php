<?php

namespace Surex\DocuSign\Endpoint;

class BrandsPostBrands extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Creates one or more brand profile files for the account. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSig`) must be set to **true** for the account to use this call.
    
    An error is returned if `brandId` property for a brand profile is already set for the account. To upload a new version of an existing brand profile, you must delete the profile and then upload the newer version.
    
    When brand profile files are being uploaded, they must be combined into one zip file and the `Content-Type` must be `application/zip`.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param \Surex\DocuSign\Model\Brand $brand 
    */
    function __construct(string $accountId, \Surex\DocuSign\Model\Brand $brand)
    {
        $this->accountId = $accountId;
        $this->body = $brand;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/brands');
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
     * @throws \Surex\DocuSign\Exception\BrandsPostBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountBrands
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountBrands', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BrandsPostBrandsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}