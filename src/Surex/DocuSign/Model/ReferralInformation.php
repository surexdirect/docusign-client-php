<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ReferralInformation
{
    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.

     *
     * @var string
     */
    protected $advertisementId;
    /**
     * When set to **true**, then customer support is provided as part of the account plan.
     *
     * @var string
     */
    protected $enableSupport;
    /**
     * @var string
     */
    protected $externalOrgId;
    /**
     * @var string
     */
    protected $groupMemberId;
    /**
     * @var string
     */
    protected $idType;
    /**
     * The number of seats (users) included.
     *
     * @var string
     */
    protected $includedSeats;
    /**
     * @var string
     */
    protected $industry;
    /**
     * @var string
     */
    protected $planStartMonth;
    /**
     * @var string
     */
    protected $promoCode;
    /**
     * @var string
     */
    protected $publisherId;
    /**
     * @var string
     */
    protected $referralCode;
    /**
     * @var string
     */
    protected $referrerName;
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
     * @var string
     */
    protected $shopperId;

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.

     *
     * @return string
     */
    public function getAdvertisementId(): ?string
    {
        return $this->advertisementId;
    }

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.

     *
     * @param string $advertisementId
     *
     * @return self
     */
    public function setAdvertisementId(?string $advertisementId): self
    {
        $this->advertisementId = $advertisementId;

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
     * @return string
     */
    public function getExternalOrgId(): ?string
    {
        return $this->externalOrgId;
    }

    /**
     * @param string $externalOrgId
     *
     * @return self
     */
    public function setExternalOrgId(?string $externalOrgId): self
    {
        $this->externalOrgId = $externalOrgId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupMemberId(): ?string
    {
        return $this->groupMemberId;
    }

    /**
     * @param string $groupMemberId
     *
     * @return self
     */
    public function setGroupMemberId(?string $groupMemberId): self
    {
        $this->groupMemberId = $groupMemberId;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }

    /**
     * @param string $idType
     *
     * @return self
     */
    public function setIdType(?string $idType): self
    {
        $this->idType = $idType;

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
    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    /**
     * @param string $industry
     *
     * @return self
     */
    public function setIndustry(?string $industry): self
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanStartMonth(): ?string
    {
        return $this->planStartMonth;
    }

    /**
     * @param string $planStartMonth
     *
     * @return self
     */
    public function setPlanStartMonth(?string $planStartMonth): self
    {
        $this->planStartMonth = $planStartMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }

    /**
     * @param string $promoCode
     *
     * @return self
     */
    public function setPromoCode(?string $promoCode): self
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherId(): ?string
    {
        return $this->publisherId;
    }

    /**
     * @param string $publisherId
     *
     * @return self
     */
    public function setPublisherId(?string $publisherId): self
    {
        $this->publisherId = $publisherId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferralCode(): ?string
    {
        return $this->referralCode;
    }

    /**
     * @param string $referralCode
     *
     * @return self
     */
    public function setReferralCode(?string $referralCode): self
    {
        $this->referralCode = $referralCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferrerName(): ?string
    {
        return $this->referrerName;
    }

    /**
     * @param string $referrerName
     *
     * @return self
     */
    public function setReferrerName(?string $referrerName): self
    {
        $this->referrerName = $referrerName;

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

    /**
     * @return string
     */
    public function getShopperId(): ?string
    {
        return $this->shopperId;
    }

    /**
     * @param string $shopperId
     *
     * @return self
     */
    public function setShopperId(?string $shopperId): self
    {
        $this->shopperId = $shopperId;

        return $this;
    }
}
