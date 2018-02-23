<?php

namespace Surex\DocuSign\Endpoint;

class NotificationGetTemplatesTemplateIdNotification extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    /**
     * Retrieves the envelope notification, reminders and expirations, information for an existing template.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $templateId The ID of the template being accessed.
     */
    function __construct(string $accountId, string $templateId)
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}'), array($this->accountId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/notification');
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
     * @throws \Surex\DocuSign\Exception\NotificationGetTemplatesTemplateIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Notification
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Notification', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\NotificationGetTemplatesTemplateIdNotificationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}