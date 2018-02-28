<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TabsGetDocumentTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
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
     *     @var string $page_numbers
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
        return str_replace(['{accountId}', '{documentId}', '{envelopeId}'], [$this->accountId, $this->documentId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/tabs');
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
        $optionsResolver->setDefined(['page_numbers']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('page_numbers', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TabsGetDocumentTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeDocumentTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeDocumentTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabsGetDocumentTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
