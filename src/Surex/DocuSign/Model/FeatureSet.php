<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FeatureSet
{
    /**
     * @var CurrencyFeatureSetPrice[]
     */
    protected $currencyFeatureSetPrices;
    /**
     * @var string
     */
    protected $envelopeFee;
    /**
     * @var string
     */
    protected $featureSetId;
    /**
     * @var string
     */
    protected $fixedFee;
    /**
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string
     */
    protected $isActive;
    /**
     * @var string
     */
    protected $isEnabled;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $seatFee;

    /**
     * @return CurrencyFeatureSetPrice[]
     */
    public function getCurrencyFeatureSetPrices()
    {
        return $this->currencyFeatureSetPrices;
    }

    /**
     * @param CurrencyFeatureSetPrice[] $currencyFeatureSetPrices
     *
     * @return self
     */
    public function setCurrencyFeatureSetPrices(array $currencyFeatureSetPrices = null)
    {
        $this->currencyFeatureSetPrices = $currencyFeatureSetPrices;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeFee()
    {
        return $this->envelopeFee;
    }

    /**
     * @param string $envelopeFee
     *
     * @return self
     */
    public function setEnvelopeFee($envelopeFee = null)
    {
        $this->envelopeFee = $envelopeFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureSetId()
    {
        return $this->featureSetId;
    }

    /**
     * @param string $featureSetId
     *
     * @return self
     */
    public function setFeatureSetId($featureSetId = null)
    {
        $this->featureSetId = $featureSetId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    /**
     * @param string $fixedFee
     *
     * @return self
     */
    public function setFixedFee($fixedFee = null)
    {
        $this->fixedFee = $fixedFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getIs21CFRPart11()
    {
        return $this->is21CFRPart11;
    }

    /**
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11($is21CFRPart11 = null)
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     *
     * @return self
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param string $isEnabled
     *
     * @return self
     */
    public function setIsEnabled($isEnabled = null)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatFee()
    {
        return $this->seatFee;
    }

    /**
     * @param string $seatFee
     *
     * @return self
     */
    public function setSeatFee($seatFee = null)
    {
        $this->seatFee = $seatFee;

        return $this;
    }
}
