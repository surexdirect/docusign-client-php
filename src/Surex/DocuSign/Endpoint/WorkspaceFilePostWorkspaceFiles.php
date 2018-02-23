<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceFilePostWorkspaceFiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
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
     */
    function __construct(string $accountId, string $folderId, string $workspaceId)
    {
        $this->accountId = $accountId;
        $this->folderId = $folderId;
        $this->workspaceId = $workspaceId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{folderId}', '{workspaceId}'), array($this->accountId, $this->folderId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files');
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
     * @throws \Surex\DocuSign\Exception\WorkspaceFilePostWorkspaceFilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\WorkspaceItems
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\WorkspaceItems', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceFilePostWorkspaceFilesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}