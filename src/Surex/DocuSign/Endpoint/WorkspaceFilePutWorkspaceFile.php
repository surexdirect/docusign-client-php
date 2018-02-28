<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class WorkspaceFilePutWorkspaceFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;

    /**
     * Updates workspace item metadata for one or more specific files/folders.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $fileId      specifies the room file ID GUID
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     */
    public function __construct(string $accountId, string $fileId, string $folderId, string $workspaceId)
    {
        $this->accountId   = $accountId;
        $this->fileId      = $fileId;
        $this->folderId    = $folderId;
        $this->workspaceId = $workspaceId;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{fileId}', '{folderId}', '{workspaceId}'], [$this->accountId, $this->fileId, $this->folderId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}');
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
