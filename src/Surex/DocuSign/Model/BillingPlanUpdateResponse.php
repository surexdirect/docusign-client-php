<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanUpdateResponse
{
    /**
     * @var string
     */
    protected $accountPaymentMethod;
    /**
     * Contains information about a preview billing plan.
     *
     * @var BillingPlanPreview
     */
    protected $billingPlanPreview;
    /**
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The number of seats (users) included.
     *
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
     * The DocuSign Plan ID for the account.
     *
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
    public function getAccountPaymentMethod(): ?string
    {
        return $this->accountPaymentMethod;
    }

    /**
     * @param string $accountPaymentMethod
     *
     * @return self
     */
    public function setAccountPaymentMethod(?string $accountPaymentMethod): self
    {
        $this->accountPaymentMethod = $accountPaymentMethod;

        return $this;
    }

    /**
     * Contains information about a preview billing plan.
     *
     * @return BillingPlanPreview
     */
    public function getBillingPlanPreview(): ?BillingPlanPreview
    {
        return $this->billingPlanPreview;
    }

    /**
     * Contains information about a preview billing plan.
     *
     * @param BillingPlanPreview $billingPlanPreview
     *
     * @return self
     */
    public function setBillingPlanPreview(?BillingPlanPreview $billingPlanPreview): self
    {
        $this->billingPlanPreview = $billingPlanPreview;

        return $this;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The number of seats (users) included.
     *
     * @return string
     */
    public function getIncludedSeats(): ?string
    {
        return $this->includedSeats;
    }

    /**
     * The number of seats (users) included.
     *
     * @param string $includedSeats
     *
     * @return self
     */
    public function setIncludedSeats(?string $includedSeats): self
    {
        $this->includedSeats = $includedSeats;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCycle(): ?string
    {
        return $this->paymentCycle;
    }

    /**
     * @param string $paymentCycle
     *
     * @return self
     */
    public function setPaymentCycle(?string $paymentCycle): self
    {
        $this->paymentCycle = $paymentCycle;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * The DocuSign Plan ID for the account.
     *
     * @return string
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    /**
     * The DocuSign Plan ID for the account.
     *
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanName(): ?string
    {
        return $this->planName;
    }

    /**
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName(?string $planName): self
    {
        $this->planName = $planName;

        return $this;
    }
}
