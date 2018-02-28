<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BulkEnvelopesGetBulkEnvelopesBatchId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $batchId;

    /**
     * Retrieves the status information of a single bulk recipient batch. A bulk recipient batch is the set of envelopes sent from a single bulk recipient file.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $batchId
     * @param array  $queryParameters {
     *
     *     @var string $count specifies the number of entries to return
     *     @var string $include Specifies which entries are included in the response. Multiple entries can be included by using commas in the query string (example: ?include="failed,queued")

     Valid values:
     * all - Returns all entries. If present, overrides all other query settings. This is the default if no query string is provided.
     * failed - Entries with a failed status.
     * processing - Entries with a processing status.
     * queued - Entries with a queued status.
     * sent - Entries with a sent status.

     *     @var string $start_position Specifies the location in the list of envelopes from which to start.
     * }
     */
    public function __construct(string $accountId, string $batchId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->batchId         = $batchId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{batchId}'], [$this->accountId, $this->batchId], '/v2/accounts/{accountId}/bulk_envelopes/{batchId}');
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
        $optionsResolver->setDefined(['count', 'include', 'start_position']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('include', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BulkEnvelopesGetBulkEnvelopesBatchIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BulkEnvelopeStatus
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BulkEnvelopeStatus', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BulkEnvelopesGetBulkEnvelopesBatchIdBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
