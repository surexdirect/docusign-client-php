<?php

namespace Surex\DocuSign\Endpoint;

class ConnectLogDeleteConnectLog extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $logId;
    /**
     * Deletes a specified entry from the Connect Log.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $logId The ID of the connect log entry
     */
    function __construct(string $accountId, string $logId)
    {
        $this->accountId = $accountId;
        $this->logId = $logId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{logId}'), array($this->accountId, $this->logId), '/v2/accounts/{accountId}/connect/logs/{logId}');
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
     * @throws \Surex\DocuSign\Exception\ConnectLogDeleteConnectLogBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectLogDeleteConnectLogBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}