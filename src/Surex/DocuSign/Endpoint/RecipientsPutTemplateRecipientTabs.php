<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPutTemplateRecipientTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $recipientId;
    protected $templateId;
    /**
     * Updates one or more tabs for a recipient in a template.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $recipientId The `recipientId` used when the envelope or template was created.
     * @param string $templateId The ID of the template being accessed.
     * @param \Surex\DocuSign\Model\TemplateTabs $templateTabs 
     */
    function __construct(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Model\TemplateTabs $templateTabs)
    {
        $this->accountId = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId = $templateId;
        $this->body = $templateTabs;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{recipientId}', '{templateId}'), array($this->accountId, $this->recipientId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateRecipientTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}