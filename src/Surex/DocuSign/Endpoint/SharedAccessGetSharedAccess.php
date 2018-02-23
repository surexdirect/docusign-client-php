<?php

namespace Surex\DocuSign\Endpoint;

class SharedAccessGetSharedAccess extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Reserved: Retrieves shared item status for one or more users and types of items.
    
    Users with account administration privileges can retrieve shared access information for all account users. Users without account administrator privileges can only retrieve shared access information for themselves and the returned information is limited to the retrieving the status of all members of the account that are sharing their folders to the user. This is equivalent to setting the shared=shared_from.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param array $queryParameters {
    *     @var string $count Specifies maximum number of results included in the response. If no value is specified, this defaults to 1000.
    *     @var string $envelopes_not_shared_user_status 
    *     @var string $folder_ids A comma separated list of folder ID GUIDs.
    *     @var string $item_type Reserved:
    *     @var string $search_text This can be used to filter user names in the response. The wild-card '*' (asterisk) can be used around the string.
    *     @var string $shared Reserved:
    *     @var string $start_position Reserved:
    *     @var string $user_ids Reserved:
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
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/shared_access');
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
        $optionsResolver->setDefined(array('count', 'envelopes_not_shared_user_status', 'folder_ids', 'item_type', 'search_text', 'shared', 'start_position', 'user_ids'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('envelopes_not_shared_user_status', array('string'));
        $optionsResolver->setAllowedTypes('folder_ids', array('string'));
        $optionsResolver->setAllowedTypes('item_type', array('string'));
        $optionsResolver->setAllowedTypes('search_text', array('string'));
        $optionsResolver->setAllowedTypes('shared', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('user_ids', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\SharedAccessGetSharedAccessBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountSharedAccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountSharedAccess', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SharedAccessGetSharedAccessBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}