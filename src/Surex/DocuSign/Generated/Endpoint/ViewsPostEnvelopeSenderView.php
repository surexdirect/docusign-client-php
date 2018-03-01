<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ViewsPostEnvelopeSenderView extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * Returns a URL that enables you to embed the sender view of the DocuSign UI in your applications.

     The returned URL can only be redirected to immediately after it is generated. It can only be used once.
     Therefore, request the URL immediately before you redirect your user to it.

     For the best user experience, don't use an iFrame. For iOS devices DocuSign recommends using a WebView.

     Multiple solutions are available for maintaining your
     client state. See the "Maintaining State" section of the [Embedded Signing introduction.](../../../../guide/usage/embedded_signing.html#maintaining-state)

     After the user has completed the sending view, their browser is redirected to the `returnUrl` you supplied.

     By default, if the envelope already contains one or more documents, DocuSign will initially show the document tagging view when you redirect to the URL.

     To start with the envelope's recipients and documents view instead, examine the URL in the method's response.
     Then change the query parameter from `send=1` to `send=0` to start with the recipients/documents view.
     *
     * @param string                                           $accountId        the external account number (int) or account ID Guid
     * @param string                                           $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest
     */
    public function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest)
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
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/views/sender');
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
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeSenderViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeViews', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeSenderViewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
