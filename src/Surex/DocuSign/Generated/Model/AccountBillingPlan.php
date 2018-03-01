<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AccountBillingPlan
{
    /**
     * Reserved:.
     *
     * @var AddOn[]
     */
    protected $addOns;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $canCancelRenewal;
    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @var string
     */
    protected $canUpgrade;
    /**
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
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
     * Reserved: TBD.
     *
     * @var string
     */
    protected $incrementalSeats;
    /**
     * @var string
     */
    protected $isDowngrade;
    /**
     *  Any other percentage discount for the plan.
     *
     * @var string
     */
    protected $otherDiscountPercent;
    /**
     * @var string
     */
    protected $paymentCycle;
    /**
     *  The payment method used with the plan. The possible values are: CreditCard, PurchaseOrder, Premium, or Freemium.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
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
     * A complex type that sets the feature sets for the account. It contains the following information (all string content):.

     * currencyFeatureSetPrices - Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, seatFee that are configured for this plan feature set.
     * envelopeFee - An incremental envelope cost for plans with envelope overages (when isEnabled=true).
     * featureSetId - A unique ID for the feature set.
     * fixedFee - A one-time fee associated with the plan (when isEnabled=true).
     * isActive - Specifies whether the feature set is actively set as part of the plan.
     * isEnabled - Specifies whether the feature set is actively enabled as part of the plan.
     * name - The name of the feature set.
     * seatFee - An incremental seat cost for seat-based plans (when isEnabled=true).

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
     * The renewal status for the account. The acceptable values are:.

     * auto: The account automatically renews.
     * queued_for_close: Account will be closed at the billingPeriodEndDate.
     * queued_for_downgrade: Account will be downgraded at the billingPeriodEndDate.
     *
     * @var string
     */
    protected $renewalStatus;
    /**
     *  A complex type that contains any seat discount information.

     Values are: BeginSeatCount, EndSeatCount, and SeatDiscountPercent.

     *
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
     * Reserved:.
     *
     * @return AddOn[]
     */
    public function getAddOns(): ?array
    {
        return $this->addOns;
    }

    /**
     * Reserved:.
     *
     * @param AddOn[] $addOns
     *
     * @return self
     */
    public function setAddOns(?array $addOns): self
    {
        $this->addOns = $addOns;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getCanCancelRenewal(): ?string
    {
        return $this->canCancelRenewal;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $canCancelRenewal
     *
     * @return self
     */
    public function setCanCancelRenewal(?string $canCancelRenewal): self
    {
        $this->canCancelRenewal = $canCancelRenewal;

        return $this;
    }

    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @return string
     */
    public function getCanUpgrade(): ?string
    {
        return $this->canUpgrade;
    }

    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @param string $canUpgrade
     *
     * @return self
     */
    public function setCanUpgrade(?string $canUpgrade): self
    {
        $this->canUpgrade = $canUpgrade;

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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getIncrementalSeats(): ?string
    {
        return $this->incrementalSeats;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $incrementalSeats
     *
     * @return self
     */
    public function setIncrementalSeats(?string $incrementalSeats): self
    {
        $this->incrementalSeats = $incrementalSeats;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsDowngrade(): ?string
    {
        return $this->isDowngrade;
    }

    /**
     * @param string $isDowngrade
     *
     * @return self
     */
    public function setIsDowngrade(?string $isDowngrade): self
    {
        $this->isDowngrade = $isDowngrade;

        return $this;
    }

    /**
     *  Any other percentage discount for the plan.
     *
     * @return string
     */
    public function getOtherDiscountPercent(): ?string
    {
        return $this->otherDiscountPercent;
    }

    /**
     *  Any other percentage discount for the plan.
     *
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
     *  The payment method used with the plan. The possible values are: CreditCard, PurchaseOrder, Premium, or Freemium.
     *
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     *  The payment method used with the plan. The possible values are: CreditCard, PurchaseOrder, Premium, or Freemium.
     *
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
     * @return string
     */
    public function getPerSeatPrice(): ?string
    {
        return $this->perSeatPrice;
    }

    /**
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
     * A complex type that sets the feature sets for the account. It contains the following information (all string content):.

     * currencyFeatureSetPrices - Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, seatFee that are configured for this plan feature set.
     * envelopeFee - An incremental envelope cost for plans with envelope overages (when isEnabled=true).
     * featureSetId - A unique ID for the feature set.
     * fixedFee - A one-time fee associated with the plan (when isEnabled=true).
     * isActive - Specifies whether the feature set is actively set as part of the plan.
     * isEnabled - Specifies whether the feature set is actively enabled as part of the plan.
     * name - The name of the feature set.
     * seatFee - An incremental seat cost for seat-based plans (when isEnabled=true).

     *
     * @return FeatureSet[]
     */
    public function getPlanFeatureSets(): ?array
    {
        return $this->planFeatureSets;
    }

    /**
     * A complex type that sets the feature sets for the account. It contains the following information (all string content):.

     * currencyFeatureSetPrices - Contains the currencyCode and currencySymbol for the alternate currency values for envelopeFee, fixedFee, seatFee that are configured for this plan feature set.
     * envelopeFee - An incremental envelope cost for plans with envelope overages (when isEnabled=true).
     * featureSetId - A unique ID for the feature set.
     * fixedFee - A one-time fee associated with the plan (when isEnabled=true).
     * isActive - Specifies whether the feature set is actively set as part of the plan.
     * isEnabled - Specifies whether the feature set is actively enabled as part of the plan.
     * name - The name of the feature set.
     * seatFee - An incremental seat cost for seat-based plans (when isEnabled=true).

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
     * The renewal status for the account. The acceptable values are:.

     * auto: The account automatically renews.
     * queued_for_close: Account will be closed at the billingPeriodEndDate.
     * queued_for_downgrade: Account will be downgraded at the billingPeriodEndDate.
     *
     * @return string
     */
    public function getRenewalStatus(): ?string
    {
        return $this->renewalStatus;
    }

    /**
     * The renewal status for the account. The acceptable values are:.

     * auto: The account automatically renews.
     * queued_for_close: Account will be closed at the billingPeriodEndDate.
     * queued_for_downgrade: Account will be downgraded at the billingPeriodEndDate.
     *
     * @param string $renewalStatus
     *
     * @return self
     */
    public function setRenewalStatus(?string $renewalStatus): self
    {
        $this->renewalStatus = $renewalStatus;

        return $this;
    }

    /**
     *  A complex type that contains any seat discount information.

     Values are: BeginSeatCount, EndSeatCount, and SeatDiscountPercent.

     *
     * @return SeatDiscount[]
     */
    public function getSeatDiscounts(): ?array
    {
        return $this->seatDiscounts;
    }

    /**
     *  A complex type that contains any seat discount information.

     Values are: BeginSeatCount, EndSeatCount, and SeatDiscountPercent.

     *
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
