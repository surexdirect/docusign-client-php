<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Invoices
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $amount;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $balance;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $dueDate;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * Reserved: TBD.
     *
     * @var BillingInvoiceItem[]
     */
    protected $invoiceItems;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * Contains a URI for an endpoint that you can use to retrieve invoice information.
     *
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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBalance(): ?string
    {
        return $this->balance;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $balance
     *
     * @return self
     */
    public function setBalance(?string $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(?string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return BillingInvoiceItem[]
     */
    public function getInvoiceItems(): ?array
    {
        return $this->invoiceItems;
    }

    /**
     * Reserved: TBD.
     *
     * @param BillingInvoiceItem[] $invoiceItems
     *
     * @return self
     */
    public function setInvoiceItems(?array $invoiceItems): self
    {
        $this->invoiceItems = $invoiceItems;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve invoice information.
     *
     * @return string
     */
    public function getInvoiceUri(): ?string
    {
        return $this->invoiceUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve invoice information.
     *
     * @param string $invoiceUri
     *
     * @return self
     */
    public function setInvoiceUri(?string $invoiceUri): self
    {
        $this->invoiceUri = $invoiceUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getNonTaxableAmount(): ?string
    {
        return $this->nonTaxableAmount;
    }

    /**
     * @param string $nonTaxableAmount
     *
     * @return self
     */
    public function setNonTaxableAmount(?string $nonTaxableAmount): self
    {
        $this->nonTaxableAmount = $nonTaxableAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfAvailable(): ?string
    {
        return $this->pdfAvailable;
    }

    /**
     * @param string $pdfAvailable
     *
     * @return self
     */
    public function setPdfAvailable(?string $pdfAvailable): self
    {
        $this->pdfAvailable = $pdfAvailable;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxableAmount(): ?string
    {
        return $this->taxableAmount;
    }

    /**
     * @param string $taxableAmount
     *
     * @return self
     */
    public function setTaxableAmount(?string $taxableAmount): self
    {
        $this->taxableAmount = $taxableAmount;

        return $this;
    }
}
