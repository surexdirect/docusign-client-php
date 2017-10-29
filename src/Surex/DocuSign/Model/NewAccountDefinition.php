<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NewAccountDefinition
{
    /**
     * @var string
     */
    protected $accountName;
    /**
     * @var NameValue[]
     */
    protected $accountSettings;
    /**
     * @var AccountAddress
     */
    protected $addressInformation;
    /**
     * @var CreditCardInformation
     */
    protected $creditCardInformation;
    /**
     * @var string
     */
    protected $distributorCode;
    /**
     * @var string
     */
    protected $distributorPassword;
    /**
     * @var Users
     */
    protected $initialUser;
    /**
     * @var PaymentProcessorInformation
     */
    protected $paymentProcessorInformation;
    /**
     * @var PlanInformation
     */
    protected $planInformation;
    /**
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * @var UserSocialAccountLogins
     */
    protected $socialAccountInformation;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName($accountName = null)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getAccountSettings()
    {
        return $this->accountSettings;
    }

    /**
     * @param NameValue[] $accountSettings
     *
     * @return self
     */
    public function setAccountSettings(array $accountSettings = null)
    {
        $this->accountSettings = $accountSettings;

        return $this;
    }

    /**
     * @return AccountAddress
     */
    public function getAddressInformation()
    {
        return $this->addressInformation;
    }

    /**
     * @param AccountAddress $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(AccountAddress $addressInformation = null)
    {
        $this->addressInformation = $addressInformation;

        return $this;
    }

    /**
     * @return CreditCardInformation
     */
    public function getCreditCardInformation()
    {
        return $this->creditCardInformation;
    }

    /**
     * @param CreditCardInformation $creditCardInformation
     *
     * @return self
     */
    public function setCreditCardInformation(CreditCardInformation $creditCardInformation = null)
    {
        $this->creditCardInformation = $creditCardInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributorCode()
    {
        return $this->distributorCode;
    }

    /**
     * @param string $distributorCode
     *
     * @return self
     */
    public function setDistributorCode($distributorCode = null)
    {
        $this->distributorCode = $distributorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributorPassword()
    {
        return $this->distributorPassword;
    }

    /**
     * @param string $distributorPassword
     *
     * @return self
     */
    public function setDistributorPassword($distributorPassword = null)
    {
        $this->distributorPassword = $distributorPassword;

        return $this;
    }

    /**
     * @return Users
     */
    public function getInitialUser()
    {
        return $this->initialUser;
    }

    /**
     * @param Users $initialUser
     *
     * @return self
     */
    public function setInitialUser(Users $initialUser = null)
    {
        $this->initialUser = $initialUser;

        return $this;
    }

    /**
     * @return PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation()
    {
        return $this->paymentProcessorInformation;
    }

    /**
     * @param PaymentProcessorInformation $paymentProcessorInformation
     *
     * @return self
     */
    public function setPaymentProcessorInformation(PaymentProcessorInformation $paymentProcessorInformation = null)
    {
        $this->paymentProcessorInformation = $paymentProcessorInformation;

        return $this;
    }

    /**
     * @return PlanInformation
     */
    public function getPlanInformation()
    {
        return $this->planInformation;
    }

    /**
     * @param PlanInformation $planInformation
     *
     * @return self
     */
    public function setPlanInformation(PlanInformation $planInformation = null)
    {
        $this->planInformation = $planInformation;

        return $this;
    }

    /**
     * @return ReferralInformation
     */
    public function getReferralInformation()
    {
        return $this->referralInformation;
    }

    /**
     * @param ReferralInformation $referralInformation
     *
     * @return self
     */
    public function setReferralInformation(ReferralInformation $referralInformation = null)
    {
        $this->referralInformation = $referralInformation;

        return $this;
    }

    /**
     * @return UserSocialAccountLogins
     */
    public function getSocialAccountInformation()
    {
        return $this->socialAccountInformation;
    }

    /**
     * @param UserSocialAccountLogins $socialAccountInformation
     *
     * @return self
     */
    public function setSocialAccountInformation(UserSocialAccountLogins $socialAccountInformation = null)
    {
        $this->socialAccountInformation = $socialAccountInformation;

        return $this;
    }
}
