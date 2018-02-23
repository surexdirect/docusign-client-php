<?php

namespace Surex\DocuSign\Endpoint;

class SearchFoldersGetSearchFolderContents extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $searchFolderId;
    /**
    * Retrieves a list of envelopes that match the criteria specified in the query.
    
    If the user ID of the user making the call is the same as the user ID for any returned recipient, then the userId property is added to the returned information for those recipients.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $searchFolderId Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
    * @param array $queryParameters {
    *     @var string $all Specifies that all envelopes that match the criteria are returned.
    *     @var string $count Specifies the number of records returned in the cache. The number must be greater than 0 and less than or equal to 100.
    *     @var string $from_date Specifies the start of the date range to return. If no value is provided, the default search is the previous 30 days.
    *     @var string $include_recipients When set to **true**, the recipient information is returned in the response.
    *     @var string $order Specifies the order in which the list is returned. Valid values are: `asc` for ascending order, and `desc` for descending order.
    *     @var string $order_by Specifies the property used to sort the list. Valid values are: `action_required`, `created`, `completed`, `sent`, `signer_list`, `status`, or `subject`.
    *     @var string $start_position Specifies the the starting location in the result set of the items that are returned.
    *     @var string $to_date Specifies the end of the date range to return.
    * }
    */
    function __construct(string $accountId, string $searchFolderId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->searchFolderId = $searchFolderId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{searchFolderId}'), array($this->accountId, $this->searchFolderId), '/v2/accounts/{accountId}/search_folders/{searchFolderId}');
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
        $optionsResolver->setDefined(array('all', 'count', 'from_date', 'include_recipients', 'order', 'order_by', 'start_position', 'to_date'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('all', array('string'));
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('from_date', array('string'));
        $optionsResolver->setAllowedTypes('include_recipients', array('string'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('to_date', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\SearchFoldersGetSearchFolderContentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\FolderItemResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\FolderItemResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SearchFoldersGetSearchFolderContentsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}