<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ViewsPostTemplateEditView extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;

    /**
     * @param string                                           $accountId        the external account number (int) or account ID Guid
     * @param string                                           $templateId       the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest
     */
    public function __construct(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest)
    {
        $this->accountId  = $accountId;
        $this->templateId = $templateId;
        $this->body       = $returnUrlRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}'], [$this->accountId, $this->templateId], '/v2/accounts/{accountId}/templates/{templateId}/views/edit');
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
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostTemplateEditViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateViews
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\TemplateViews', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ViewsPostTemplateEditViewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
