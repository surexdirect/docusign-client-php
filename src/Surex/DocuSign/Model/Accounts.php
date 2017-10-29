<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Accounts
{
    /**
     * @var string
     */
    protected $accountIdGuid;
    /**
     * @var string
     */
    protected $accountName;
    /**
     * @var string
     */
    protected $allowTransactionRooms;
    /**
     * @var string
     */
    protected $billingPeriodDaysRemaining;
    /**
     * @var string
     */
    protected $billingPeriodEndDate;
    /**
     * @var string
     */
    protected $billingPeriodEnvelopesAllowed;
    /**
     * @var string
     */
    protected $billingPeriodEnvelopesSent;
    /**
     * @var string
     */
    protected $billingPeriodStartDate;
    /**
     * @var string
     */
    protected $billingProfile;
    /**
     * @var string
     */
    protected $canCancelRenewal;
    /**
     * @var string
     */
    protected $canUpgrade;
    /**
     * @var string
     */
    protected $connectPermission;
    /**
     * @var string
     */
    protected $createdDate;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $currentPlanId;
    /**
     * @var string
     */
    protected $distributorCode;
    /**
     * @var string
     */
    protected $docuSignLandingUrl;
    /**
     * @var string
     */
    protected $envelopeSendingBlocked;
    /**
     * @var string
     */
    protected $envelopeUnitPrice;
    /**
     * @var string
     */
    protected $forgottenPasswordQuestionsCount;
    /**
     * @var string
     */
    protected $isDowngrade;
    /**
     * @var string
     */
    protected $paymentMethod;
    /**
     * @var string
     */
    protected $planClassification;
    /**
     * @var string
     */
    protected $planEndDate;
    /**
     * @var string
     */
    protected $planName;
    /**
     * @var string
     */
    protected $planStartDate;
    /**
     * @var string
     */
    protected $seatsAllowed;
    /**
     * @var string
     */
    protected $seatsInUse;
    /**
     * @var string
     */
    protected $status21CFRPart11;
    /**
     * @var string
     */
    protected $suspensionDate;
    /**
     * @var string
     */
    protected $suspensionStatus;

    /**
     * @return string
     */
    public function getAccountIdGuid()
    {
        return $this->accountIdGuid;
    }

    /**
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid($accountIdGuid = null)
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

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
     * @return string
     */
    public function getAllowTransactionRooms()
    {
        return $this->allowTransactionRooms;
    }

    /**
     * @param string $allowTransactionRooms
     *
     * @return self
     */
    public function setAllowTransactionRooms($allowTransactionRooms = null)
    {
        $this->allowTransactionRooms = $allowTransactionRooms;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodDaysRemaining()
    {
        return $this->billingPeriodDaysRemaining;
    }

    /**
     * @param string $billingPeriodDaysRemaining
     *
     * @return self
     */
    public function setBillingPeriodDaysRemaining($billingPeriodDaysRemaining = null)
    {
        $this->billingPeriodDaysRemaining = $billingPeriodDaysRemaining;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodEndDate()
    {
        return $this->billingPeriodEndDate;
    }

    /**
     * @param string $billingPeriodEndDate
     *
     * @return self
     */
    public function setBillingPeriodEndDate($billingPeriodEndDate = null)
    {
        $this->billingPeriodEndDate = $billingPeriodEndDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodEnvelopesAllowed()
    {
        return $this->billingPeriodEnvelopesAllowed;
    }

    /**
     * @param string $billingPeriodEnvelopesAllowed
     *
     * @return self
     */
    public function setBillingPeriodEnvelopesAllowed($billingPeriodEnvelopesAllowed = null)
    {
        $this->billingPeriodEnvelopesAllowed = $billingPeriodEnvelopesAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodEnvelopesSent()
    {
        return $this->billingPeriodEnvelopesSent;
    }

    /**
     * @param string $billingPeriodEnvelopesSent
     *
     * @return self
     */
    public function setBillingPeriodEnvelopesSent($billingPeriodEnvelopesSent = null)
    {
        $this->billingPeriodEnvelopesSent = $billingPeriodEnvelopesSent;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPeriodStartDate()
    {
        return $this->billingPeriodStartDate;
    }

    /**
     * @param string $billingPeriodStartDate
     *
     * @return self
     */
    public function setBillingPeriodStartDate($billingPeriodStartDate = null)
    {
        $this->billingPeriodStartDate = $billingPeriodStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingProfile()
    {
        return $this->billingProfile;
    }

    /**
     * @param string $billingProfile
     *
     * @return self
     */
    public function setBillingProfile($billingProfile = null)
    {
        $this->billingProfile = $billingProfile;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanCancelRenewal()
    {
        return $this->canCancelRenewal;
    }

    /**
     * @param string $canCancelRenewal
     *
     * @return self
     */
    public function setCanCancelRenewal($canCancelRenewal = null)
    {
        $this->canCancelRenewal = $canCancelRenewal;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanUpgrade()
    {
        return $this->canUpgrade;
    }

    /**
     * @param string $canUpgrade
     *
     * @return self
     */
    public function setCanUpgrade($canUpgrade = null)
    {
        $this->canUpgrade = $canUpgrade;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectPermission()
    {
        return $this->connectPermission;
    }

    /**
     * @param string $connectPermission
     *
     * @return self
     */
    public function setConnectPermission($connectPermission = null)
    {
        $this->connectPermission = $connectPermission;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate = null)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode = null)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentPlanId()
    {
        return $this->currentPlanId;
    }

    /**
     * @param string $currentPlanId
     *
     * @return self
     */
    public function setCurrentPlanId($currentPlanId = null)
    {
        $this->currentPlanId = $currentPlanId;

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
    public function getDocuSignLandingUrl()
    {
        return $this->docuSignLandingUrl;
    }

    /**
     * @param string $docuSignLandingUrl
     *
     * @return self
     */
    public function setDocuSignLandingUrl($docuSignLandingUrl = null)
    {
        $this->docuSignLandingUrl = $docuSignLandingUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeSendingBlocked()
    {
        return $this->envelopeSendingBlocked;
    }

    /**
     * @param string $envelopeSendingBlocked
     *
     * @return self
     */
    public function setEnvelopeSendingBlocked($envelopeSendingBlocked = null)
    {
        $this->envelopeSendingBlocked = $envelopeSendingBlocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeUnitPrice()
    {
        return $this->envelopeUnitPrice;
    }

    /**
     * @param string $envelopeUnitPrice
     *
     * @return self
     */
    public function setEnvelopeUnitPrice($envelopeUnitPrice = null)
    {
        $this->envelopeUnitPrice = $envelopeUnitPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordQuestionsCount()
    {
        return $this->forgottenPasswordQuestionsCount;
    }

    /**
     * @param string $forgottenPasswordQuestionsCount
     *
     * @return self
     */
    public function setForgottenPasswordQuestionsCount($forgottenPasswordQuestionsCount = null)
    {
        $this->forgottenPasswordQuestionsCount = $forgottenPasswordQuestionsCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsDowngrade()
    {
        return $this->isDowngrade;
    }

    /**
     * @param string $isDowngrade
     *
     * @return self
     */
    public function setIsDowngrade($isDowngrade = null)
    {
        $this->isDowngrade = $isDowngrade;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanClassification()
    {
        return $this->planClassification;
    }

    /**
     * @param string $planClassification
     *
     * @return self
     */
    public function setPlanClassification($planClassification = null)
    {
        $this->planClassification = $planClassification;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanEndDate()
    {
        return $this->planEndDate;
    }

    /**
     * @param string $planEndDate
     *
     * @return self
     */
    public function setPlanEndDate($planEndDate = null)
    {
        $this->planEndDate = $planEndDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName($planName = null)
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanStartDate()
    {
        return $this->planStartDate;
    }

    /**
     * @param string $planStartDate
     *
     * @return self
     */
    public function setPlanStartDate($planStartDate = null)
    {
        $this->planStartDate = $planStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatsAllowed()
    {
        return $this->seatsAllowed;
    }

    /**
     * @param string $seatsAllowed
     *
     * @return self
     */
    public function setSeatsAllowed($seatsAllowed = null)
    {
        $this->seatsAllowed = $seatsAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatsInUse()
    {
        return $this->seatsInUse;
    }

    /**
     * @param string $seatsInUse
     *
     * @return self
     */
    public function setSeatsInUse($seatsInUse = null)
    {
        $this->seatsInUse = $seatsInUse;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus21CFRPart11()
    {
        return $this->status21CFRPart11;
    }

    /**
     * @param string $status21CFRPart11
     *
     * @return self
     */
    public function setStatus21CFRPart11($status21CFRPart11 = null)
    {
        $this->status21CFRPart11 = $status21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuspensionDate()
    {
        return $this->suspensionDate;
    }

    /**
     * @param string $suspensionDate
     *
     * @return self
     */
    public function setSuspensionDate($suspensionDate = null)
    {
        $this->suspensionDate = $suspensionDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuspensionStatus()
    {
        return $this->suspensionStatus;
    }

    /**
     * @param string $suspensionStatus
     *
     * @return self
     */
    public function setSuspensionStatus($suspensionStatus = null)
    {
        $this->suspensionStatus = $suspensionStatus;

        return $this;
    }
}
