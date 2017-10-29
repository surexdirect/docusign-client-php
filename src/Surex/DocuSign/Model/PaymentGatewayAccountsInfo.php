<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentGatewayAccountsInfo
{
    /**
     * @var PaymentGatewayAccounts[]
     */
    protected $paymentGatewayAccounts;

    /**
     * @return PaymentGatewayAccounts[]
     */
    public function getPaymentGatewayAccounts()
    {
        return $this->paymentGatewayAccounts;
    }

    /**
     * @param PaymentGatewayAccounts[] $paymentGatewayAccounts
     *
     * @return self
     */
    public function setPaymentGatewayAccounts(array $paymentGatewayAccounts = null)
    {
        $this->paymentGatewayAccounts = $paymentGatewayAccounts;

        return $this;
    }
}
