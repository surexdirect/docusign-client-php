<?php

namespace Surex\DocuSign\Endpoint;

class CloudStorageDeleteCloudStorage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $serviceId;
    protected $userId;
    /**
    * Deletes the user authentication information for the specified cloud storage provider. The next time the user tries to access the cloud storage provider, they must pass normal authentication for this cloud storage provider.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $serviceId The ID of the service to access. 
    
    Valid values are the service name ("Box") or the numerical serviceId ("4136").
    * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
    */
    function __construct(string $accountId, string $serviceId, string $userId)
    {
        $this->accountId = $accountId;
        $this->serviceId = $serviceId;
        $this->userId = $userId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
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
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\CloudStorageDeleteCloudStorageBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CloudStorageProviders
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CloudStorageDeleteCloudStorageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}