<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanPreview
{
    /**
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Invoices.
     *
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
     * Specifies the ISO currency code for the account.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Invoices.
     *
     * @return Invoices
     */
    public function getInvoice(): ?Invoices
    {
        return $this->invoice;
    }

    /**
     * Invoices.
     *
     * @param Invoices $invoice
     *
     * @return self
     */
    public function setInvoice(?Invoices $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsProrated(): ?string
    {
        return $this->isProrated;
    }

    /**
     * @param string $isProrated
     *
     * @return self
     */
    public function setIsProrated(?string $isProrated): self
    {
        $this->isProrated = $isProrated;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalAmount(): ?string
    {
        return $this->subtotalAmount;
    }

    /**
     * @param string $subtotalAmount
     *
     * @return self
     */
    public function setSubtotalAmount(?string $subtotalAmount): self
    {
        $this->subtotalAmount = $subtotalAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * @param string $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?string $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
