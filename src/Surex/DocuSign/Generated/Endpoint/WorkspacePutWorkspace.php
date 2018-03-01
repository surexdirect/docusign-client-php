<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspacePutWorkspace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $workspaceId;

    /**
     * Updates information about a specific workspace.
     *
     * @param string                                     $accountId   the external account number (int) or account ID Guid
     * @param string                                     $workspaceId specifies the workspace ID GUID
     * @param \Surex\DocuSign\Generated\Model\Workspaces $workspaces
     */
    public function __construct(string $accountId, string $workspaceId, \Surex\DocuSign\Generated\Model\Workspaces $workspaces)
    {
        $this->accountId   = $accountId;
        $this->workspaceId = $workspaceId;
        $this->body        = $workspaces;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{workspaceId}'], [$this->accountId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspacePutWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Workspaces', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspacePutWorkspaceBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
