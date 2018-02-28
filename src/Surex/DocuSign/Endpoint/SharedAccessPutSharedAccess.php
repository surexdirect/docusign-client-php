<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class SharedAccessPutSharedAccess extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Reserved: Sets the shared access information for one or more users.
     *
     * @param string                                    $accountId           the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\AccountSharedAccess $accountSharedAccess
     * @param array                                     $queryParameters     {
     *
     *     @var string $item_type
     *     @var string $user_ids
     * }
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\AccountSharedAccess $accountSharedAccess, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->body            = $accountSharedAccess;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/shared_access');
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
        $optionsResolver->setDefined(['item_type', 'user_ids']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('item_type', ['string']);
        $optionsResolver->setAllowedTypes('user_ids', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\SharedAccessPutSharedAccessBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountSharedAccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountSharedAccess', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SharedAccessPutSharedAccessBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
