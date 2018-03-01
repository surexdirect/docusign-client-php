<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class PowerFormsGetPowerForm extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $powerFormId;

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $powerFormId
     */
    public function __construct(string $accountId, string $powerFormId)
    {
        $this->accountId   = $accountId;
        $this->powerFormId = $powerFormId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{powerFormId}'], [$this->accountId, $this->powerFormId], '/v2/accounts/{accountId}/powerforms/{powerFormId}');
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
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerForms
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\PowerForms', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
