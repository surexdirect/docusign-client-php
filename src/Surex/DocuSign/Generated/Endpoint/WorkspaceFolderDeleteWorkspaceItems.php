<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceFolderDeleteWorkspaceItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;
    protected $workspaceId;

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param string                                            $folderId          the ID of the folder being accessed
     * @param string                                            $workspaceId       specifies the workspace ID GUID
     * @param \Surex\DocuSign\Generated\Model\WorkspaceItemList $workspaceItemList
     */
    public function __construct(string $accountId, string $folderId, string $workspaceId, \Surex\DocuSign\Generated\Model\WorkspaceItemList $workspaceItemList)
    {
        $this->accountId   = $accountId;
        $this->folderId    = $folderId;
        $this->workspaceId = $workspaceId;
        $this->body        = $workspaceItemList;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{folderId}', '{workspaceId}'], [$this->accountId, $this->folderId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFolderDeleteWorkspaceItemsBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceFolderDeleteWorkspaceItemsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
