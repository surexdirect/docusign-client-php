<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CurrencyFeatureSetPrice
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
    protected $envelopeFee;
    /**
     * @var string
     */
    protected $fixedFee;
    /**
     * @var string
     */
    protected $seatFee;

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
