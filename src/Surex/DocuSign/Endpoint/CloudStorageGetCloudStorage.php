<?php

namespace Surex\DocuSign\Endpoint;

class CloudStorageGetCloudStorage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $serviceId;
    protected $userId;
    /**
    * Retrieves the list of cloud storage providers enabled for the account and the configuration information for the user.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $serviceId The ID of the service to access. 
    
    Valid values are the service name ("Box") or the numerical serviceId ("4136").
    * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
    * @param array $queryParameters {
    *     @var string $redirectUrl  The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.
    
    The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.
    
    * }
    */
    function __construct(string $accountId, string $serviceId, string $userId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->serviceId = $serviceId;
        $this->userId = $userId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{serviceId}', '{userId}'), array($this->accountId, $this->serviceId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}');
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
        $optionsResolver->setDefined(array('redirectUrl'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('redirectUrl', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\CloudStorageGetCloudStorageBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CloudStorageProviders
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CloudStorageGetCloudStorageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}