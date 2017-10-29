<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CurrencyPlanPrice
{
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $currencySymbol;
    /**
     * @var string
     */
    protected $perSeatPrice;
    /**
     * @var CreditCardTypes
     */
    protected $supportedCardTypes;
    /**
     * @var string
     */
    protected $supportIncidentFee;
    /**
     * @var string
     */
    protected $supportPlanFee;

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
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @param string $currencySymbol
     *
     * @return self
     */
    public function setCurrencySymbol($currencySymbol = null)
    {
        $this->currencySymbol = $currencySymbol;

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
     * @return CreditCardTypes
     */
    public function getSupportedCardTypes()
    {
        return $this->supportedCardTypes;
    }

    /**
     * @param CreditCardTypes $supportedCardTypes
     *
     * @return self
     */
    public function setSupportedCardTypes(CreditCardTypes $supportedCardTypes = null)
    {
        $this->supportedCardTypes = $supportedCardTypes;

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
