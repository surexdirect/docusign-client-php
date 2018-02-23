<?php

namespace Surex\DocuSign\Endpoint;

class UserSignaturesPutUserSignature extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $userId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation 
     */
    function __construct(string $accountId, string $userId, \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation)
    {
        $this->accountId = $accountId;
        $this->userId = $userId;
        $this->body = $userSignaturesInformation;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{userId}'), array($this->accountId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/signatures');
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
     * @throws \Surex\DocuSign\Exception\UserSignaturesPutUserSignatureBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserSignaturesInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserSignaturesInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSignaturesPutUserSignatureBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}