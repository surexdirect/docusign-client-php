<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class RecipientsGetTemplateRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Retrieves the information for all recipients in the specified template.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations  When set to **true** and `include_tabs` is set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_extended  When set to **true**, the extended properties are included in the response.
     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     * }
     */
    public function __construct(string $accountId, string $templateId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->templateId      = $templateId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/recipients');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include_anchor_tab_locations', 'include_extended', 'include_tabs']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_anchor_tab_locations', ['string']);
        $optionsResolver->setAllowedTypes('include_extended', ['string']);
        $optionsResolver->setAllowedTypes('include_tabs', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipients
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateRecipients', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
