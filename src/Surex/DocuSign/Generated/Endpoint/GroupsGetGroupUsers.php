<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class GroupsGetGroupUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $groupId;

    /**
     * Retrieves a list of users in a group.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $groupId         the ID of the group being accessed
     * @param array  $queryParameters {
     *
     *     @var string $count Number of records to return. The number must be greater than 1 and less than or equal to 100.
     *     @var string $start_position Starting value for the list.
     * }
     */
    public function __construct(string $accountId, string $groupId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->groupId         = $groupId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{groupId}'], [$this->accountId, $this->groupId], '/v2/accounts/{accountId}/groups/{groupId}/users');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['count', 'start_position']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsGetGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\GroupUsers', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\GroupsGetGroupUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
