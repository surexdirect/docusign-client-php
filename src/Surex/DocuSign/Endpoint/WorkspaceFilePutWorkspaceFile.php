<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFilePutWorkspaceFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;
    /**
     * Updates workspace item metadata for one or more specific files/folders.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $fileId Specifies the room file ID GUID.
     * @param string $folderId The ID of the folder being accessed.
     * @param string $workspaceId Specifies the workspace ID GUID.
     */
    function __construct(string $accountId, string $fileId, string $folderId, string $workspaceId)
    {
        $this->accountId = $accountId;
        $this->fileId = $fileId;
        $this->folderId = $folderId;
        $this->workspaceId = $workspaceId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
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
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\WorkspaceFilePutWorkspaceFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\WorkspaceItems
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\WorkspaceItems', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFilePutWorkspaceFileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}