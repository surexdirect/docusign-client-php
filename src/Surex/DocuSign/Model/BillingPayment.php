<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPayment
{
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $invoiceId;
    /**
     * @var string
     */
    protected $paymentId;

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
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     *
     * @return self
     */
    public function setPaymentId($paymentId = null)
    {
        $this->paymentId = $paymentId;

        return $this;
    }
}
