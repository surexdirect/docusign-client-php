<?php

namespace Surex\DocuSign\Endpoint;

class LockPutEnvelopeLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    /**
     * Updates the lock duration time or update the `lockedByApp` property information for the specified envelope. The user and integrator key must match the user specified by the `lockByUser` property and integrator key information and the `X-DocuSign-Edit` header must be included or an error will be generated.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param \Surex\DocuSign\Model\LockRequest $lockRequest 
     */
    function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\LockRequest $lockRequest)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body = $lockRequest;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}'), array($this->accountId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/lock');
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
     * @throws \Surex\DocuSign\Exception\LockPutEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LockPutEnvelopeLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}