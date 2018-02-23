<?php

namespace Surex\DocuSign\Endpoint;

class ConnectLogGetConnectLog extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $logId;
    /**
    * Retrieves the specified Connect log entry for your account.
    
    ###### Note: The `enableLog` setting in the Connect configuration must be set to true to enable logging. If logging is not enabled, then no log entries are recorded. 
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $logId The ID of the connect log entry
    * @param array $queryParameters {
    *     @var string $additional_info When true, the connectDebugLog information is included in the response.
    * }
    */
    function __construct(string $accountId, string $logId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->logId = $logId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('additional_info'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('additional_info', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ConnectLogGetConnectLogBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ConnectLog
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ConnectLog', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectLogGetConnectLogBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}