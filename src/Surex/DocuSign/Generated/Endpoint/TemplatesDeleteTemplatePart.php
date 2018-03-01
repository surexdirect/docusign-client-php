<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class TemplatesDeleteTemplatePart extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $templateId;
    protected $templatePart;

    /**
     * Removes a member group's sharing permissions for a specified template.
     *
     * @param string                                 $accountId    the external account number (int) or account ID Guid
     * @param string                                 $templateId   the ID of the template being accessed
     * @param string                                 $templatePart currently, the only defined part is **groups**
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     */
    public function __construct(string $accountId, string $templateId, string $templatePart, \Surex\DocuSign\Generated\Model\Groups $groups)
    {
        $this->accountId    = $accountId;
        $this->templateId   = $templateId;
        $this->templatePart = $templatePart;
        $this->body         = $groups;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{templateId}', '{templatePart}'], [$this->accountId, $this->templateId, $this->templatePart], '/v2/accounts/{accountId}/templates/{templateId}/{templatePart}');
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
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesDeleteTemplatePartBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Groups', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\TemplatesDeleteTemplatePartBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
