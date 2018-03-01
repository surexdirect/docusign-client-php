<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceFileGetWorkspaceFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;

    /**
     * Retrieves a workspace file (the binary).
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $fileId          specifies the room file ID GUID
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $is_download When set to **true**, the Content-Disposition header is set in the response. The value of the header provides the filename of the file. Default is **false**.
     *     @var string $pdf_version When set to **true** the file returned as a PDF.
     * }
     */
    public function __construct(string $accountId, string $fileId, string $folderId, string $workspaceId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->fileId          = $fileId;
        $this->folderId        = $folderId;
        $this->workspaceId     = $workspaceId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['is_download', 'pdf_version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('is_download', ['string']);
        $optionsResolver->setAllowedTypes('pdf_version', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFileGetWorkspaceFileBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceFileGetWorkspaceFileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
