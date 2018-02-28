<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class WorkspaceDeleteWorkspace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $workspaceId;

    /**
     * Deletes an existing workspace (logically).
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $workspaceId specifies the workspace ID GUID
     */
    public function __construct(string $accountId, string $workspaceId)
    {
        $this->accountId   = $accountId;
        $this->workspaceId = $workspaceId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{workspaceId}'], [$this->accountId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
