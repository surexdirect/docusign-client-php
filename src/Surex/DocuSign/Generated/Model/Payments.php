<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Payments
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $amount;
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $paymentDate;
    /**
     * @var string
     */
    protected $paymentId;
    /**
     * When set to **true**, a PDF version of the invoice is available.

     To get the PDF, make the call again and change "Accept:" in the header to "Accept: application/pdf".
     *
     * @var string
     */
    protected $paymentNumber;

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
     * A sender-defined description of the line item.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     *
     * @return self
     */
    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;

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

    /**
     * When set to **true**, a PDF version of the invoice is available.

     To get the PDF, make the call again and change "Accept:" in the header to "Accept: application/pdf".
     *
     * @return string
     */
    public function getPaymentNumber(): ?string
    {
        return $this->paymentNumber;
    }

    /**
     * When set to **true**, a PDF version of the invoice is available.

     To get the PDF, make the call again and change "Accept:" in the header to "Accept: application/pdf".
     *
     * @param string $paymentNumber
     *
     * @return self
     */
    public function setPaymentNumber(?string $paymentNumber): self
    {
        $this->paymentNumber = $paymentNumber;

        return $this;
    }
}
