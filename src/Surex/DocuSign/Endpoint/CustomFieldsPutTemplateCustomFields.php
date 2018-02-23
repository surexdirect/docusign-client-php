<?php

namespace Surex\DocuSign\Endpoint;

class CustomFieldsPutTemplateCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
    * Updates the custom fields in a template.
    
    Each custom field used in a template must have a unique name.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $templateId The ID of the template being accessed.
    * @param \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields 
    */
    function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields)
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->body = $templateCustomFields;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/custom_fields');
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
     * @throws \Surex\DocuSign\Exception\CustomFieldsPutTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CustomFieldsPutTemplateCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}