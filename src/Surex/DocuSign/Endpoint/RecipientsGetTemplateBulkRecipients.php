<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsGetTemplateBulkRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $recipientId;
    protected $templateId;
    /**
     * Retrieves the bulk recipient file information from a template that has a bulk recipient.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $recipientId The `recipientId` used when the envelope or template was created.
     * @param string $templateId The ID of the template being accessed.
     * @param array $queryParameters {
     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     *     @var string $start_position Reserved for DocuSign.
     * }
     */
    function __construct(string $accountId, string $recipientId, string $templateId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId = $templateId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{recipientId}', '{templateId}'), array($this->accountId, $this->recipientId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients');
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
        $optionsResolver->setDefined(array('include_tabs', 'start_position'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include_tabs', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsGetTemplateBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateBulkRecipients
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateBulkRecipients', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsGetTemplateBulkRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}