<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class UsersGetUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves the list of users for the specified account.

     The response returns the list of users for the account along with the information about the result set. If the `additional_info` query was added to the endpoint and set to **true**, the full user information is returned for each user
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $additional_info when set to **true**, the full list of user information is returned for each user in the account
     *     @var string $count Number of records to return. The number must be greater than 0 and less than or equal to 100.
     *     @var string $email
     *     @var string $email_substring filters the returned user records by the email address or a sub-string of email address
     *     @var string $group_id filters user records returned by one or more group Id's
     *     @var string $include_usersettings_for_csv
     *     @var string $login_status
     *     @var string $not_group_id
     *     @var string $start_position Starting value for the list.
     *     @var string $status filters the results by user status
     *     @var string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
     * }
     */
    public function __construct(string $accountId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/users');
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
        $optionsResolver->setDefined(['additional_info', 'count', 'email', 'email_substring', 'group_id', 'include_usersettings_for_csv', 'login_status', 'not_group_id', 'start_position', 'status', 'user_name_substring']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('additional_info', ['string']);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('email', ['string']);
        $optionsResolver->setAllowedTypes('email_substring', ['string']);
        $optionsResolver->setAllowedTypes('group_id', ['string']);
        $optionsResolver->setAllowedTypes('include_usersettings_for_csv', ['string']);
        $optionsResolver->setAllowedTypes('login_status', ['string']);
        $optionsResolver->setAllowedTypes('not_group_id', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('user_name_substring', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\UsersGetUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserInformationList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\UserInformationList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\UsersGetUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
