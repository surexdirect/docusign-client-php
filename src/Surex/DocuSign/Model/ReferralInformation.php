<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ReferralInformation
{
    /**
     * @var string
     */
    protected $advertisementId;
    /**
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
     * @var string
     */
    protected $shopperId;

    /**
     * @return string
     */
    public function getAdvertisementId()
    {
        return $this->advertisementId;
    }

    /**
     * @param string $advertisementId
     *
     * @return self
     */
    public function setAdvertisementId($advertisementId = null)
    {
        $this->advertisementId = $advertisementId;

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
    public function getExternalOrgId()
    {
        return $this->externalOrgId;
    }

    /**
     * @param string $externalOrgId
     *
     * @return self
     */
    public function setExternalOrgId($externalOrgId = null)
    {
        $this->externalOrgId = $externalOrgId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupMemberId()
    {
        return $this->groupMemberId;
    }

    /**
     * @param string $groupMemberId
     *
     * @return self
     */
    public function setGroupMemberId($groupMemberId = null)
    {
        $this->groupMemberId = $groupMemberId;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param string $idType
     *
     * @return self
     */
    public function setIdType($idType = null)
    {
        $this->idType = $idType;

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
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param string $industry
     *
     * @return self
     */
    public function setIndustry($industry = null)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanStartMonth()
    {
        return $this->planStartMonth;
    }

    /**
     * @param string $planStartMonth
     *
     * @return self
     */
    public function setPlanStartMonth($planStartMonth = null)
    {
        $this->planStartMonth = $planStartMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param string $promoCode
     *
     * @return self
     */
    public function setPromoCode($promoCode = null)
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param string $publisherId
     *
     * @return self
     */
    public function setPublisherId($publisherId = null)
    {
        $this->publisherId = $publisherId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    /**
     * @param string $referralCode
     *
     * @return self
     */
    public function setReferralCode($referralCode = null)
    {
        $this->referralCode = $referralCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferrerName()
    {
        return $this->referrerName;
    }

    /**
     * @param string $referrerName
     *
     * @return self
     */
    public function setReferrerName($referrerName = null)
    {
        $this->referrerName = $referrerName;

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

    /**
     * @return string
     */
    public function getShopperId()
    {
        return $this->shopperId;
    }

    /**
     * @param string $shopperId
     *
     * @return self
     */
    public function setShopperId($shopperId = null)
    {
        $this->shopperId = $shopperId;

        return $this;
    }
}
