<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class FoldersPutFolderById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;

    /**
     * Moves an envelope from its current folder to the specified folder.

     ###### Note: You can use this endpoint to delete envelopes by specifying `recyclebin` in the `folderId` parameter of the endpoint. Placing an in process envelope (envelope status of `sent` or `delivered`) in the recycle bin voids the envelope. You can also use this endpoint to delete templates by specifying a template ID instead of an envelope ID in the 'envelopeIds' property and specifying `recyclebin` in the `folderId` parameter.
     *
     * @param string                               $accountId      the external account number (int) or account ID Guid
     * @param string                               $folderId       the ID of the folder being accessed
     * @param \Surex\DocuSign\Model\FoldersRequest $foldersRequest
     */
    public function __construct(string $accountId, string $folderId, \Surex\DocuSign\Model\FoldersRequest $foldersRequest)
    {
        $this->accountId = $accountId;
        $this->folderId  = $folderId;
        $this->body      = $foldersRequest;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{folderId}'], [$this->accountId, $this->folderId], '/v2/accounts/{accountId}/folders/{folderId}');
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
     * @throws \Surex\DocuSign\Exception\FoldersPutFolderByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Folders
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Folders', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\FoldersPutFolderByIdBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
