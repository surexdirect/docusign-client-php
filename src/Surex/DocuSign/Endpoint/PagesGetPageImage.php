<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PagesGetPageImage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    protected $pageNumber;

    /**
     * Retrieves a page image for display from the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber      the page number being accessed
     * @param array  $queryParameters {
     *
     *     @var string $dpi sets the dpi for the image
     *     @var string $max_height Sets the maximum height for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $max_width Sets the maximum width for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $show_changes
     * }
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, string $pageNumber, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->documentId      = $documentId;
        $this->envelopeId      = $envelopeId;
        $this->pageNumber      = $pageNumber;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}', '{pageNumber}'], [$this->accountId, $this->documentId, $this->envelopeId, $this->pageNumber], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}/page_image');
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
        $optionsResolver->setDefined(['dpi', 'max_height', 'max_width', 'show_changes']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('dpi', ['string']);
        $optionsResolver->setAllowedTypes('max_height', ['string']);
        $optionsResolver->setAllowedTypes('max_width', ['string']);
        $optionsResolver->setAllowedTypes('show_changes', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\PagesGetPageImageBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PagesGetPageImageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
