<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlans
{
    /**
     * @var AccountAddress
     */
    protected $billingAddress;
    /**
     * @var string
     */
    protected $billingAddressIsCreditCardAddress;
    /**
     * @var AccountBillingPlan
     */
    protected $billingPlan;
    /**
     * @var CreditCardInformation
     */
    protected $creditCardInformation;
    /**
     * @var PaymentProcessorInformation
     */
    protected $paymentProcessorInformation;
    /**
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * @var BillingPlan[]
     */
    protected $successorPlans;

    /**
     * @return AccountAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param AccountAddress $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(AccountAddress $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddressIsCreditCardAddress()
    {
        return $this->billingAddressIsCreditCardAddress;
    }

    /**
     * @param string $billingAddressIsCreditCardAddress
     *
     * @return self
     */
    public function setBillingAddressIsCreditCardAddress($billingAddressIsCreditCardAddress = null)
    {
        $this->billingAddressIsCreditCardAddress = $billingAddressIsCreditCardAddress;

        return $this;
    }

    /**
     * @return AccountBillingPlan
     */
    public function getBillingPlan()
    {
        return $this->billingPlan;
    }

    /**
     * @param AccountBillingPlan $billingPlan
     *
     * @return self
     */
    public function setBillingPlan(AccountBillingPlan $billingPlan = null)
    {
        $this->billingPlan = $billingPlan;

        return $this;
    }

    /**
     * @return CreditCardInformation
     */
    public function getCreditCardInformation()
    {
        return $this->creditCardInformation;
    }

    /**
     * @param CreditCardInformation $creditCardInformation
     *
     * @return self
     */
    public function setCreditCardInformation(CreditCardInformation $creditCardInformation = null)
    {
        $this->creditCardInformation = $creditCardInformation;

        return $this;
    }

    /**
     * @return PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation()
    {
        return $this->paymentProcessorInformation;
    }

    /**
     * @param PaymentProcessorInformation $paymentProcessorInformation
     *
     * @return self
     */
    public function setPaymentProcessorInformation(PaymentProcessorInformation $paymentProcessorInformation = null)
    {
        $this->paymentProcessorInformation = $paymentProcessorInformation;

        return $this;
    }

    /**
     * @return ReferralInformation
     */
    public function getReferralInformation()
    {
        return $this->referralInformation;
    }

    /**
     * @param ReferralInformation $referralInformation
     *
     * @return self
     */
    public function setReferralInformation(ReferralInformation $referralInformation = null)
    {
        $this->referralInformation = $referralInformation;

        return $this;
    }

    /**
     * @return BillingPlan[]
     */
    public function getSuccessorPlans()
    {
        return $this->successorPlans;
    }

    /**
     * @param BillingPlan[] $successorPlans
     *
     * @return self
     */
    public function setSuccessorPlans(array $successorPlans = null)
    {
        $this->successorPlans = $successorPlans;

        return $this;
    }
}
