<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPayment
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
    protected $invoiceId;
    /**
     * @var string
     */
    protected $paymentId;

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
     * @return string
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     *
     * @return self
     */
    public function setPaymentId(?string $paymentId): self
    {
        $this->paymentId = $paymentId;

        return $this;
    }
}
