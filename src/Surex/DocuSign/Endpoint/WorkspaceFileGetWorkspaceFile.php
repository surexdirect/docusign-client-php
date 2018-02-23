<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFileGetWorkspaceFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;
    /**
     * Retrieves a workspace file (the binary).
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $fileId Specifies the room file ID GUID.
     * @param string $folderId The ID of the folder being accessed.
     * @param string $workspaceId Specifies the workspace ID GUID.
     * @param array $queryParameters {
     *     @var string $is_download When set to **true**, the Content-Disposition header is set in the response. The value of the header provides the filename of the file. Default is **false**.
     *     @var string $pdf_version When set to **true** the file returned as a PDF.
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
        return str_replace(array('{accountId}', '{fileId}', '{folderId}', '{workspaceId}'), array($this->accountId, $this->fileId, $this->folderId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}');
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
        $optionsResolver->setDefined(array('is_download', 'pdf_version'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('is_download', array('string'));
        $optionsResolver->setAllowedTypes('pdf_version', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\WorkspaceFileGetWorkspaceFileBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFileGetWorkspaceFileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}