<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BillingPaymentsGetPayment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $paymentId;

    /**
     * Retrieves the information for a specified payment.

     Privileges required: account administrator
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $paymentId
     */
    public function __construct(string $accountId, string $paymentId)
    {
        $this->accountId = $accountId;
        $this->paymentId = $paymentId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{paymentId}'], [$this->accountId, $this->paymentId], '/v2/accounts/{accountId}/billing_payments/{paymentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPaymentsGetPaymentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Payments
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Payments', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BillingPaymentsGetPaymentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
