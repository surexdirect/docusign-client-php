<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class LockGetTemplateLock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Retrieves general information about the template lock.

     If the call is made by the user who has the lock and the request has the same integrator key as original, then the `X-DocuSign-Edit` header  field and additional lock information is included in the response. This allows users to recover a lost editing session token and the `X-DocuSign-Edit` header.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     */
    public function __construct(string $accountId, string $templateId)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/lock');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\LockGetTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateLocks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateLocks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LockGetTemplateLockBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
