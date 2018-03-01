<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ContactsGetContactById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $contactId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $contactId       the unique identifier of a person in the contacts address book
     * @param array  $queryParameters {
     *
     *     @var string $cloud_provider
     * }
     */
    public function __construct(string $accountId, string $contactId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->contactId       = $contactId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{contactId}'], [$this->accountId, $this->contactId], '/v2/accounts/{accountId}/contacts/{contactId}');
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
        $optionsResolver->setDefined(['cloud_provider']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('cloud_provider', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsGetContactByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactGetResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ContactGetResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ContactsGetContactByIdBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
