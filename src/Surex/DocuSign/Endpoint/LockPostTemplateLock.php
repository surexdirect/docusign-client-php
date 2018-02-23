<?php

namespace Surex\DocuSign\Endpoint;

class LockPostTemplateLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
    * Locks the specified template, and sets the time until the lock expires, to prevent other users or recipients from accessing and changing the template.
    
    ###### Note: Users must have envelope locking capability enabled to use this function (the userSetting property `canLockEnvelopes` must be set to **true** for the user).
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $templateId The ID of the template being accessed.
    * @param \Surex\DocuSign\Model\LockRequest $lockRequest 
    */
    function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\LockRequest $lockRequest)
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->body = $lockRequest;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/lock');
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
     * @throws \Surex\DocuSign\Exception\LockPostTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LockPostTemplateLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}