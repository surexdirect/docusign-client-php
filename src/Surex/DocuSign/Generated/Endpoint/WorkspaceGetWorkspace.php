<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class WorkspaceGetWorkspace extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $workspaceId;

    /**
     * Retrives properties about a workspace given a unique workspaceId.
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
        return 'GET';
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
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceGetWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Workspaces', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\WorkspaceGetWorkspaceBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
