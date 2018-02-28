<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConnectLogGetConnectLog extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $logId;

    /**
     * Retrieves the specified Connect log entry for your account.

     ###### Note: The `enableLog` setting in the Connect configuration must be set to true to enable logging. If logging is not enabled, then no log entries are recorded.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $logId           The ID of the connect log entry
     * @param array  $queryParameters {
     *
     *     @var string $additional_info When true, the connectDebugLog information is included in the response.
     * }
     */
    public function __construct(string $accountId, string $logId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->logId           = $logId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{logId}'], [$this->accountId, $this->logId], '/v2/accounts/{accountId}/connect/logs/{logId}');
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
        $optionsResolver->setDefined(['additional_info']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('additional_info', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ConnectLogGetConnectLogBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ConnectLog
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ConnectLog', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectLogGetConnectLogBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
