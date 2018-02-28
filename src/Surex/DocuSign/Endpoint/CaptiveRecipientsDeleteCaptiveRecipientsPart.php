<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class CaptiveRecipientsDeleteCaptiveRecipientsPart extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $recipientPart;

    /**
     * Deletes the signature for one or more captive recipient records; it is primarily used for testing. This provides a way to reset the signature associated with a client user ID so that a new signature can be created the next time the client user ID is used.
     *
     * @param string                                            $accountId                   the external account number (int) or account ID Guid
     * @param string                                            $recipientPart
     * @param \Surex\DocuSign\Model\CaptiveRecipientInformation $captiveRecipientInformation
     */
    public function __construct(string $accountId, string $recipientPart, \Surex\DocuSign\Model\CaptiveRecipientInformation $captiveRecipientInformation)
    {
        $this->accountId     = $accountId;
        $this->recipientPart = $recipientPart;
        $this->body          = $captiveRecipientInformation;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{recipientPart}'], [$this->accountId, $this->recipientPart], '/v2/accounts/{accountId}/captive_recipients/{recipientPart}');
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
     * @throws \Surex\DocuSign\Exception\CaptiveRecipientsDeleteCaptiveRecipientsPartBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CaptiveRecipientInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CaptiveRecipientInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CaptiveRecipientsDeleteCaptiveRecipientsPartBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
