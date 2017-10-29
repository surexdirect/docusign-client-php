<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Money
{
    /**
     * @var string
     */
    protected $amountInBaseUnit;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $displayAmount;

    /**
     * @return string
     */
    public function getAmountInBaseUnit()
    {
        return $this->amountInBaseUnit;
    }

    /**
     * @param string $amountInBaseUnit
     *
     * @return self
     */
    public function setAmountInBaseUnit($amountInBaseUnit = null)
    {
        $this->amountInBaseUnit = $amountInBaseUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency($currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayAmount()
    {
        return $this->displayAmount;
    }

    /**
     * @param string $displayAmount
     *
     * @return self
     */
    public function setDisplayAmount($displayAmount = null)
    {
        $this->displayAmount = $displayAmount;

        return $this;
    }
}
