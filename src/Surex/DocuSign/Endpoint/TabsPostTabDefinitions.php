<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TabsPostTabDefinitions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Creates a tab with pre-defined properties, such as a text tab with a certain font type and validation pattern. Users can access the custom tabs when sending documents through the DocuSign web application.

     Custom tabs can be created for approve, checkbox, company, date, date signed, decline, email, email address, envelope ID, first name, formula, full name, initial here, last name, list, note, number, radio, sign here, signer attachment, SSN, text, title, and zip tabs.
     *
     * @param string                           $accountId  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\CustomTabs $customTabs
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\CustomTabs $customTabs)
    {
        $this->accountId = $accountId;
        $this->body      = $customTabs;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/tab_definitions');
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
     * @throws \Surex\DocuSign\Exception\TabsPostTabDefinitionsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CustomTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CustomTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabsPostTabDefinitionsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
