<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ConnectGetConnectUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $connectId;

    /**
     * Returns users from the configured Connect service.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $connectId       the ID of the custom Connect configuration being accessed
     * @param array  $queryParameters {
     *
     *     @var string $count Optional. Number of items to return.

     *     @var string $email_substring filters the returned user records by the email address or a sub-string of email address
     *     @var string $list_included_users
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     *     @var string $status filters the results by user status
     *     @var string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
     * }
     */
    public function __construct(string $accountId, string $connectId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->connectId       = $connectId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{connectId}'], [$this->accountId, $this->connectId], '/v2/accounts/{accountId}/connect/{connectId}/users');
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
        $optionsResolver->setDefined(['count', 'email_substring', 'list_included_users', 'start_position', 'status', 'user_name_substring']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('email_substring', ['string']);
        $optionsResolver->setAllowedTypes('list_included_users', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('user_name_substring', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectGetConnectUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\IntegratedUserInfoList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\IntegratedUserInfoList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ConnectGetConnectUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
