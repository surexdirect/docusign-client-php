<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsPostTemplateRecipientTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $recipientId;
    protected $templateId;

    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string                             $accountId    the external account number (int) or account ID Guid
     * @param string                             $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                             $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateTabs $templateTabs
     */
    public function __construct(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Model\TemplateTabs $templateTabs)
    {
        $this->accountId   = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId  = $templateId;
        $this->body        = $templateTabs;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{recipientId}', '{templateId}'], [$this->accountId, $this->recipientId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPostTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateRecipientTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPostTemplateRecipientTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
