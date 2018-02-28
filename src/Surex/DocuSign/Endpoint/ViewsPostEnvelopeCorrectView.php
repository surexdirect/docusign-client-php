<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ViewsPostEnvelopeCorrectView extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Returns a URL that allows you to embed the envelope correction view of the DocuSign UI in your applications.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\CorrectViewRequest $correctViewRequest
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\CorrectViewRequest $correctViewRequest)
    {
        $this->accountId  = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body       = $correctViewRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/views/correct');
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
     * @throws \Surex\DocuSign\Exception\ViewsPostEnvelopeCorrectViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeViews
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ViewsPostEnvelopeCorrectViewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
