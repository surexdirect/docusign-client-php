<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class SigningGroupsGetSigningGroup extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $signingGroupId;

    /**
     * Retrieves information, including group member information, for the specified signing group.
     *
     * @param string $accountId      the external account number (int) or account ID Guid
     * @param string $signingGroupId
     */
    public function __construct(string $accountId, string $signingGroupId)
    {
        $this->accountId      = $accountId;
        $this->signingGroupId = $signingGroupId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{signingGroupId}'], [$this->accountId, $this->signingGroupId], '/v2/accounts/{accountId}/signing_groups/{signingGroupId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsGetSigningGroupBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroups
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\SigningGroups', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\SigningGroupsGetSigningGroupBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
