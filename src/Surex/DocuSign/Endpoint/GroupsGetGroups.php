<?php

namespace Surex\DocuSign\Endpoint;

class GroupsGetGroups extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * Retrieves information about groups associated with the account.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param array $queryParameters {
     *     @var string $count Number of records to return. The number must be greater than 1 and less than or equal to 100.
     *     @var string $group_name Filters the groups returned by the group name or a sub-string of group name.
     *     @var string $group_type 
     *     @var string $search_text 
     *     @var string $start_position Starting value for the list.
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
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/groups');
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
        $optionsResolver->setDefined(array('count', 'group_name', 'group_type', 'search_text', 'start_position'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('group_name', array('string'));
        $optionsResolver->setAllowedTypes('group_type', array('string'));
        $optionsResolver->setAllowedTypes('search_text', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\GroupsGetGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Groups
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Groups', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\GroupsGetGroupsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}