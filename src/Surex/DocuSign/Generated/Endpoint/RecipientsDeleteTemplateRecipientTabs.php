<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class RecipientsDeleteTemplateRecipientTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $recipientId;
    protected $templateId;

    /**
     * Deletes one or more tabs associated with a recipient in a template.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                                       $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs
     */
    public function __construct(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs)
    {
        $this->accountId   = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId  = $templateId;
        $this->body        = $templateTabs;
    }

    public function getMethod(): string
    {
        return 'DELETE';
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
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipientTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateRecipientTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateRecipientTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
