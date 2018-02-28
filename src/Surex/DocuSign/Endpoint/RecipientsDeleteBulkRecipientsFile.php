<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsDeleteBulkRecipientsFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;

    /**
     * Deletes the bulk recipient file from an envelope. This cannot be used if the envelope has been sent.

     After using this, the `bulkRecipientsUri` property is not returned in subsequent GET calls for the envelope, but the recipient will remain as a bulk recipient.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     */
    public function __construct(string $accountId, string $envelopeId, string $recipientId)
    {
        $this->accountId   = $accountId;
        $this->envelopeId  = $envelopeId;
        $this->recipientId = $recipientId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}', '{recipientId}'], [$this->accountId, $this->envelopeId, $this->recipientId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/bulk_recipients');
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
     * @throws \Surex\DocuSign\Exception\RecipientsDeleteBulkRecipientsFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BulkRecipientsUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BulkRecipientsUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsDeleteBulkRecipientsFileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
