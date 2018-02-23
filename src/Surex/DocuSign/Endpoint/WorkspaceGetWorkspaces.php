<?php

namespace Surex\DocuSign\Endpoint;

class WorkspaceGetWorkspaces extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * Gets information about the Workspaces that have been created.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     */
    function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/workspaces');
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
     * @throws \Surex\DocuSign\Exception\WorkspaceGetWorkspacesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\WorkspaceList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\WorkspaceList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WorkspaceGetWorkspacesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}