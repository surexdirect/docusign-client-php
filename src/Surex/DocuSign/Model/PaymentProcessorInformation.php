<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentProcessorInformation
{
    /**
     * Contains address information.
     *
     * @var AddressInformation
     */
    protected $address;
    /**
     * @var string
     */
    protected $billingAgreementId;
    /**
     * @var string
     */
    protected $email;

    /**
     * Contains address information.
     *
     * @return AddressInformation
     */
    public function getAddress(): ?AddressInformation
    {
        return $this->address;
    }

    /**
     * Contains address information.
     *
     * @param AddressInformation $address
     *
     * @return self
     */
    public function setAddress(?AddressInformation $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAgreementId(): ?string
    {
        return $this->billingAgreementId;
    }

    /**
     * @param string $billingAgreementId
     *
     * @return self
     */
    public function setBillingAgreementId(?string $billingAgreementId): self
    {
        $this->billingAgreementId = $billingAgreementId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
