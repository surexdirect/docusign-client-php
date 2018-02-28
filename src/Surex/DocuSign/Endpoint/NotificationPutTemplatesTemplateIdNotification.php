<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class NotificationPutTemplatesTemplateIdNotification extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Updates the notification structure for an existing template. Use this endpoint to set reminder and expiration notifications.
     *
     * @param string                                            $accountId                   the external account number (int) or account ID Guid
     * @param string                                            $templateId                  the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateNotificationRequest $templateNotificationRequest
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateNotificationRequest $templateNotificationRequest)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $templateNotificationRequest;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/notification');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\NotificationPutTemplatesTemplateIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Notification
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Notification', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\NotificationPutTemplatesTemplateIdNotificationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
