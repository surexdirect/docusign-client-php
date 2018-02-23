<?php

namespace Surex\DocuSign\Endpoint;

class UsersGetUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Retrieves the list of users for the specified account.
    
    The response returns the list of users for the account along with the information about the result set. If the `additional_info` query was added to the endpoint and set to **true**, the full user information is returned for each user
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param array $queryParameters {
    *     @var string $additional_info When set to **true**, the full list of user information is returned for each user in the account.
    *     @var string $count Number of records to return. The number must be greater than 0 and less than or equal to 100. 
    *     @var string $email 
    *     @var string $email_substring Filters the returned user records by the email address or a sub-string of email address.
    *     @var string $group_id Filters user records returned by one or more group Id's.
    *     @var string $include_usersettings_for_csv 
    *     @var string $login_status 
    *     @var string $not_group_id 
    *     @var string $start_position Starting value for the list. 
    *     @var string $status Filters the results by user status.
    You can specify a comma-separated
    list of the following statuses:
    
    * ActivationRequired 
    * ActivationSent 
    * Active
    * Closed 
    * Disabled
    
    *     @var string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
    * }
    */
    function __construct(string $accountId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/users');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('additional_info', 'count', 'email', 'email_substring', 'group_id', 'include_usersettings_for_csv', 'login_status', 'not_group_id', 'start_position', 'status', 'user_name_substring'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('additional_info', array('string'));
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('email_substring', array('string'));
        $optionsResolver->setAllowedTypes('group_id', array('string'));
        $optionsResolver->setAllowedTypes('include_usersettings_for_csv', array('string'));
        $optionsResolver->setAllowedTypes('login_status', array('string'));
        $optionsResolver->setAllowedTypes('not_group_id', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('user_name_substring', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UsersGetUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserInformationList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserInformationList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UsersGetUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}