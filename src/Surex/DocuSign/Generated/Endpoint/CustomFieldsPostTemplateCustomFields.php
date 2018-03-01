<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class CustomFieldsPostTemplateCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Creates custom document fields in an existing template document.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $templateCustomFields;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/custom_fields');
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
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsPostTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\CustomFieldsPostTemplateCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}