<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ContactsDeleteContactWithId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $contactId;

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $contactId the unique identifier of a person in the contacts address book
     */
    public function __construct(string $accountId, string $contactId)
    {
        $this->accountId = $accountId;
        $this->contactId = $contactId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
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

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsDeleteContactWithIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ContactUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ContactsDeleteContactWithIdBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
