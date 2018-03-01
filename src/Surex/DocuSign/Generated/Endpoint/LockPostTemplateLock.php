<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class LockPostTemplateLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Locks the specified template, and sets the time until the lock expires, to prevent other users or recipients from accessing and changing the template.

     ###### Note: Users must have envelope locking capability enabled to use this function (the userSetting property `canLockEnvelopes` must be set to **true** for the user).
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $lockRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/lock');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockPostTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\LockPostTemplateLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
