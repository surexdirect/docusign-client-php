<?php

namespace Surex\DocuSign\Endpoint;

class BillingPlanGetBillingPlan extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Retrieves the billing plan information for the specified account, including the current billing plan, successor plans, billing address, and billing credit card.
    
    By default the successor plan and credit card information is included in the response. This information can be excluded from the response by adding the appropriate optional query string with the `setting` set to **false**. 
    
    Response
    
    The response returns the billing plan information, including the currency code, for the plan. The `billingPlan` and `succesorPlans` property values are the same as those shown in the [ML:Get Billing Plan Details] reference. the `billingAddress` and `creditCardInformation` property values are the same as those shown in the [ML:Update Billing Plan] reference.
    
    ###### Note: When credit card number information is shown, a mask is applied to the response so that only the last 4 digits of the card number are visible. 
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param array $queryParameters {
    *     @var string $include_credit_card_information When set to **true**, excludes credit card information from the response.
    *     @var string $include_metadata When set to **true**, the `canUpgrade` and `renewalStatus` properities are included the response and an array of `supportedCountries` property is added to the `billingAddress` information. 
    *     @var string $include_successor_plans When set to **true**, excludes successor information from the response.
    * }
    */
    function __construct(string $accountId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/billing_plan');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('include_credit_card_information', 'include_metadata', 'include_successor_plans'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include_credit_card_information', array('string'));
        $optionsResolver->setAllowedTypes('include_metadata', array('string'));
        $optionsResolver->setAllowedTypes('include_successor_plans', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\BillingPlanGetBillingPlanBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BillingPlans
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BillingPlans', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\BillingPlanGetBillingPlanBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}