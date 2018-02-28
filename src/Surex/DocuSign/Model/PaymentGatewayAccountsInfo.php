<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getPaymentGatewayAccounts(): ?array
    {
        return $this->paymentGatewayAccounts;
    }

    /**
     * @param PaymentGatewayAccounts[] $paymentGatewayAccounts
     *
     * @return self
     */
    public function setPaymentGatewayAccounts(?array $paymentGatewayAccounts): self
    {
        $this->paymentGatewayAccounts = $paymentGatewayAccounts;

        return $this;
    }
}
