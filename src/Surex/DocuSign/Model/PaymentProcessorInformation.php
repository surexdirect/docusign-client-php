<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentProcessorInformation
{
    /**
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
     * @return AddressInformation
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressInformation $address
     *
     * @return self
     */
    public function setAddress(AddressInformation $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAgreementId()
    {
        return $this->billingAgreementId;
    }

    /**
     * @param string $billingAgreementId
     *
     * @return self
     */
    public function setBillingAgreementId($billingAgreementId = null)
    {
        $this->billingAgreementId = $billingAgreementId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }
}
