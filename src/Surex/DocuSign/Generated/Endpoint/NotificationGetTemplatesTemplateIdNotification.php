<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class NotificationGetTemplatesTemplateIdNotification extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Retrieves the envelope notification, reminders and expirations, information for an existing template.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     */
    public function __construct(string $accountId, string $templateId)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/notification');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\NotificationGetTemplatesTemplateIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Notification
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Notification', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\NotificationGetTemplatesTemplateIdNotificationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
