<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class GroupsPutGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $groupId;

    /**
     * Adds one or more users to an existing group.
     *
     * @param string                             $accountId    the external account number (int) or account ID Guid
     * @param string                             $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Model\UserInfoList $userInfoList
     */
    public function __construct(string $accountId, string $groupId, \Surex\DocuSign\Model\UserInfoList $userInfoList)
    {
        $this->accountId = $accountId;
        $this->groupId   = $groupId;
        $this->body      = $userInfoList;
    }

    public function getMethod(): string
    {
        return 'PUT';
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
     * @throws \Surex\DocuSign\Exception\GroupsPutGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\GroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\GroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\GroupsPutGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
