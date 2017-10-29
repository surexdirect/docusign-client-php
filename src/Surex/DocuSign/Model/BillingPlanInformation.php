<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanInformation
{
    /**
     * @var AppStoreReceipt
     */
    protected $appStoreReceipt;
    /**
     * @var AccountAddress
     */
    protected $billingAddress;
    /**
     * @var CreditCardInformation
     */
    protected $creditCardInformation;
    /**
     * @var string
     */
    protected $downgradeReason;
    /**
     * @var string
     */
    protected $enableSupport;
    /**
     * @var string
     */
    protected $includedSeats;
    /**
     * @var string
     */
    protected $incrementalSeats;
    /**
     * @var PaymentProcessorInformation
     */
    protected $paymentProcessorInformation;
    /**
     * @var PlanInformation
     */
    protected $planInformation;
    /**
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * @var string
     */
    protected $renewalStatus;
    /**
     * @var string
     */
    protected $saleDiscountAmount;
    /**
     * @var string
     */
    protected $saleDiscountFixedAmount;
    /**
     * @var string
     */
    protected $saleDiscountPercent;
    /**
     * @var string
     */
    protected $saleDiscountPeriods;
    /**
     * @var string
     */
    protected $saleDiscountSeatPriceOverride;

    /**
     * @return AppStoreReceipt
     */
    public function getAppStoreReceipt()
    {
        return $this->appStoreReceipt;
    }

    /**
     * @param AppStoreReceipt $appStoreReceipt
     *
     * @return self
     */
    public function setAppStoreReceipt(AppStoreReceipt $appStoreReceipt = null)
    {
        $this->appStoreReceipt = $appStoreReceipt;

        return $this;
    }

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
     * @return string
     */
    public function getDowngradeReason()
    {
        return $this->downgradeReason;
    }

    /**
     * @param string $downgradeReason
     *
     * @return self
     */
    public function setDowngradeReason($downgradeReason = null)
    {
        $this->downgradeReason = $downgradeReason;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableSupport()
    {
        return $this->enableSupport;
    }

    /**
     * @param string $enableSupport
     *
     * @return self
     */
    public function setEnableSupport($enableSupport = null)
    {
        $this->enableSupport = $enableSupport;

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
    public function getIncrementalSeats()
    {
        return $this->incrementalSeats;
    }

    /**
     * @param string $incrementalSeats
     *
     * @return self
     */
    public function setIncrementalSeats($incrementalSeats = null)
    {
        $this->incrementalSeats = $incrementalSeats;

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
     * @return PlanInformation
     */
    public function getPlanInformation()
    {
        return $this->planInformation;
    }

    /**
     * @param PlanInformation $planInformation
     *
     * @return self
     */
    public function setPlanInformation(PlanInformation $planInformation = null)
    {
        $this->planInformation = $planInformation;

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
     * @return string
     */
    public function getRenewalStatus()
    {
        return $this->renewalStatus;
    }

    /**
     * @param string $renewalStatus
     *
     * @return self
     */
    public function setRenewalStatus($renewalStatus = null)
    {
        $this->renewalStatus = $renewalStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleDiscountAmount()
    {
        return $this->saleDiscountAmount;
    }

    /**
     * @param string $saleDiscountAmount
     *
     * @return self
     */
    public function setSaleDiscountAmount($saleDiscountAmount = null)
    {
        $this->saleDiscountAmount = $saleDiscountAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleDiscountFixedAmount()
    {
        return $this->saleDiscountFixedAmount;
    }

    /**
     * @param string $saleDiscountFixedAmount
     *
     * @return self
     */
    public function setSaleDiscountFixedAmount($saleDiscountFixedAmount = null)
    {
        $this->saleDiscountFixedAmount = $saleDiscountFixedAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleDiscountPercent()
    {
        return $this->saleDiscountPercent;
    }

    /**
     * @param string $saleDiscountPercent
     *
     * @return self
     */
    public function setSaleDiscountPercent($saleDiscountPercent = null)
    {
        $this->saleDiscountPercent = $saleDiscountPercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleDiscountPeriods()
    {
        return $this->saleDiscountPeriods;
    }

    /**
     * @param string $saleDiscountPeriods
     *
     * @return self
     */
    public function setSaleDiscountPeriods($saleDiscountPeriods = null)
    {
        $this->saleDiscountPeriods = $saleDiscountPeriods;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleDiscountSeatPriceOverride()
    {
        return $this->saleDiscountSeatPriceOverride;
    }

    /**
     * @param string $saleDiscountSeatPriceOverride
     *
     * @return self
     */
    public function setSaleDiscountSeatPriceOverride($saleDiscountSeatPriceOverride = null)
    {
        $this->saleDiscountSeatPriceOverride = $saleDiscountSeatPriceOverride;

        return $this;
    }
}
