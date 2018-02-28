<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConnectLogGetConnectLogs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves a list of connect log entries for your account.

     ###### Note: The `enableLog` setting in the Connect configuration must be set to true to enable logging. If logging is not enabled, then no log entries are recorded.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     */
    public function __construct(string $accountId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/connect/logs');
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
     * @throws \Surex\DocuSign\Exception\ConnectLogGetConnectLogsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ConnectEvents
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ConnectEvents', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectLogGetConnectLogsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
