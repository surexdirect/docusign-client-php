<?php

namespace Surex\DocuSign\Endpoint;

class CloudStorageDeleteCloudStorageProviders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $userId;
    /**
     * Deletes the user authentication information for one or more cloud storage providers. The next time the user tries to access the cloud storage provider, they must pass normal authentication.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders 
     */
    function __construct(string $accountId, string $userId, \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders)
    {
        $this->accountId = $accountId;
        $this->userId = $userId;
        $this->body = $cloudStorageProviders;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{userId}'), array($this->accountId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/cloud_storage');
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
     * @throws \Surex\DocuSign\Exception\CloudStorageDeleteCloudStorageProvidersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CloudStorageProviders
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CloudStorageDeleteCloudStorageProvidersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}