<?php

namespace Surex\DocuSign\Endpoint;

class ConnectFailuresDeleteConnectFailureLog extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $failureId;
    /**
     * Deletes the Connect failure log information for the specified entry.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $failureId The ID of the failed connect log entry.
     */
    function __construct(string $accountId, string $failureId)
    {
        $this->accountId = $accountId;
        $this->failureId = $failureId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{failureId}'), array($this->accountId, $this->failureId), '/v2/accounts/{accountId}/connect/failures/{failureId}');
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
     * @throws \Surex\DocuSign\Exception\ConnectFailuresDeleteConnectFailureLogBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectFailuresDeleteConnectFailureLogBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}