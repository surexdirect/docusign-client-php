<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class SigningGroupsPutSigningGroups extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Updates the name of one or more existing signing groups.
     *
     * @param string                                        $accountId               the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\SigningGroupInformation $signingGroupInformation
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\SigningGroupInformation $signingGroupInformation)
    {
        $this->accountId = $accountId;
        $this->body      = $signingGroupInformation;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/signing_groups');
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
     * @throws \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\SigningGroupInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\SigningGroupInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SigningGroupsPutSigningGroupsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
