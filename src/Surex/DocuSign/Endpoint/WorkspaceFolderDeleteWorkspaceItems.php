<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFolderDeleteWorkspaceItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $folderId;
    protected $workspaceId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $folderId The ID of the folder being accessed.
     * @param string $workspaceId Specifies the workspace ID GUID.
     * @param \Surex\DocuSign\Model\WorkspaceItemList $workspaceItemList 
     */
    function __construct(string $accountId, string $folderId, string $workspaceId, \Surex\DocuSign\Model\WorkspaceItemList $workspaceItemList)
    {
        $this->accountId = $accountId;
        $this->folderId = $folderId;
        $this->workspaceId = $workspaceId;
        $this->body = $workspaceItemList;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{folderId}', '{workspaceId}'), array($this->accountId, $this->folderId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\WorkspaceFolderDeleteWorkspaceItemsBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFolderDeleteWorkspaceItemsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}