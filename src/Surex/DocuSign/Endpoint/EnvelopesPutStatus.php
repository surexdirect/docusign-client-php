<?php

namespace Surex\DocuSign\Endpoint;

class EnvelopesPutStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Retrieves the envelope status for the specified envelopes.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param \Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest 
    * @param array $queryParameters {
    *     @var string $email Reserved for DocuSign.
    
    *     @var string $from_date The date/time setting that specifies when the request begins checking for status changes for envelopes in the account.
    
    This is required unless parameters `envelopeIds` and/or `transactionIds` are set.
    *     @var string $start_position Reserved for DocuSign.
    
    *     @var string $to_date Optional date/time setting
    that specifies the last date/time 
    or envelope status changes in the result set. 
    
    Default: "now", the time that you call the method. 
    
    * }
    */
    function __construct(string $accountId, \Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->body = $envelopeIdsRequest;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/envelopes/status');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('email', 'from_date', 'start_position', 'to_date'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('from_date', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('to_date', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\EnvelopesPutStatusBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopesInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopesInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EnvelopesPutStatusBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}