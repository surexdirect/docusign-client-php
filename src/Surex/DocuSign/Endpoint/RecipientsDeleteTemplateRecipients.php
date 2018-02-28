<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsDeleteTemplateRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Deletes one or more recipients from a template. Recipients to be deleted are listed in the request, with the `recipientId` being used as the key for deleting recipients.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param string                                   $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateRecipients $templateRecipients
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateRecipients $templateRecipients)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $templateRecipients;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/recipients');
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
     * @throws \Surex\DocuSign\Exception\RecipientsDeleteTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateRecipients
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateRecipients', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsDeleteTemplateRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
