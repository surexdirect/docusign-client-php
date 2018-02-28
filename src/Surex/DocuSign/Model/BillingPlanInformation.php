<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanInformation
{
    /**
     * Contains information about an APP store receipt.
     *
     * @var AppStoreReceipt
     */
    protected $appStoreReceipt;
    /**
     * Contains information about an account address.
     *
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
     * @var PaymentProcessorInformation
     */
    protected $paymentProcessorInformation;
    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @var PlanInformation
     */
    protected $planInformation;
    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * @var string
     */
    protected $renewalStatus;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $saleDiscountAmount;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $saleDiscountFixedAmount;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $saleDiscountPercent;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $saleDiscountPeriods;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $saleDiscountSeatPriceOverride;

    /**
     * Contains information about an APP store receipt.
     *
     * @return AppStoreReceipt
     */
    public function getAppStoreReceipt(): ?AppStoreReceipt
    {
        return $this->appStoreReceipt;
    }

    /**
     * Contains information about an APP store receipt.
     *
     * @param AppStoreReceipt $appStoreReceipt
     *
     * @return self
     */
    public function setAppStoreReceipt(?AppStoreReceipt $appStoreReceipt): self
    {
        $this->appStoreReceipt = $appStoreReceipt;

        return $this;
    }

    /**
     * Contains information about an account address.
     *
     * @return AccountAddress
     */
    public function getBillingAddress(): ?AccountAddress
    {
        return $this->billingAddress;
    }

    /**
     * Contains information about an account address.
     *
     * @param AccountAddress $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?AccountAddress $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return CreditCardInformation
     */
    public function getCreditCardInformation(): ?CreditCardInformation
    {
        return $this->creditCardInformation;
    }

    /**
     * @param CreditCardInformation $creditCardInformation
     *
     * @return self
     */
    public function setCreditCardInformation(?CreditCardInformation $creditCardInformation): self
    {
        $this->creditCardInformation = $creditCardInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getDowngradeReason(): ?string
    {
        return $this->downgradeReason;
    }

    /**
     * @param string $downgradeReason
     *
     * @return self
     */
    public function setDowngradeReason(?string $downgradeReason): self
    {
        $this->downgradeReason = $downgradeReason;

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
     * @return PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation(): ?PaymentProcessorInformation
    {
        return $this->paymentProcessorInformation;
    }

    /**
     * @param PaymentProcessorInformation $paymentProcessorInformation
     *
     * @return self
     */
    public function setPaymentProcessorInformation(?PaymentProcessorInformation $paymentProcessorInformation): self
    {
        $this->paymentProcessorInformation = $paymentProcessorInformation;

        return $this;
    }

    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @return PlanInformation
     */
    public function getPlanInformation(): ?PlanInformation
    {
        return $this->planInformation;
    }

    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @param PlanInformation $planInformation
     *
     * @return self
     */
    public function setPlanInformation(?PlanInformation $planInformation): self
    {
        $this->planInformation = $planInformation;

        return $this;
    }

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @return ReferralInformation
     */
    public function getReferralInformation(): ?ReferralInformation
    {
        return $this->referralInformation;
    }

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @param ReferralInformation $referralInformation
     *
     * @return self
     */
    public function setReferralInformation(?ReferralInformation $referralInformation): self
    {
        $this->referralInformation = $referralInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getRenewalStatus(): ?string
    {
        return $this->renewalStatus;
    }

    /**
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
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getSaleDiscountAmount(): ?string
    {
        return $this->saleDiscountAmount;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $saleDiscountAmount
     *
     * @return self
     */
    public function setSaleDiscountAmount(?string $saleDiscountAmount): self
    {
        $this->saleDiscountAmount = $saleDiscountAmount;

        return $this;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getSaleDiscountFixedAmount(): ?string
    {
        return $this->saleDiscountFixedAmount;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $saleDiscountFixedAmount
     *
     * @return self
     */
    public function setSaleDiscountFixedAmount(?string $saleDiscountFixedAmount): self
    {
        $this->saleDiscountFixedAmount = $saleDiscountFixedAmount;

        return $this;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getSaleDiscountPercent(): ?string
    {
        return $this->saleDiscountPercent;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $saleDiscountPercent
     *
     * @return self
     */
    public function setSaleDiscountPercent(?string $saleDiscountPercent): self
    {
        $this->saleDiscountPercent = $saleDiscountPercent;

        return $this;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getSaleDiscountPeriods(): ?string
    {
        return $this->saleDiscountPeriods;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $saleDiscountPeriods
     *
     * @return self
     */
    public function setSaleDiscountPeriods(?string $saleDiscountPeriods): self
    {
        $this->saleDiscountPeriods = $saleDiscountPeriods;

        return $this;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getSaleDiscountSeatPriceOverride(): ?string
    {
        return $this->saleDiscountSeatPriceOverride;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $saleDiscountSeatPriceOverride
     *
     * @return self
     */
    public function setSaleDiscountSeatPriceOverride(?string $saleDiscountSeatPriceOverride): self
    {
        $this->saleDiscountSeatPriceOverride = $saleDiscountSeatPriceOverride;

        return $this;
    }
}
