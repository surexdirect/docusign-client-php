<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPaymentRequest
{
    /**
     * @var string
     */
    protected $paymentAmount;

    /**
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param string $paymentAmount
     *
     * @return self
     */
    public function setPaymentAmount($paymentAmount = null)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }
}
