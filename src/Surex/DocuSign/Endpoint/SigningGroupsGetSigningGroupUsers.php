<?php

namespace Surex\DocuSign\Endpoint;

class SigningGroupsGetSigningGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $signingGroupId;
    /**
     * Retrieves the list of members in the specified Signing Group.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $signingGroupId 
     */
    function __construct(string $accountId, string $signingGroupId)
    {
        $this->accountId = $accountId;
        $this->signingGroupId = $signingGroupId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{signingGroupId}'), array($this->accountId, $this->signingGroupId), '/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users');
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
     * @throws \Surex\DocuSign\Exception\SigningGroupsGetSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\SigningGroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\SigningGroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SigningGroupsGetSigningGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}