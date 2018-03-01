<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class PagesGetPageImages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $documentId;
    protected $envelopeId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $nocache
     *     @var string $show_changes
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     */
    public function __construct(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->documentId      = $documentId;
        $this->envelopeId      = $envelopeId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}'], [$this->accountId, $this->documentId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages');
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
        $optionsResolver->setDefined(['count', 'dpi', 'max_height', 'max_width', 'nocache', 'show_changes', 'start_position']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('dpi', ['string']);
        $optionsResolver->setAllowedTypes('max_height', ['string']);
        $optionsResolver->setAllowedTypes('max_width', ['string']);
        $optionsResolver->setAllowedTypes('nocache', ['string']);
        $optionsResolver->setAllowedTypes('show_changes', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesGetPageImagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PageImages
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\PageImages', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\PagesGetPageImagesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
