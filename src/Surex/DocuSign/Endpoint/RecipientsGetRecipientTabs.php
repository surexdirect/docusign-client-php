<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsGetRecipientTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;

    /**
     * Retrieves information about the tabs associated with a recipient in a draft envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     */
    public function __construct(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->envelopeId      = $envelopeId;
        $this->recipientId     = $recipientId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}', '{recipientId}'], [$this->accountId, $this->envelopeId, $this->recipientId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include_anchor_tab_locations', 'include_metadata']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_anchor_tab_locations', ['string']);
        $optionsResolver->setAllowedTypes('include_metadata', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsGetRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeRecipientTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsGetRecipientTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
