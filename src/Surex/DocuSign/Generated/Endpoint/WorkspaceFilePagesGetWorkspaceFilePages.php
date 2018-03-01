<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceFilePagesGetWorkspaceFilePages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $fileId;
    protected $folderId;
    protected $workspaceId;

    /**
     * Retrieves a workspace file as rasterized pages.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $fileId          specifies the room file ID GUID
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
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
        return str_replace(['{accountId}', '{fileId}', '{folderId}', '{workspaceId}'], [$this->accountId, $this->fileId, $this->folderId, $this->workspaceId], '/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}/pages');
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
        $optionsResolver->setDefined(['count', 'dpi', 'max_height', 'max_width', 'start_position']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('dpi', ['string']);
        $optionsResolver->setAllowedTypes('max_height', ['string']);
        $optionsResolver->setAllowedTypes('max_width', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFilePagesGetWorkspaceFilePagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PageImages
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\PageImages', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceFilePagesGetWorkspaceFilePagesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
