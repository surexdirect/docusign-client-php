<?php

namespace Surex\DocuSign\Endpoint;

class LockDeleteTemplateLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
     * Deletes the lock from the specified template. The `X-DocuSign-Edit` header must be included in the request.
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
        return 'DELETE';
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
     * @throws \Surex\DocuSign\Exception\LockDeleteTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LockDeleteTemplateLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}