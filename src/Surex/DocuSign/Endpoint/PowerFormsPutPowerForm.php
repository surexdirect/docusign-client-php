<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class PowerFormsPutPowerForm extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $powerFormId;

    /**
     * @param string                           $accountId   the external account number (int) or account ID Guid
     * @param string                           $powerFormId
     * @param \Surex\DocuSign\Model\PowerForms $powerForms
     */
    public function __construct(string $accountId, string $powerFormId, \Surex\DocuSign\Model\PowerForms $powerForms)
    {
        $this->accountId   = $accountId;
        $this->powerFormId = $powerFormId;
        $this->body        = $powerForms;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{powerFormId}'], [$this->accountId, $this->powerFormId], '/v2/accounts/{accountId}/powerforms/{powerFormId}');
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
     * @throws \Surex\DocuSign\Exception\PowerFormsPutPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\PowerForms
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\PowerForms', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PowerFormsPutPowerFormBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
