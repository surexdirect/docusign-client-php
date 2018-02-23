<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceDeleteWorkspace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $workspaceId;
    /**
     * Deletes an existing workspace (logically).
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $workspaceId Specifies the workspace ID GUID.
     */
    function __construct(string $accountId, string $workspaceId)
    {
        $this->accountId = $accountId;
        $this->workspaceId = $workspaceId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{workspaceId}'), array($this->accountId, $this->workspaceId), '/v2/accounts/{accountId}/workspaces/{workspaceId}');
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
     * @throws \Surex\DocuSign\Exception\WorkspaceDeleteWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Workspaces
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Workspaces', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceDeleteWorkspaceBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}