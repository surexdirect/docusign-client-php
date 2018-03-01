<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class RecipientsPutRecipientDocumentVisibility extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                     $recipientId                the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility
     */
    public function __construct(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility)
    {
        $this->accountId   = $accountId;
        $this->envelopeId  = $envelopeId;
        $this->recipientId = $recipientId;
        $this->body        = $envelopeDocumentVisibility;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}', '{recipientId}'], [$this->accountId, $this->envelopeId, $this->recipientId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/document_visibility');
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
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeDocumentVisibility', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientDocumentVisibilityBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
