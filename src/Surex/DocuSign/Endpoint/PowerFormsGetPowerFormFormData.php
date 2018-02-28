<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PowerFormsGetPowerFormFormData extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $powerFormId;

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $powerFormId
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     */
    public function __construct(string $accountId, string $powerFormId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->powerFormId     = $powerFormId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{powerFormId}'], [$this->accountId, $this->powerFormId], '/v2/accounts/{accountId}/powerforms/{powerFormId}/form_data');
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
        $optionsResolver->setDefined(['from_date', 'to_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\PowerFormsGetPowerFormFormDataBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PowerFormsFormDataResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PowerFormsFormDataResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PowerFormsGetPowerFormFormDataBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
