<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGateway(): ?string
    {
        return $this->paymentGateway;
    }

    /**
     * @param string $paymentGateway
     *
     * @return self
     */
    public function setPaymentGateway(?string $paymentGateway): self
    {
        $this->paymentGateway = $paymentGateway;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGatewayAccountId(): ?string
    {
        return $this->paymentGatewayAccountId;
    }

    /**
     * @param string $paymentGatewayAccountId
     *
     * @return self
     */
    public function setPaymentGatewayAccountId(?string $paymentGatewayAccountId): self
    {
        $this->paymentGatewayAccountId = $paymentGatewayAccountId;

        return $this;
    }
}
