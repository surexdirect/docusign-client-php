<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingPaymentResponse
{
    /**
     * Reserved: TBD.
     *
     * @var BillingPayment[]
     */
    protected $billingPayments;

    /**
     * Reserved: TBD.
     *
     * @return BillingPayment[]
     */
    public function getBillingPayments(): ?array
    {
        return $this->billingPayments;
    }

    /**
     * Reserved: TBD.
     *
     * @param BillingPayment[] $billingPayments
     *
     * @return self
     */
    public function setBillingPayments(?array $billingPayments): self
    {
        $this->billingPayments = $billingPayments;

        return $this;
    }
}
