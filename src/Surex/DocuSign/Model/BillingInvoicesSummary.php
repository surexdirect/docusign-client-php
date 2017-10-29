<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingInvoicesSummary
{
    /**
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
     * @return Invoices[]
     */
    public function getBillingInvoices()
    {
        return $this->billingInvoices;
    }

    /**
     * @param Invoices[] $billingInvoices
     *
     * @return self
     */
    public function setBillingInvoices(array $billingInvoices = null)
    {
        $this->billingInvoices = $billingInvoices;

        return $this;
    }

    /**
     * @return string
     */
    public function getPastDueBalance()
    {
        return $this->pastDueBalance;
    }

    /**
     * @param string $pastDueBalance
     *
     * @return self
     */
    public function setPastDueBalance($pastDueBalance = null)
    {
        $this->pastDueBalance = $pastDueBalance;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAllowed()
    {
        return $this->paymentAllowed;
    }

    /**
     * @param string $paymentAllowed
     *
     * @return self
     */
    public function setPaymentAllowed($paymentAllowed = null)
    {
        $this->paymentAllowed = $paymentAllowed;

        return $this;
    }
}
