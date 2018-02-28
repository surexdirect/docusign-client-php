<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ContactsPutContacts extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                  $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\ContactModRequest $contactModRequest
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\ContactModRequest $contactModRequest)
    {
        $this->accountId = $accountId;
        $this->body      = $contactModRequest;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/contacts');
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
     * @throws \Surex\DocuSign\Exception\ContactsPutContactsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ContactUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ContactUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ContactsPutContactsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
