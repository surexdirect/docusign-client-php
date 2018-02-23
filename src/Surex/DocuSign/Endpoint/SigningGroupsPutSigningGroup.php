<?php

namespace Surex\DocuSign\Endpoint;

class SigningGroupsPutSigningGroup extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $signingGroupId;
    /**
     * Updates signing group name and member information. You can also add new members to the signing group. A signing group can have a maximum of 50 members. 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $signingGroupId 
     * @param \Surex\DocuSign\Model\SigningGroups $signingGroups 
     */
    function __construct(string $accountId, string $signingGroupId, \Surex\DocuSign\Model\SigningGroups $signingGroups)
    {
        $this->accountId = $accountId;
        $this->signingGroupId = $signingGroupId;
        $this->body = $signingGroups;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{signingGroupId}'), array($this->accountId, $this->signingGroupId), '/v2/accounts/{accountId}/signing_groups/{signingGroupId}');
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
     * @throws \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\SigningGroups
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\SigningGroups', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}