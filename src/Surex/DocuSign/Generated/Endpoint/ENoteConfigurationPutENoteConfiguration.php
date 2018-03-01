<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class ENoteConfigurationPutENoteConfiguration extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                              $accountId           the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ENoteConfigurations $eNoteConfigurations
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\ENoteConfigurations $eNoteConfigurations)
    {
        $this->accountId = $accountId;
        $this->body      = $eNoteConfigurations;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/settings/enote_configuration');
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
     * @throws \Surex\DocuSign\Generated\Exception\ENoteConfigurationPutENoteConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ENoteConfigurations
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ENoteConfigurations', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\ENoteConfigurationPutENoteConfigurationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
