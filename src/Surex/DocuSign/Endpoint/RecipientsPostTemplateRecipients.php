<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPostTemplateRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
     * Adds one or more recipients to a template.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $templateId The ID of the template being accessed.
     * @param \Surex\DocuSign\Model\TemplateRecipients $templateRecipients 
     * @param array $queryParameters {
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     */
    function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateRecipients $templateRecipients, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->body = $templateRecipients;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients');
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
        $optionsResolver->setDefined(array('resend_envelope'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('resend_envelope', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsPostTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateRecipients
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateRecipients', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPostTemplateRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}