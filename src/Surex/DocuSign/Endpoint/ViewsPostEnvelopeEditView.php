<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ViewsPostEnvelopeEditView extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Returns a URL that allows you to embed the edit view of the DocuSign UI in your applications. This is a one-time use login token that allows the user to be placed into the DocuSign editing view.

     Upon sending completion, the user is returned to the return URL provided by the API application.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                 $accountId        the external account number (int) or account ID Guid
     * @param string                                 $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest)
    {
        $this->accountId  = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body       = $returnUrlRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/views/edit');
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
     * @throws \Surex\DocuSign\Exception\ViewsPostEnvelopeEditViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeViews
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ViewsPostEnvelopeEditViewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
