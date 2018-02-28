<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesPostEnvelopeTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Adds templates to the specified envelope.
     *
     * @param string                                     $accountId            the external account number (int) or account ID Guid
     * @param string                                     $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\DocumentTemplateList $documentTemplateList
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\DocumentTemplateList $documentTemplateList)
    {
        $this->accountId  = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body       = $documentTemplateList;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/templates');
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
     * @throws \Surex\DocuSign\Exception\TemplatesPostEnvelopeTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\DocumentTemplateList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\DocumentTemplateList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesPostEnvelopeTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
