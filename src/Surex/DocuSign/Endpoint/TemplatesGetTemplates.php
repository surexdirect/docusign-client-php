<?php

namespace Surex\DocuSign\Endpoint;

class TemplatesGetTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Retrieves the list of templates for the specified account. The request can be limited to a specific folder.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param array $queryParameters {
    *     @var string $count Number of records to return in the cache.
    *     @var string $folder The query value can be a folder name or folder ID. The response will only return templates in the specified folder.
    *     @var string $folder_ids A comma separated list of folder ID GUIDs.
    *     @var string $folder_types 
    *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
    *     @var string $include A comma-separated list
    of additional template attributes
    to include in the response.
    Valid values are:
    
    * custom_fields
    * documents
    * folders
    * notifications
    * recipients
    
    *     @var string $order Sets the direction order used to sort the list. Valid values are: -asc = ascending sort order (a to z)  -desc = descending sort order (z to a)
    *     @var string $order_by Sets the file attribute used to sort the list. Valid values are:  -name: template name  -modified: date/time template was last modified.  -used: date/time the template was last used.
    *     @var string $search_text The search text used to search the names of templates.
    *     @var string $shared 
    *     @var string $shared_by_me If true, the response only includes templates shared by the user. If false, the response only returns template not shared by the user. If not specified, the response is not affected.
    *     @var string $start_position The starting index for the first template shown in the response. This must be greater than or equal to 0 (zero).
    *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
    *     @var string $used_from_date Start of the search date range. Only returns templates used or edited on or after this date/time. If no value is specified, there is no limit on the earliest date used.
    *     @var string $used_to_date End of the search date range. Only returns templates used or edited up to this date/time. If no value is provided, this defaults to the current date.
    *     @var string $user_filter Sets if the templates shown in the response Valid values are:  -owned_by_me: only shows templates the user owns.  -shared_with_me: only shows templates that are shared with the user.  -all: shows all templates owned or shared with the user.
    *     @var string $user_id 
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
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/templates');
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
        $optionsResolver->setDefined(array('count', 'folder', 'folder_ids', 'folder_types', 'from_date', 'include', 'order', 'order_by', 'search_text', 'shared', 'shared_by_me', 'start_position', 'to_date', 'used_from_date', 'used_to_date', 'user_filter', 'user_id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('folder', array('string'));
        $optionsResolver->setAllowedTypes('folder_ids', array('string'));
        $optionsResolver->setAllowedTypes('folder_types', array('string'));
        $optionsResolver->setAllowedTypes('from_date', array('string'));
        $optionsResolver->setAllowedTypes('include', array('string'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('search_text', array('string'));
        $optionsResolver->setAllowedTypes('shared', array('string'));
        $optionsResolver->setAllowedTypes('shared_by_me', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('to_date', array('string'));
        $optionsResolver->setAllowedTypes('used_from_date', array('string'));
        $optionsResolver->setAllowedTypes('used_to_date', array('string'));
        $optionsResolver->setAllowedTypes('user_filter', array('string'));
        $optionsResolver->setAllowedTypes('user_id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TemplatesGetTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeTemplateResults
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeTemplateResults', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesGetTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}