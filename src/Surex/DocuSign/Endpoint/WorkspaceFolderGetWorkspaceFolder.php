<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFolderGetWorkspaceFolder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $folderId;
    protected $workspaceId;
    /**
     * Retrieves workspace folder contents, which can include sub folders and files.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $folderId The ID of the folder being accessed.
     * @param string $workspaceId Specifies the workspace ID GUID.
     * @param array $queryParameters {
     *     @var string $count The maximum number of results to be returned by this request.
     *     @var string $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
     *     @var string $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
     *     @var string $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
     *     @var string $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
     *     @var string $start_position The position within the total result set from which to start returning values.
     *     @var string $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
     * }
     */
    function __construct(string $accountId, string $folderId, string $workspaceId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->folderId = $folderId;
        $this->workspaceId = $workspaceId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{folderId}', '{workspaceId}'), array($this->accountId, $this->folderId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}');
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
        $optionsResolver->setDefined(array('count', 'include_files', 'include_sub_folders', 'include_thumbnails', 'include_user_detail', 'start_position', 'workspace_user_id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('include_files', array('string'));
        $optionsResolver->setAllowedTypes('include_sub_folders', array('string'));
        $optionsResolver->setAllowedTypes('include_thumbnails', array('string'));
        $optionsResolver->setAllowedTypes('include_user_detail', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('workspace_user_id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\WorkspaceFolderGetWorkspaceFolderBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\WorkspaceFolderContents
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\WorkspaceFolderContents', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFolderGetWorkspaceFolderBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}