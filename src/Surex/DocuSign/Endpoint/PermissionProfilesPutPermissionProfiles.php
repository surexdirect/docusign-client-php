<?php

namespace Surex\DocuSign\Endpoint;

class PermissionProfilesPutPermissionProfiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $permissionProfileId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $permissionProfileId 
     * @param \Surex\DocuSign\Model\AccountPermissionProfiles $accountPermissionProfiles 
     * @param array $queryParameters {
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     */
    function __construct(string $accountId, string $permissionProfileId, \Surex\DocuSign\Model\AccountPermissionProfiles $accountPermissionProfiles, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->permissionProfileId = $permissionProfileId;
        $this->body = $accountPermissionProfiles;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{permissionProfileId}'), array($this->accountId, $this->permissionProfileId), '/v2/accounts/{accountId}/permission_profiles/{permissionProfileId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Surex\DocuSign\Exception\PermissionProfilesPutPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountPermissionProfiles
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountPermissionProfiles', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PermissionProfilesPutPermissionProfilesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}