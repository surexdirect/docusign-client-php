<?php

namespace Surex\DocuSign\Endpoint;

class SigningGroupsPutSigningGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $signingGroupId;
    /**
     * Adds one or more new members to a signing group. A signing group can have a maximum of 50 members. 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $signingGroupId 
     * @param \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers 
     */
    function __construct(string $accountId, string $signingGroupId, \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers)
    {
        $this->accountId = $accountId;
        $this->signingGroupId = $signingGroupId;
        $this->body = $signingGroupUsers;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{signingGroupId}'), array($this->accountId, $this->signingGroupId), '/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users');
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
     * @throws \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\SigningGroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\SigningGroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}