<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class EnvelopesPutStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves the envelope status for the specified envelopes.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest
     * @param array                                    $queryParameters    {
     *
     *     @var string $email reserved for DocuSign

     *     @var string $from_date the date/time setting that specifies when the request begins checking for status changes for envelopes in the account

     *     @var string $start_position reserved for DocuSign

     *     @var string $to_date Optional date/time setting
     that specifies the last date/time
     or envelope status changes in the result set.

     Default: "now", the time that you call the method.

     * }
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->body            = $envelopeIdsRequest;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/envelopes/status');
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
        $optionsResolver->setDefined(['email', 'from_date', 'start_position', 'to_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('email', ['string']);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\EnvelopesPutStatusBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopesInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopesInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EnvelopesPutStatusBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
