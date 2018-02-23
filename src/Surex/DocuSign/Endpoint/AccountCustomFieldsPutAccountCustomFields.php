<?php

namespace Surex\DocuSign\Endpoint;

class AccountCustomFieldsPutAccountCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $customFieldId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $customFieldId 
     * @param \Surex\DocuSign\Model\CustomField $customField 
     * @param array $queryParameters {
     *     @var string $apply_to_templates 
     * }
     */
    function __construct(string $accountId, string $customFieldId, \Surex\DocuSign\Model\CustomField $customField, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->customFieldId = $customFieldId;
        $this->body = $customField;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{customFieldId}'), array($this->accountId, $this->customFieldId), '/v2/accounts/{accountId}/custom_fields/{customFieldId}');
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
        $optionsResolver->setDefined(array('apply_to_templates'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('apply_to_templates', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\AccountCustomFieldsPutAccountCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\AccountCustomFieldsPutAccountCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}