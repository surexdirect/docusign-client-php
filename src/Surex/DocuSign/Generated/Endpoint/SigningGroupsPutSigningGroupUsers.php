<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class SigningGroupsPutSigningGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $signingGroupId;

    /**
     * Adds one or more new members to a signing group. A signing group can have a maximum of 50 members.
     *
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param string                                            $signingGroupId
     * @param \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers
     */
    public function __construct(string $accountId, string $signingGroupId, \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers)
    {
        $this->accountId      = $accountId;
        $this->signingGroupId = $signingGroupId;
        $this->body           = $signingGroupUsers;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{signingGroupId}'], [$this->accountId, $this->signingGroupId], '/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users');
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
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPutSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\SigningGroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\SigningGroupsPutSigningGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
