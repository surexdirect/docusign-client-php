<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountBillingPlan
{
    /**
     * @var AddOn[]
     */
    protected $addOns;
    /**
     * @var string
     */
    protected $canCancelRenewal;
    /**
     * @var string
     */
    protected $canUpgrade;
    /**
     * @var string
     */
    protected $currencyCode;
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
     * @var string
     */
    protected $isDowngrade;
    /**
     * @var string
     */
    protected $otherDiscountPercent;
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
    protected $perSeatPrice;
    /**
     * @var string
     */
    protected $planClassification;
    /**
     * @var FeatureSet[]
     */
    protected $planFeatureSets;
    /**
     * @var string
     */
    protected $planId;
    /**
     * @var string
     */
    protected $planName;
    /**
     * @var string
     */
    protected $renewalStatus;
    /**
     * @var SeatDiscount[]
     */
    protected $seatDiscounts;
    /**
     * @var string
     */
    protected $supportIncidentFee;
    /**
     * @var string
     */
    protected $supportPlanFee;

    /**
     * @return AddOn[]
     */
    public function getAddOns()
    {
        return $this->addOns;
    }

    /**
     * @param AddOn[] $addOns
     *
     * @return self
     */
    public function setAddOns(array $addOns = null)
    {
        $this->addOns = $addOns;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanCancelRenewal()
    {
        return $this->canCancelRenewal;
    }

    /**
     * @param string $canCancelRenewal
     *
     * @return self
     */
    public function setCanCancelRenewal($canCancelRenewal = null)
    {
        $this->canCancelRenewal = $canCancelRenewal;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanUpgrade()
    {
        return $this->canUpgrade;
    }

    /**
     * @param string $canUpgrade
     *
     * @return self
     */
    public function setCanUpgrade($canUpgrade = null)
    {
        $this->canUpgrade = $canUpgrade;

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
     * @return string
     */
    public function getIsDowngrade()
    {
        return $this->isDowngrade;
    }

    /**
     * @param string $isDowngrade
     *
     * @return self
     */
    public function setIsDowngrade($isDowngrade = null)
    {
        $this->isDowngrade = $isDowngrade;

        return $this;
    }

    /**
     * @return string
     */
    public function getOtherDiscountPercent()
    {
        return $this->otherDiscountPercent;
    }

    /**
     * @param string $otherDiscountPercent
     *
     * @return self
     */
    public function setOtherDiscountPercent($otherDiscountPercent = null)
    {
        $this->otherDiscountPercent = $otherDiscountPercent;

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
    public function getPerSeatPrice()
    {
        return $this->perSeatPrice;
    }

    /**
     * @param string $perSeatPrice
     *
     * @return self
     */
    public function setPerSeatPrice($perSeatPrice = null)
    {
        $this->perSeatPrice = $perSeatPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanClassification()
    {
        return $this->planClassification;
    }

    /**
     * @param string $planClassification
     *
     * @return self
     */
    public function setPlanClassification($planClassification = null)
    {
        $this->planClassification = $planClassification;

        return $this;
    }

    /**
     * @return FeatureSet[]
     */
    public function getPlanFeatureSets()
    {
        return $this->planFeatureSets;
    }

    /**
     * @param FeatureSet[] $planFeatureSets
     *
     * @return self
     */
    public function setPlanFeatureSets(array $planFeatureSets = null)
    {
        $this->planFeatureSets = $planFeatureSets;

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
     * @return SeatDiscount[]
     */
    public function getSeatDiscounts()
    {
        return $this->seatDiscounts;
    }

    /**
     * @param SeatDiscount[] $seatDiscounts
     *
     * @return self
     */
    public function setSeatDiscounts(array $seatDiscounts = null)
    {
        $this->seatDiscounts = $seatDiscounts;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupportIncidentFee()
    {
        return $this->supportIncidentFee;
    }

    /**
     * @param string $supportIncidentFee
     *
     * @return self
     */
    public function setSupportIncidentFee($supportIncidentFee = null)
    {
        $this->supportIncidentFee = $supportIncidentFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupportPlanFee()
    {
        return $this->supportPlanFee;
    }

    /**
     * @param string $supportPlanFee
     *
     * @return self
     */
    public function setSupportPlanFee($supportPlanFee = null)
    {
        $this->supportPlanFee = $supportPlanFee;

        return $this;
    }
}
