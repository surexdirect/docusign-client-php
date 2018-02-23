<?php

namespace Surex\DocuSign\Endpoint;

class PowerFormsPutPowerForm extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $powerFormId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $powerFormId 
     * @param \Surex\DocuSign\Model\PowerForms $powerForms 
     */
    function __construct(string $accountId, string $powerFormId, \Surex\DocuSign\Model\PowerForms $powerForms)
    {
        $this->accountId = $accountId;
        $this->powerFormId = $powerFormId;
        $this->body = $powerForms;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{powerFormId}'), array($this->accountId, $this->powerFormId), '/v2/accounts/{accountId}/powerforms/{powerFormId}');
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
     * @throws \Surex\DocuSign\Exception\PowerFormsPutPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PowerForms
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PowerForms', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PowerFormsPutPowerFormBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}