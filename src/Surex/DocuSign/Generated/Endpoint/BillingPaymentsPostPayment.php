<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BillingPaymentsPostPayment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Posts a payment to a past due invoice.

     ###### Note: This can only be used if the `paymentAllowed` value for a past due invoice is true. This can be determined calling [ML:GetBillingInvoicesPastDue].

     The response returns information for a single payment, if a payment ID was used in the endpoint, or a list of payments. If the from date or to date queries or payment ID are not used, the response returns payment information for the last 365 days. If the request was for a single payment ID, the `nextUri` and `previousUri` properties are not returned.

     Privileges required: account administrator
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\BillingPaymentRequest $billingPaymentRequest
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\BillingPaymentRequest $billingPaymentRequest)
    {
        $this->accountId = $accountId;
        $this->body      = $billingPaymentRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/billing_payments');
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
     * @throws \Surex\DocuSign\Generated\Exception\BillingPaymentsPostPaymentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPaymentResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\BillingPaymentResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BillingPaymentsPostPaymentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
