<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceFolderGetWorkspaceFolder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;
    protected $workspaceId;

    /**
     * Retrieves workspace folder contents, which can include sub folders and files.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
     *     @var string $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
     *     @var string $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
     *     @var string $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
     *     @var string $start_position the position within the total result set from which to start returning values
     *     @var string $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
     * }
     */
    public function __construct(string $accountId, string $folderId, string $workspaceId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
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
        return str_replace(['{accountId}', '{folderId}', '{workspaceId}'], [$this->accountId, $this->folderId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}');
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
        $optionsResolver->setDefined(['count', 'include_files', 'include_sub_folders', 'include_thumbnails', 'include_user_detail', 'start_position', 'workspace_user_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('include_files', ['string']);
        $optionsResolver->setAllowedTypes('include_sub_folders', ['string']);
        $optionsResolver->setAllowedTypes('include_thumbnails', ['string']);
        $optionsResolver->setAllowedTypes('include_user_detail', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('workspace_user_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFolderGetWorkspaceFolderBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceFolderContents
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\WorkspaceFolderContents', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceFolderGetWorkspaceFolderBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
