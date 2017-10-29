<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanPreview
{
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var Invoices
     */
    protected $invoice;
    /**
     * @var string
     */
    protected $isProrated;
    /**
     * @var string
     */
    protected $subtotalAmount;
    /**
     * @var string
     */
    protected $taxAmount;
    /**
     * @var string
     */
    protected $totalAmount;

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
     * @return Invoices
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoices $invoice
     *
     * @return self
     */
    public function setInvoice(Invoices $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsProrated()
    {
        return $this->isProrated;
    }

    /**
     * @param string $isProrated
     *
     * @return self
     */
    public function setIsProrated($isProrated = null)
    {
        $this->isProrated = $isProrated;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalAmount()
    {
        return $this->subtotalAmount;
    }

    /**
     * @param string $subtotalAmount
     *
     * @return self
     */
    public function setSubtotalAmount($subtotalAmount = null)
    {
        $this->subtotalAmount = $subtotalAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     *
     * @return self
     */
    public function setTaxAmount($taxAmount = null)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param string $totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount = null)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
