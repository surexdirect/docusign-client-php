<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingInvoiceItem
{
    /**
     * @var string
     */
    protected $chargeAmount;
    /**
     * @var string
     */
    protected $chargeName;
    /**
     * @var string
     */
    protected $invoiceItemId;
    /**
     * @var string
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $unitPrice;

    /**
     * @return string
     */
    public function getChargeAmount()
    {
        return $this->chargeAmount;
    }

    /**
     * @param string $chargeAmount
     *
     * @return self
     */
    public function setChargeAmount($chargeAmount = null)
    {
        $this->chargeAmount = $chargeAmount;

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
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * @param string $invoiceItemId
     *
     * @return self
     */
    public function setInvoiceItemId($invoiceItemId = null)
    {
        $this->invoiceItemId = $invoiceItemId;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

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
}
