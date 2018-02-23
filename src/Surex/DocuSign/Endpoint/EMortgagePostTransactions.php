<?php

namespace Surex\DocuSign\Endpoint;

class EMortgagePostTransactions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param \Surex\DocuSign\Model\EMortgageTransactions $eMortgageTransactions 
     */
    function __construct(string $accountId, \Surex\DocuSign\Model\EMortgageTransactions $eMortgageTransactions)
    {
        $this->accountId = $accountId;
        $this->body = $eMortgageTransactions;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/eMortgage/transactions');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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