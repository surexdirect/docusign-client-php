<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class BillingInvoicesGetBillingInvoices extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves a list of invoices for the account. If the from date or to date queries are not specified, the response returns invoices for the last 365 days.

     Privileges required: account administrator
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date specifies the date/time of the earliest invoice in the account to retrieve
     *     @var string $to_date Specifies the date/time of the latest invoice in the account to retrieve.
     * }
     */
    public function __construct(string $accountId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/billing_invoices');
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
        $optionsResolver->setDefined(['from_date', 'to_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BillingInvoicesGetBillingInvoicesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BillingInvoicesResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BillingInvoicesResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BillingInvoicesGetBillingInvoicesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
