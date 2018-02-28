<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class EMortgagePostTransactions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                      $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\EMortgageTransactions $eMortgageTransactions
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\EMortgageTransactions $eMortgageTransactions)
    {
        $this->accountId = $accountId;
        $this->body      = $eMortgageTransactions;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/eMortgage/transactions');
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
     * @throws \Surex\DocuSign\Exception\EMortgagePostTransactionsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PostTransactionsResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PostTransactionsResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EMortgagePostTransactionsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
