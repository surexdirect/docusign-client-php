<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceFilePostWorkspaceFiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;
    protected $workspaceId;

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     */
    public function __construct(string $accountId, string $folderId, string $workspaceId)
    {
        $this->accountId   = $accountId;
        $this->folderId    = $folderId;
        $this->workspaceId = $workspaceId;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{folderId}', '{workspaceId}'], [$this->accountId, $this->folderId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files');
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
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFilePostWorkspaceFilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceItems
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\WorkspaceItems', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceFilePostWorkspaceFilesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
