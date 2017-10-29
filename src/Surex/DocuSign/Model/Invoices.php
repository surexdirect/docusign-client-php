<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Invoices
{
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $balance;
    /**
     * @var string
     */
    protected $dueDate;
    /**
     * @var string
     */
    protected $invoiceId;
    /**
     * @var BillingInvoiceItem[]
     */
    protected $invoiceItems;
    /**
     * @var string
     */
    protected $invoiceNumber;
    /**
     * @var string
     */
    protected $invoiceUri;
    /**
     * @var string
     */
    protected $nonTaxableAmount;
    /**
     * @var string
     */
    protected $pdfAvailable;
    /**
     * @var string
     */
    protected $taxableAmount;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return self
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     *
     * @return self
     */
    public function setBalance($balance = null)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate($dueDate = null)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId($invoiceId = null)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * @return BillingInvoiceItem[]
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * @param BillingInvoiceItem[] $invoiceItems
     *
     * @return self
     */
    public function setInvoiceItems(array $invoiceItems = null)
    {
        $this->invoiceItems = $invoiceItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceUri()
    {
        return $this->invoiceUri;
    }

    /**
     * @param string $invoiceUri
     *
     * @return self
     */
    public function setInvoiceUri($invoiceUri = null)
    {
        $this->invoiceUri = $invoiceUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getNonTaxableAmount()
    {
        return $this->nonTaxableAmount;
    }

    /**
     * @param string $nonTaxableAmount
     *
     * @return self
     */
    public function setNonTaxableAmount($nonTaxableAmount = null)
    {
        $this->nonTaxableAmount = $nonTaxableAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfAvailable()
    {
        return $this->pdfAvailable;
    }

    /**
     * @param string $pdfAvailable
     *
     * @return self
     */
    public function setPdfAvailable($pdfAvailable = null)
    {
        $this->pdfAvailable = $pdfAvailable;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * @param string $taxableAmount
     *
     * @return self
     */
    public function setTaxableAmount($taxableAmount = null)
    {
        $this->taxableAmount = $taxableAmount;

        return $this;
    }
}
