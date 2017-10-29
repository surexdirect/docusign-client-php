<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentDetails
{
    /**
     * @var string
     */
    protected $chargeId;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $gatewayAccountId;
    /**
     * @var string
     */
    protected $gatewayName;
    /**
     * @var PaymentLineItem[]
     */
    protected $lineItems;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var Money
     */
    protected $total;

    /**
     * @return string
     */
    public function getChargeId()
    {
        return $this->chargeId;
    }

    /**
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId($chargeId = null)
    {
        $this->chargeId = $chargeId;

        return $this;
    }

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
    public function getGatewayAccountId()
    {
        return $this->gatewayAccountId;
    }

    /**
     * @param string $gatewayAccountId
     *
     * @return self
     */
    public function setGatewayAccountId($gatewayAccountId = null)
    {
        $this->gatewayAccountId = $gatewayAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayName()
    {
        return $this->gatewayName;
    }

    /**
     * @param string $gatewayName
     *
     * @return self
     */
    public function setGatewayName($gatewayName = null)
    {
        $this->gatewayName = $gatewayName;

        return $this;
    }

    /**
     * @return PaymentLineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param PaymentLineItem[] $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems = null)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Money
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param Money $total
     *
     * @return self
     */
    public function setTotal(Money $total = null)
    {
        $this->total = $total;

        return $this;
    }
}
