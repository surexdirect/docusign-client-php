<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFilePagesGetWorkspaceFilePages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;
    /**
     * Retrieves a workspace file as rasterized pages.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $fileId Specifies the room file ID GUID.
     * @param string $folderId The ID of the folder being accessed.
     * @param string $workspaceId Specifies the workspace ID GUID.
     * @param array $queryParameters {
     *     @var string $count The maximum number of results to be returned by this request.
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height Sets the maximum height (in pixels) of the returned image.
     *     @var string $max_width Sets the maximum width (in pixels) of the returned image.
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     */
    function __construct(string $accountId, string $fileId, string $folderId, string $workspaceId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->fileId = $fileId;
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
        return str_replace(array('{accountId}', '{fileId}', '{folderId}', '{workspaceId}'), array($this->accountId, $this->fileId, $this->folderId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}/pages');
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
        $optionsResolver->setDefined(array('count', 'dpi', 'max_height', 'max_width', 'start_position'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('count', array('string'));
        $optionsResolver->setAllowedTypes('dpi', array('string'));
        $optionsResolver->setAllowedTypes('max_height', array('string'));
        $optionsResolver->setAllowedTypes('max_width', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\WorkspaceFilePagesGetWorkspaceFilePagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PageImages
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PageImages', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFilePagesGetWorkspaceFilePagesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}