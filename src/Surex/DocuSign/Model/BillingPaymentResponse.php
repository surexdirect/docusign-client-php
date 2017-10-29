<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPaymentResponse
{
    /**
     * @var BillingPayment[]
     */
    protected $billingPayments;

    /**
     * @return BillingPayment[]
     */
    public function getBillingPayments()
    {
        return $this->billingPayments;
    }

    /**
     * @param BillingPayment[] $billingPayments
     *
     * @return self
     */
    public function setBillingPayments(array $billingPayments = null)
    {
        $this->billingPayments = $billingPayments;

        return $this;
    }
}
