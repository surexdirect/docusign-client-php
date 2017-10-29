<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Payments
{
    /**
     * @var string
     */
    protected $amount;
    /**
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
     * @var string
     */
    protected $paymentNumber;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     *
     * @return self
     */
    public function setPaymentDate($paymentDate = null)
    {
        $this->paymentDate = $paymentDate;

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

    /**
     * @return string
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }

    /**
     * @param string $paymentNumber
     *
     * @return self
     */
    public function setPaymentNumber($paymentNumber = null)
    {
        $this->paymentNumber = $paymentNumber;

        return $this;
    }
}
