<?php

namespace Surex\DocuSign\Endpoint;

class BillingInvoicesGetBillingInvoicesPastDue extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Returns a list past due invoices for the account and notes if payment can be made through the REST API. 
    
    Privileges Required: account administrator
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    */
    function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/billing_invoices_past_due');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BillingInvoicesGetBillingInvoicesPastDueBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BillingInvoicesSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BillingInvoicesSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BillingInvoicesGetBillingInvoicesPastDueBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}