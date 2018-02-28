<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesGetEnvelopeTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $envelopeId;

    /**
     * This returns a list of the server-side templates, their name and ID, used in an envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include The possible values are:  matching_applied - This returns template matching information for the template.
     * }
     */
    public function __construct(string $accountId, string $envelopeId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->envelopeId      = $envelopeId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{envelopeId}'], [$this->accountId, $this->envelopeId], '/v2/accounts/{accountId}/envelopes/{envelopeId}/templates');
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
        $optionsResolver->setDefined(['include']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TemplatesGetEnvelopeTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeTemplates
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeTemplates', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesGetEnvelopeTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
