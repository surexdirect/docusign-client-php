<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class SigningGroupsPostSigningGroups extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Creates one or more signing groups.

     Multiple signing groups can be created in one call. Only users with account administrator privileges can create signing groups.

     An account can have a maximum of 50 signing groups. Each signing group can have a maximum of 50 group members.

     Signing groups can be used by any account user.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation)
    {
        $this->accountId = $accountId;
        $this->body      = $signingGroupInformation;
    }

    public function getMethod(): string
    {
        return 'POST';
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
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPostSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\SigningGroupInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\SigningGroupsPostSigningGroupsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
