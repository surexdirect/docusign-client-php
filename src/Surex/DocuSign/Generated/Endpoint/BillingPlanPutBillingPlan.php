<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BillingPlanPutBillingPlan extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Updates the billing plan information, billing address, and credit card information for the specified account.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\BillingPlanInformation $billingPlanInformation
     * @param array                                                  $queryParameters        {
     *
     *     @var string $preview_billing_plan When set to **true**, updates the account using a preview billing plan.
     * }
     */
    public function __construct(string $accountId, \Surex\DocuSign\Generated\Model\BillingPlanInformation $billingPlanInformation, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->body            = $billingPlanInformation;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/billing_plan');
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
        $optionsResolver->setDefined(['preview_billing_plan']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('preview_billing_plan', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlanPutBillingPlanBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPlanUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\BillingPlanUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BillingPlanPutBillingPlanBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
