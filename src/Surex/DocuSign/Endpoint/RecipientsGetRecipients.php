<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsGetRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Retrieves the status of all recipients in a single envelope and identifies the current recipient in the routing list.

     The `currentRoutingOrder` property of the response contains the `routingOrder` value of the current recipient indicating that the envelope has been sent to the recipient, but the recipient has not completed their actions.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations  When set to **true** and `include_tabs` is set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_extended  When set to **true**, the extended properties are included in the response.
     *     @var string $include_metadata reserved for DocuSign

     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     * }
     */
    public function __construct(string $accountId, string $envelopeId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->envelopeId      = $envelopeId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients');
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
        $optionsResolver->setDefined(['include_anchor_tab_locations', 'include_extended', 'include_metadata', 'include_tabs']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_anchor_tab_locations', ['string']);
        $optionsResolver->setAllowedTypes('include_extended', ['string']);
        $optionsResolver->setAllowedTypes('include_metadata', ['string']);
        $optionsResolver->setAllowedTypes('include_tabs', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsGetRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeRecipients
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsGetRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
