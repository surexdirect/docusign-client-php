<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class WatermarkPreviewPutWatermarkPreview extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                  $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\AccountWatermarks $accountWatermarks
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\AccountWatermarks $accountWatermarks)
    {
        $this->accountId = $accountId;
        $this->body      = $accountWatermarks;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/watermark/preview');
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
     * @throws \Surex\DocuSign\Exception\WatermarkPreviewPutWatermarkPreviewBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountWatermarks
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountWatermarks', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\WatermarkPreviewPutWatermarkPreviewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
