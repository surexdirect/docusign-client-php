<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class AccountCustomFieldsPutAccountCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $customFieldId;

    /**
     * @param string                                      $accountId       the external account number (int) or account ID Guid
     * @param string                                      $customFieldId
     * @param \Surex\DocuSign\Generated\Model\CustomField $customField
     * @param array                                       $queryParameters {
     *
     *     @var string $apply_to_templates
     * }
     */
    public function __construct(string $accountId, string $customFieldId, \Surex\DocuSign\Generated\Model\CustomField $customField, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->customFieldId   = $customFieldId;
        $this->body            = $customField;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{customFieldId}'], [$this->accountId, $this->customFieldId], '/v2/accounts/{accountId}/custom_fields/{customFieldId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['apply_to_templates']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('apply_to_templates', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountCustomFieldsPutAccountCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\AccountCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\AccountCustomFieldsPutAccountCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
