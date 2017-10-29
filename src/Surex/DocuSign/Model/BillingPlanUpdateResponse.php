<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanUpdateResponse
{
    /**
     * @var string
     */
    protected $accountPaymentMethod;
    /**
     * @var BillingPlanPreview
     */
    protected $billingPlanPreview;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $includedSeats;
    /**
     * @var string
     */
    protected $paymentCycle;
    /**
     * @var string
     */
    protected $paymentMethod;
    /**
     * @var string
     */
    protected $planId;
    /**
     * @var string
     */
    protected $planName;

    /**
     * @return string
     */
    public function getAccountPaymentMethod()
    {
        return $this->accountPaymentMethod;
    }

    /**
     * @param string $accountPaymentMethod
     *
     * @return self
     */
    public function setAccountPaymentMethod($accountPaymentMethod = null)
    {
        $this->accountPaymentMethod = $accountPaymentMethod;

        return $this;
    }

    /**
     * @return BillingPlanPreview
     */
    public function getBillingPlanPreview()
    {
        return $this->billingPlanPreview;
    }

    /**
     * @param BillingPlanPreview $billingPlanPreview
     *
     * @return self
     */
    public function setBillingPlanPreview(BillingPlanPreview $billingPlanPreview = null)
    {
        $this->billingPlanPreview = $billingPlanPreview;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode = null)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludedSeats()
    {
        return $this->includedSeats;
    }

    /**
     * @param string $includedSeats
     *
     * @return self
     */
    public function setIncludedSeats($includedSeats = null)
    {
        $this->includedSeats = $includedSeats;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCycle()
    {
        return $this->paymentCycle;
    }

    /**
     * @param string $paymentCycle
     *
     * @return self
     */
    public function setPaymentCycle($paymentCycle = null)
    {
        $this->paymentCycle = $paymentCycle;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId($planId = null)
    {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName($planName = null)
    {
        $this->planName = $planName;

        return $this;
    }
}
