<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class EnvelopesPutEnvelope extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * The Put Envelopes endpoint provides the following functionality:.

     * Sends the specified single draft envelope.
     Add {"status":"sent"} to the request body to send the envelope.

     * Voids the specified in-process envelope.
     Add {"status":"voided", "voidedReason":"The reason for voiding the envelope"} to the request body to void the envelope.

     * Replaces the current email subject and message for a draft envelope.
     Add {"emailSubject":"subject",  "emailBlurb":"message"}  to the request body to modify the subject and message.

     * Place the envelope documents and envelope metadata in a purge queue so that this information is removed from the DocuSign system.
     Add {"purgeState":"purge type"} to the request body.

     *Additional information on purging documents*

     The purge request can only be used for completed envelopes that are not marked as the authoritative copy. The requesting user must have permission to purge documents and must be the sender (the requesting user can act as the sender using Send On Behalf Of).

     ###### Note: If you have set the Document Retention policy on your account, envelope documents are automatically placed in the purge queue and the warning emails are sent at the end of the retention period.
     ###### Note: You can set the Document Retention policy in the Classic DocuSign Experience by specifying the number of days to retain documents.
     ###### Note: Setting a Document Retention policy is the same as setting a schedule for purging documents.

     When the purge request is initiated the envelope documents, or documents and envelope metadata, are placed in a purge queue for deletion in 14 days. A warning email notification is sent to the sender and recipients associated with the envelope, notifying them that the envelope documents will be deleted in 14 days and providing a link to the documents. A second email is sent 7 days later with the same message. At the end of the 14-day period, the envelope documents are deleted from the system.

     If `purgeState="documents_queued"` is used in the request, then only the documents are deleted and any corresponding attachments and tabs remain in the DocuSign system. If `purgeState= "documents_and_metadata_queued"` is used in the request, then the documents, attachments, and tabs are deleted.
     *
     * @param string                          $accountId       the external account number (int) or account ID Guid
     * @param string                          $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\Envelopes $envelopes
     * @param array                           $queryParameters {
     *
     *     @var string $advanced_update when set to **true**, allows the caller to update recipients, tabs, custom fields, notification, email settings and other envelope attributes
     *     @var string $resend_envelope When set to **true**, sends the specified envelope again.
     * }
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\Envelopes $envelopes, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->envelopeId      = $envelopeId;
        $this->body            = $envelopes;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['advanced_update', 'resend_envelope']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('advanced_update', ['string']);
        $optionsResolver->setAllowedTypes('resend_envelope', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\EnvelopesPutEnvelopeBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeUpdateSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeUpdateSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EnvelopesPutEnvelopeBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
