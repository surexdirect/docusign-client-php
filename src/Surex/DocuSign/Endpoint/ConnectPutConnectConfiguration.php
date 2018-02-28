<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConnectPutConnectConfiguration extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Updates the specified DocuSign Connect configuration in your account.

     ###### Note: Connect must be enabled for your account to use this function. This cannot be used to update Connect configurations for Box, eOriginal, or Salesforce.
     *
     * @param string                                      $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\ConnectConfigurations $connectConfigurations
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\ConnectConfigurations $connectConfigurations)
    {
        $this->accountId = $accountId;
        $this->body      = $connectConfigurations;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/connect');
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
     * @throws \Surex\DocuSign\Exception\ConnectPutConnectConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\ConnectConfigurations
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ConnectConfigurations', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConnectPutConnectConfigurationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
