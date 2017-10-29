<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentGatewayAccounts
{
    /**
     * @var string
     */
    protected $displayName;
    /**
     * @var string
     */
    protected $paymentGateway;
    /**
     * @var string
     */
    protected $paymentGatewayAccountId;

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName($displayName = null)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->paymentGateway;
    }

    /**
     * @param string $paymentGateway
     *
     * @return self
     */
    public function setPaymentGateway($paymentGateway = null)
    {
        $this->paymentGateway = $paymentGateway;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGatewayAccountId()
    {
        return $this->paymentGatewayAccountId;
    }

    /**
     * @param string $paymentGatewayAccountId
     *
     * @return self
     */
    public function setPaymentGatewayAccountId($paymentGatewayAccountId = null)
    {
        $this->paymentGatewayAccountId = $paymentGatewayAccountId;

        return $this;
    }
}
