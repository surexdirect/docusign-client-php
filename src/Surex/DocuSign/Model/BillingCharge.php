<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingCharge
{
    /**
     * @var string
     */
    protected $allowedQuantity;
    /**
     * @var string
     */
    protected $blocked;
    /**
     * @var string
     */
    protected $chargeName;
    /**
     * @var string
     */
    protected $chargeType;
    /**
     * @var string
     */
    protected $chargeUnitOfMeasure;
    /**
     * @var BillingDiscount[]
     */
    protected $discounts;
    /**
     * @var string
     */
    protected $firstEffectiveDate;
    /**
     * @var string
     */
    protected $includedQuantity;
    /**
     * @var string
     */
    protected $incrementalQuantity;
    /**
     * @var string
     */
    protected $lastEffectiveDate;
    /**
     * @var BillingPrice[]
     */
    protected $prices;
    /**
     * @var string
     */
    protected $unitPrice;
    /**
     * @var string
     */
    protected $usedQuantity;

    /**
     * @return string
     */
    public function getAllowedQuantity()
    {
        return $this->allowedQuantity;
    }

    /**
     * @param string $allowedQuantity
     *
     * @return self
     */
    public function setAllowedQuantity($allowedQuantity = null)
    {
        $this->allowedQuantity = $allowedQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param string $blocked
     *
     * @return self
     */
    public function setBlocked($blocked = null)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getChargeName()
    {
        return $this->chargeName;
    }

    /**
     * @param string $chargeName
     *
     * @return self
     */
    public function setChargeName($chargeName = null)
    {
        $this->chargeName = $chargeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * @param string $chargeType
     *
     * @return self
     */
    public function setChargeType($chargeType = null)
    {
        $this->chargeType = $chargeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getChargeUnitOfMeasure()
    {
        return $this->chargeUnitOfMeasure;
    }

    /**
     * @param string $chargeUnitOfMeasure
     *
     * @return self
     */
    public function setChargeUnitOfMeasure($chargeUnitOfMeasure = null)
    {
        $this->chargeUnitOfMeasure = $chargeUnitOfMeasure;

        return $this;
    }

    /**
     * @return BillingDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * @param BillingDiscount[] $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts = null)
    {
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstEffectiveDate()
    {
        return $this->firstEffectiveDate;
    }

    /**
     * @param string $firstEffectiveDate
     *
     * @return self
     */
    public function setFirstEffectiveDate($firstEffectiveDate = null)
    {
        $this->firstEffectiveDate = $firstEffectiveDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludedQuantity()
    {
        return $this->includedQuantity;
    }

    /**
     * @param string $includedQuantity
     *
     * @return self
     */
    public function setIncludedQuantity($includedQuantity = null)
    {
        $this->includedQuantity = $includedQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncrementalQuantity()
    {
        return $this->incrementalQuantity;
    }

    /**
     * @param string $incrementalQuantity
     *
     * @return self
     */
    public function setIncrementalQuantity($incrementalQuantity = null)
    {
        $this->incrementalQuantity = $incrementalQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastEffectiveDate()
    {
        return $this->lastEffectiveDate;
    }

    /**
     * @param string $lastEffectiveDate
     *
     * @return self
     */
    public function setLastEffectiveDate($lastEffectiveDate = null)
    {
        $this->lastEffectiveDate = $lastEffectiveDate;

        return $this;
    }

    /**
     * @return BillingPrice[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param BillingPrice[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices = null)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice = null)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsedQuantity()
    {
        return $this->usedQuantity;
    }

    /**
     * @param string $usedQuantity
     *
     * @return self
     */
    public function setUsedQuantity($usedQuantity = null)
    {
        $this->usedQuantity = $usedQuantity;

        return $this;
    }
}
