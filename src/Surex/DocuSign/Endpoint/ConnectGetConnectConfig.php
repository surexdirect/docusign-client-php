<?php

namespace Surex\DocuSign\Endpoint;

class ConnectGetConnectConfig extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $connectId;
    /**
    * Retrieves the information for the specified DocuSign Connect configuration.
    
    ###### Note: Connect must be enabled for your account to use this function.
    
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $connectId The ID of the custom Connect configuration being accessed.
    */
    function __construct(string $accountId, string $connectId)
    {
        $this->accountId = $accountId;
        $this->connectId = $connectId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{connectId}'), array($this->accountId, $this->connectId), '/v2/accounts/{accountId}/connect/{connectId}');
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
     * @throws \Surex\DocuSign\Exception\ConnectGetConnectConfigBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ConnectConfigResults
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ConnectConfigResults', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectGetConnectConfigBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}