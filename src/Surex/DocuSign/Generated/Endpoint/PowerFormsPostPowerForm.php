<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class PowerFormsPostPowerForm extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * @param string                                     $accountId  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\PowerForms $powerForms
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\PowerForms $powerForms)
    {
        $this->accountId = $accountId;
        $this->body      = $powerForms;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/powerforms');
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
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsPostPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerForms
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\PowerForms', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\PowerFormsPostPowerFormBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
