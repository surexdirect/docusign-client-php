<?php

namespace Surex\DocuSign\Endpoint;

class BillingPaymentsGetPayment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $paymentId;
    /**
    * Retrieves the information for a specified payment. 
    
    Privileges required: account administrator 
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $paymentId 
    */
    function __construct(string $accountId, string $paymentId)
    {
        $this->accountId = $accountId;
        $this->paymentId = $paymentId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{paymentId}'), array($this->accountId, $this->paymentId), '/v2/accounts/{accountId}/billing_payments/{paymentId}');
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
     * @throws \Surex\DocuSign\Exception\BillingPaymentsGetPaymentBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Payments
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Payments', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BillingPaymentsGetPaymentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}