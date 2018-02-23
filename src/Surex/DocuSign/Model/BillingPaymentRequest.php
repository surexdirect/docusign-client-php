<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPaymentRequest
{
    /**
     * The payment amount for the past due invoices. This value must match the pastDueBalance value retrieved using Get Past Due Invoices.
     *
     * @var string
     */
    protected $paymentAmount;

    /**
     * The payment amount for the past due invoices. This value must match the pastDueBalance value retrieved using Get Past Due Invoices.
     *
     * @return string
     */
    public function getPaymentAmount(): ?string
    {
        return $this->paymentAmount;
    }

    /**
     * The payment amount for the past due invoices. This value must match the pastDueBalance value retrieved using Get Past Due Invoices.
     *
     * @param string $paymentAmount
     *
     * @return self
     */
    public function setPaymentAmount(?string $paymentAmount): self
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }
}
