<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlan
{
    /**
     * Reserved: TBD.
     *
     * @var AppStoreProduct[]
     */
    protected $appStoreProducts;
    /**
     * Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, and seatFee that are configured for this plan feature set.
     *
     * @var CurrencyPlanPrice[]
     */
    protected $currencyPlanPrices;
    /**
     * When set to **true**, then customer support is provided as part of the account plan.
     *
     * @var string
     */
    protected $enableSupport;
    /**
     * The number of seats (users) included.
     *
     * @var string
     */
    protected $includedSeats;
    /**
     * @var string
     */
    protected $otherDiscountPercent;
    /**
     *  The payment cycle associated with the plan. The possible values are: Monthly or Annually.
     *
     * @var string
     */
    protected $paymentCycle;
    /**
     * @var string
     */
    protected $paymentMethod;
    /**
     * The per seat price for the plan.
     *
     * @var string
     */
    protected $perSeatPrice;
    /**
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @var string
     */
    protected $planClassification;
    /**
     * A complex type that sets the feature sets for the account.
     *
     * @var FeatureSet[]
     */
    protected $planFeatureSets;
    /**
     * The DocuSign Plan ID for the account.
     *
     * @var string
     */
    protected $planId;
    /**
     * The name of the Billing Plan.
     *
     * @var string
     */
    protected $planName;
    /**
     * @var SeatDiscount[]
     */
    protected $seatDiscounts;
    /**
     * The support incident fee charged for each support incident.
     *
     * @var string
     */
    protected $supportIncidentFee;
    /**
     * The support plan fee charged for this plan.
     *
     * @var string
     */
    protected $supportPlanFee;

    /**
     * Reserved: TBD.
     *
     * @return AppStoreProduct[]
     */
    public function getAppStoreProducts(): ?array
    {
        return $this->appStoreProducts;
    }

    /**
     * Reserved: TBD.
     *
     * @param AppStoreProduct[] $appStoreProducts
     *
     * @return self
     */
    public function setAppStoreProducts(?array $appStoreProducts): self
    {
        $this->appStoreProducts = $appStoreProducts;

        return $this;
    }

    /**
     * Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, and seatFee that are configured for this plan feature set.
     *
     * @return CurrencyPlanPrice[]
     */
    public function getCurrencyPlanPrices(): ?array
    {
        return $this->currencyPlanPrices;
    }

    /**
     * Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, and seatFee that are configured for this plan feature set.
     *
     * @param CurrencyPlanPrice[] $currencyPlanPrices
     *
     * @return self
     */
    public function setCurrencyPlanPrices(?array $currencyPlanPrices): self
    {
        $this->currencyPlanPrices = $currencyPlanPrices;

        return $this;
    }

    /**
     * When set to **true**, then customer support is provided as part of the account plan.
     *
     * @return string
     */
    public function getEnableSupport(): ?string
    {
        return $this->enableSupport;
    }

    /**
     * When set to **true**, then customer support is provided as part of the account plan.
     *
     * @param string $enableSupport
     *
     * @return self
     */
    public function setEnableSupport(?string $enableSupport): self
    {
        $this->enableSupport = $enableSupport;

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
    public function getOtherDiscountPercent(): ?string
    {
        return $this->otherDiscountPercent;
    }

    /**
     * @param string $otherDiscountPercent
     *
     * @return self
     */
    public function setOtherDiscountPercent(?string $otherDiscountPercent): self
    {
        $this->otherDiscountPercent = $otherDiscountPercent;

        return $this;
    }

    /**
     *  The payment cycle associated with the plan. The possible values are: Monthly or Annually.
     *
     * @return string
     */
    public function getPaymentCycle(): ?string
    {
        return $this->paymentCycle;
    }

    /**
     *  The payment cycle associated with the plan. The possible values are: Monthly or Annually.
     *
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
     * The per seat price for the plan.
     *
     * @return string
     */
    public function getPerSeatPrice(): ?string
    {
        return $this->perSeatPrice;
    }

    /**
     * The per seat price for the plan.
     *
     * @param string $perSeatPrice
     *
     * @return self
     */
    public function setPerSeatPrice(?string $perSeatPrice): self
    {
        $this->perSeatPrice = $perSeatPrice;

        return $this;
    }

    /**
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @return string
     */
    public function getPlanClassification(): ?string
    {
        return $this->planClassification;
    }

    /**
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @param string $planClassification
     *
     * @return self
     */
    public function setPlanClassification(?string $planClassification): self
    {
        $this->planClassification = $planClassification;

        return $this;
    }

    /**
     * A complex type that sets the feature sets for the account.
     *
     * @return FeatureSet[]
     */
    public function getPlanFeatureSets(): ?array
    {
        return $this->planFeatureSets;
    }

    /**
     * A complex type that sets the feature sets for the account.
     *
     * @param FeatureSet[] $planFeatureSets
     *
     * @return self
     */
    public function setPlanFeatureSets(?array $planFeatureSets): self
    {
        $this->planFeatureSets = $planFeatureSets;

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
     * The name of the Billing Plan.
     *
     * @return string
     */
    public function getPlanName(): ?string
    {
        return $this->planName;
    }

    /**
     * The name of the Billing Plan.
     *
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName(?string $planName): self
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * @return SeatDiscount[]
     */
    public function getSeatDiscounts(): ?array
    {
        return $this->seatDiscounts;
    }

    /**
     * @param SeatDiscount[] $seatDiscounts
     *
     * @return self
     */
    public function setSeatDiscounts(?array $seatDiscounts): self
    {
        $this->seatDiscounts = $seatDiscounts;

        return $this;
    }

    /**
     * The support incident fee charged for each support incident.
     *
     * @return string
     */
    public function getSupportIncidentFee(): ?string
    {
        return $this->supportIncidentFee;
    }

    /**
     * The support incident fee charged for each support incident.
     *
     * @param string $supportIncidentFee
     *
     * @return self
     */
    public function setSupportIncidentFee(?string $supportIncidentFee): self
    {
        $this->supportIncidentFee = $supportIncidentFee;

        return $this;
    }

    /**
     * The support plan fee charged for this plan.
     *
     * @return string
     */
    public function getSupportPlanFee(): ?string
    {
        return $this->supportPlanFee;
    }

    /**
     * The support plan fee charged for this plan.
     *
     * @param string $supportPlanFee
     *
     * @return self
     */
    public function setSupportPlanFee(?string $supportPlanFee): self
    {
        $this->supportPlanFee = $supportPlanFee;

        return $this;
    }
}
