<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingInvoicesSummary
{
    /**
     * Reserved: TBD.
     *
     * @var Invoices[]
     */
    protected $billingInvoices;
    /**
     * @var string
     */
    protected $pastDueBalance;
    /**
     * @var string
     */
    protected $paymentAllowed;

    /**
     * Reserved: TBD.
     *
     * @return Invoices[]
     */
    public function getBillingInvoices(): ?array
    {
        return $this->billingInvoices;
    }

    /**
     * Reserved: TBD.
     *
     * @param Invoices[] $billingInvoices
     *
     * @return self
     */
    public function setBillingInvoices(?array $billingInvoices): self
    {
        $this->billingInvoices = $billingInvoices;

        return $this;
    }

    /**
     * @return string
     */
    public function getPastDueBalance(): ?string
    {
        return $this->pastDueBalance;
    }

    /**
     * @param string $pastDueBalance
     *
     * @return self
     */
    public function setPastDueBalance(?string $pastDueBalance): self
    {
        $this->pastDueBalance = $pastDueBalance;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAllowed(): ?string
    {
        return $this->paymentAllowed;
    }

    /**
     * @param string $paymentAllowed
     *
     * @return self
     */
    public function setPaymentAllowed(?string $paymentAllowed): self
    {
        $this->paymentAllowed = $paymentAllowed;

        return $this;
    }
}
