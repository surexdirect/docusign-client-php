<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesPutTemplate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * Updates an existing template.
     *
     * @param string                          $accountId  the external account number (int) or account ID Guid
     * @param string                          $templateId the ID of the template being accessed
     * @param \Surex\DocuSign\Model\Templates $templates
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Model\Templates $templates)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $templates;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}');
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
     * @throws \Surex\DocuSign\Exception\TemplatesPutTemplateBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateUpdateSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateUpdateSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesPutTemplateBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
