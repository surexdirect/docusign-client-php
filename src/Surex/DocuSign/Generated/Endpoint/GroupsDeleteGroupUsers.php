<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class GroupsDeleteGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $groupId;

    /**
     * Deletes one or more users from a group.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList
     */
    public function __construct(string $accountId, string $groupId, \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList)
    {
        $this->accountId = $accountId;
        $this->groupId   = $groupId;
        $this->body      = $userInfoList;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{groupId}'], [$this->accountId, $this->groupId], '/v2/accounts/{accountId}/groups/{groupId}/users');
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
     * @throws \Surex\DocuSign\Generated\Exception\GroupsDeleteGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\GroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\GroupsDeleteGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
