<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class AttachmentsGetAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $attachmentId;
    protected $envelopeId;

    /**
     * @param string $accountId    the external account number (int) or account ID Guid
     * @param string $attachmentId
     * @param string $envelopeId   The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     */
    public function __construct(string $accountId, string $attachmentId, string $envelopeId)
    {
        $this->accountId    = $accountId;
        $this->attachmentId = $attachmentId;
        $this->envelopeId   = $envelopeId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{attachmentId}', '{envelopeId}'], [$this->accountId, $this->attachmentId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments/{attachmentId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsGetAttachmentBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\AttachmentsGetAttachmentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
