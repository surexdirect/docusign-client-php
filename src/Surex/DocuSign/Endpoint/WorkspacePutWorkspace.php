<?php

namespace Surex\DocuSign\Endpoint;

class WorkspacePutWorkspace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $workspaceId;
    /**
     * Updates information about a specific workspace.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $workspaceId Specifies the workspace ID GUID.
     * @param \Surex\DocuSign\Model\Workspaces $workspaces 
     */
    function __construct(string $accountId, string $workspaceId, \Surex\DocuSign\Model\Workspaces $workspaces)
    {
        $this->accountId = $accountId;
        $this->workspaceId = $workspaceId;
        $this->body = $workspaces;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{workspaceId}'), array($this->accountId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}');
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
     * @throws \Surex\DocuSign\Exception\WorkspacePutWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Workspaces
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Workspaces', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspacePutWorkspaceBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}