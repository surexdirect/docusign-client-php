<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingPlans
{
    /**
     * Contains information about an account address.
     *
     * @var AccountAddress
     */
    protected $billingAddress;
    /**
     * When set to **true**, the credit card address information is the same as that returned as the billing address. If false, then the billing address is considered a billing contact address, and the credit card address can be different.
     *
     * @var string
     */
    protected $billingAddressIsCreditCardAddress;
    /**
     * Contains information about an account billing plan.
     *
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
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * @var BillingPlan[]
     */
    protected $successorPlans;

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
     * When set to **true**, the credit card address information is the same as that returned as the billing address. If false, then the billing address is considered a billing contact address, and the credit card address can be different.
     *
     * @return string
     */
    public function getBillingAddressIsCreditCardAddress(): ?string
    {
        return $this->billingAddressIsCreditCardAddress;
    }

    /**
     * When set to **true**, the credit card address information is the same as that returned as the billing address. If false, then the billing address is considered a billing contact address, and the credit card address can be different.
     *
     * @param string $billingAddressIsCreditCardAddress
     *
     * @return self
     */
    public function setBillingAddressIsCreditCardAddress(?string $billingAddressIsCreditCardAddress): self
    {
        $this->billingAddressIsCreditCardAddress = $billingAddressIsCreditCardAddress;

        return $this;
    }

    /**
     * Contains information about an account billing plan.
     *
     * @return AccountBillingPlan
     */
    public function getBillingPlan(): ?AccountBillingPlan
    {
        return $this->billingPlan;
    }

    /**
     * Contains information about an account billing plan.
     *
     * @param AccountBillingPlan $billingPlan
     *
     * @return self
     */
    public function setBillingPlan(?AccountBillingPlan $billingPlan): self
    {
        $this->billingPlan = $billingPlan;

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
     * @return BillingPlan[]
     */
    public function getSuccessorPlans(): ?array
    {
        return $this->successorPlans;
    }

    /**
     * @param BillingPlan[] $successorPlans
     *
     * @return self
     */
    public function setSuccessorPlans(?array $successorPlans): self
    {
        $this->successorPlans = $successorPlans;

        return $this;
    }
}
