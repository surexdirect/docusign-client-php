<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class RecipientsPutTemplateRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Updates recipients in a template.

     You can edit the following properties: `email`, `userName`, `routingOrder`, `faxNumber`, `deliveryMethod`, `accessCode`, and `requireIdLookup`.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param string                                   $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateRecipients $templateRecipients
     * @param array                                    $queryParameters    {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\TemplateRecipients $templateRecipients, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->templateId      = $templateId;
        $this->body            = $templateRecipients;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['resend_envelope']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('resend_envelope', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\RecipientsUpdateSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\RecipientsUpdateSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutTemplateRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
