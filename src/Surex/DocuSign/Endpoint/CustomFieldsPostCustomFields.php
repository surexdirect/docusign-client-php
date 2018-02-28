<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class CustomFieldsPostCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Updates the envelope custom fields for draft and in-process envelopes.

     Each custom field used in an envelope must have a unique name.
     *
     * @param string                                     $accountId            the external account number (int) or account ID Guid
     * @param string                                     $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeCustomFields $envelopeCustomFields
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\EnvelopeCustomFields $envelopeCustomFields)
    {
        $this->accountId  = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body       = $envelopeCustomFields;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/custom_fields');
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
     * @throws \Surex\DocuSign\Exception\CustomFieldsPostCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CustomFieldsPostCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
