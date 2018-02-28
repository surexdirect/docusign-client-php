<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsPutBulkRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;

    /**
     * Updates the bulk recipients in a draft envelope using a file upload. The Content-Type supported for uploading a bulk recipient file is CSV (text/csv).

     The REST API does not support modifying individual rows or values in the bulk recipients file. It only allows the entire file to be added or replaced with a new file.
     *
     * @param string                                      $accountId             the external account number (int) or account ID Guid
     * @param string                                      $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                      $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest
     */
    public function __construct(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest)
    {
        $this->accountId   = $accountId;
        $this->envelopeId  = $envelopeId;
        $this->recipientId = $recipientId;
        $this->body        = $bulkRecipientsRequest;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}', '{recipientId}'], [$this->accountId, $this->envelopeId, $this->recipientId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/bulk_recipients');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPutBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BulkRecipientsSummaryResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BulkRecipientsSummaryResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutBulkRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
