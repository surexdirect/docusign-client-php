<?php

namespace Surex\DocuSign\Endpoint;

class ConnectGetConnectUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $connectId;
    /**
    * Returns users from the configured Connect service.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $connectId The ID of the custom Connect configuration being accessed.
    * @param array $queryParameters {
    *     @var string $count Optional. Number of items to return.
    
    *     @var string $email_substring Filters the returned user records by the email address or a sub-string of email address.
    *     @var string $list_included_users 
    *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
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
    function __construct(string $accountId, string $connectId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->connectId = $connectId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{connectId}'), array($this->accountId, $this->connectId), '/v2/accounts/{accountId}/connect/{connectId}/users');
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
        $optionsResolver->setDefined(array('count', 'email_substring', 'list_included_users', 'start_position', 'status', 'user_name_substring'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('email_substring', array('string'));
        $optionsResolver->setAllowedTypes('list_included_users', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('user_name_substring', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ConnectGetConnectUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\IntegratedUserInfoList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\IntegratedUserInfoList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectGetConnectUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}