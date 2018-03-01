<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Accounts
{
    /**
     * The GUID associated with the account ID.
     *
     * @var string
     */
    protected $accountIdGuid;
    /**
     * The name of the current account.
     *
     * @var string
     */
    protected $accountName;
    /**
     * When set to **true**, the transaction rooms feature exposed through the Workspaces API is enabled.
     *
     * @var string
     */
    protected $allowTransactionRooms;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingPeriodDaysRemaining;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingPeriodEndDate;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingPeriodEnvelopesAllowed;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingPeriodEnvelopesSent;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingPeriodStartDate;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $billingProfile;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $canCancelRenewal;
    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
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
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Identifies the plan that was used create this account.
     *
     * @var string
     */
    protected $currentPlanId;
    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
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
     *  A complex element that contains up to four Question/Answer pairs for forgotten password information for a user.
     *
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
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @var string
     */
    protected $planClassification;
    /**
     * The date that the current plan will end.
     *
     * @var string
     */
    protected $planEndDate;
    /**
     * The name of the Billing Plan.
     *
     * @var string
     */
    protected $planName;
    /**
     * The date that the Account started using the current plan.
     *
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
     * The GUID associated with the account ID.
     *
     * @return string
     */
    public function getAccountIdGuid(): ?string
    {
        return $this->accountIdGuid;
    }

    /**
     * The GUID associated with the account ID.
     *
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid(?string $accountIdGuid): self
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

    /**
     * The name of the current account.
     *
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * The name of the current account.
     *
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * When set to **true**, the transaction rooms feature exposed through the Workspaces API is enabled.
     *
     * @return string
     */
    public function getAllowTransactionRooms(): ?string
    {
        return $this->allowTransactionRooms;
    }

    /**
     * When set to **true**, the transaction rooms feature exposed through the Workspaces API is enabled.
     *
     * @param string $allowTransactionRooms
     *
     * @return self
     */
    public function setAllowTransactionRooms(?string $allowTransactionRooms): self
    {
        $this->allowTransactionRooms = $allowTransactionRooms;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingPeriodDaysRemaining(): ?string
    {
        return $this->billingPeriodDaysRemaining;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingPeriodDaysRemaining
     *
     * @return self
     */
    public function setBillingPeriodDaysRemaining(?string $billingPeriodDaysRemaining): self
    {
        $this->billingPeriodDaysRemaining = $billingPeriodDaysRemaining;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingPeriodEndDate(): ?string
    {
        return $this->billingPeriodEndDate;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingPeriodEndDate
     *
     * @return self
     */
    public function setBillingPeriodEndDate(?string $billingPeriodEndDate): self
    {
        $this->billingPeriodEndDate = $billingPeriodEndDate;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingPeriodEnvelopesAllowed(): ?string
    {
        return $this->billingPeriodEnvelopesAllowed;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingPeriodEnvelopesAllowed
     *
     * @return self
     */
    public function setBillingPeriodEnvelopesAllowed(?string $billingPeriodEnvelopesAllowed): self
    {
        $this->billingPeriodEnvelopesAllowed = $billingPeriodEnvelopesAllowed;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingPeriodEnvelopesSent(): ?string
    {
        return $this->billingPeriodEnvelopesSent;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingPeriodEnvelopesSent
     *
     * @return self
     */
    public function setBillingPeriodEnvelopesSent(?string $billingPeriodEnvelopesSent): self
    {
        $this->billingPeriodEnvelopesSent = $billingPeriodEnvelopesSent;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingPeriodStartDate(): ?string
    {
        return $this->billingPeriodStartDate;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingPeriodStartDate
     *
     * @return self
     */
    public function setBillingPeriodStartDate(?string $billingPeriodStartDate): self
    {
        $this->billingPeriodStartDate = $billingPeriodStartDate;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBillingProfile(): ?string
    {
        return $this->billingProfile;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $billingProfile
     *
     * @return self
     */
    public function setBillingProfile(?string $billingProfile): self
    {
        $this->billingProfile = $billingProfile;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getCanCancelRenewal(): ?string
    {
        return $this->canCancelRenewal;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $canCancelRenewal
     *
     * @return self
     */
    public function setCanCancelRenewal(?string $canCancelRenewal): self
    {
        $this->canCancelRenewal = $canCancelRenewal;

        return $this;
    }

    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @return string
     */
    public function getCanUpgrade(): ?string
    {
        return $this->canUpgrade;
    }

    /**
     * When set to **true**, specifies that you can upgrade the account through the API.
     *
     * @param string $canUpgrade
     *
     * @return self
     */
    public function setCanUpgrade(?string $canUpgrade): self
    {
        $this->canUpgrade = $canUpgrade;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectPermission(): ?string
    {
        return $this->connectPermission;
    }

    /**
     * @param string $connectPermission
     *
     * @return self
     */
    public function setConnectPermission(?string $connectPermission): self
    {
        $this->connectPermission = $connectPermission;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?string $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Identifies the plan that was used create this account.
     *
     * @return string
     */
    public function getCurrentPlanId(): ?string
    {
        return $this->currentPlanId;
    }

    /**
     * Identifies the plan that was used create this account.
     *
     * @param string $currentPlanId
     *
     * @return self
     */
    public function setCurrentPlanId(?string $currentPlanId): self
    {
        $this->currentPlanId = $currentPlanId;

        return $this;
    }

    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
     * @return string
     */
    public function getDistributorCode(): ?string
    {
        return $this->distributorCode;
    }

    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
     * @param string $distributorCode
     *
     * @return self
     */
    public function setDistributorCode(?string $distributorCode): self
    {
        $this->distributorCode = $distributorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocuSignLandingUrl(): ?string
    {
        return $this->docuSignLandingUrl;
    }

    /**
     * @param string $docuSignLandingUrl
     *
     * @return self
     */
    public function setDocuSignLandingUrl(?string $docuSignLandingUrl): self
    {
        $this->docuSignLandingUrl = $docuSignLandingUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeSendingBlocked(): ?string
    {
        return $this->envelopeSendingBlocked;
    }

    /**
     * @param string $envelopeSendingBlocked
     *
     * @return self
     */
    public function setEnvelopeSendingBlocked(?string $envelopeSendingBlocked): self
    {
        $this->envelopeSendingBlocked = $envelopeSendingBlocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeUnitPrice(): ?string
    {
        return $this->envelopeUnitPrice;
    }

    /**
     * @param string $envelopeUnitPrice
     *
     * @return self
     */
    public function setEnvelopeUnitPrice(?string $envelopeUnitPrice): self
    {
        $this->envelopeUnitPrice = $envelopeUnitPrice;

        return $this;
    }

    /**
     *  A complex element that contains up to four Question/Answer pairs for forgotten password information for a user.
     *
     * @return string
     */
    public function getForgottenPasswordQuestionsCount(): ?string
    {
        return $this->forgottenPasswordQuestionsCount;
    }

    /**
     *  A complex element that contains up to four Question/Answer pairs for forgotten password information for a user.
     *
     * @param string $forgottenPasswordQuestionsCount
     *
     * @return self
     */
    public function setForgottenPasswordQuestionsCount(?string $forgottenPasswordQuestionsCount): self
    {
        $this->forgottenPasswordQuestionsCount = $forgottenPasswordQuestionsCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsDowngrade(): ?string
    {
        return $this->isDowngrade;
    }

    /**
     * @param string $isDowngrade
     *
     * @return self
     */
    public function setIsDowngrade(?string $isDowngrade): self
    {
        $this->isDowngrade = $isDowngrade;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @return string
     */
    public function getPlanClassification(): ?string
    {
        return $this->planClassification;
    }

    /**
     * Identifies the type of plan. Examples include Business, Corporate, Enterprise, Free.
     *
     * @param string $planClassification
     *
     * @return self
     */
    public function setPlanClassification(?string $planClassification): self
    {
        $this->planClassification = $planClassification;

        return $this;
    }

    /**
     * The date that the current plan will end.
     *
     * @return string
     */
    public function getPlanEndDate(): ?string
    {
        return $this->planEndDate;
    }

    /**
     * The date that the current plan will end.
     *
     * @param string $planEndDate
     *
     * @return self
     */
    public function setPlanEndDate(?string $planEndDate): self
    {
        $this->planEndDate = $planEndDate;

        return $this;
    }

    /**
     * The name of the Billing Plan.
     *
     * @return string
     */
    public function getPlanName(): ?string
    {
        return $this->planName;
    }

    /**
     * The name of the Billing Plan.
     *
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName(?string $planName): self
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * The date that the Account started using the current plan.
     *
     * @return string
     */
    public function getPlanStartDate(): ?string
    {
        return $this->planStartDate;
    }

    /**
     * The date that the Account started using the current plan.
     *
     * @param string $planStartDate
     *
     * @return self
     */
    public function setPlanStartDate(?string $planStartDate): self
    {
        $this->planStartDate = $planStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatsAllowed(): ?string
    {
        return $this->seatsAllowed;
    }

    /**
     * @param string $seatsAllowed
     *
     * @return self
     */
    public function setSeatsAllowed(?string $seatsAllowed): self
    {
        $this->seatsAllowed = $seatsAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatsInUse(): ?string
    {
        return $this->seatsInUse;
    }

    /**
     * @param string $seatsInUse
     *
     * @return self
     */
    public function setSeatsInUse(?string $seatsInUse): self
    {
        $this->seatsInUse = $seatsInUse;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus21CFRPart11(): ?string
    {
        return $this->status21CFRPart11;
    }

    /**
     * @param string $status21CFRPart11
     *
     * @return self
     */
    public function setStatus21CFRPart11(?string $status21CFRPart11): self
    {
        $this->status21CFRPart11 = $status21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuspensionDate(): ?string
    {
        return $this->suspensionDate;
    }

    /**
     * @param string $suspensionDate
     *
     * @return self
     */
    public function setSuspensionDate(?string $suspensionDate): self
    {
        $this->suspensionDate = $suspensionDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuspensionStatus(): ?string
    {
        return $this->suspensionStatus;
    }

    /**
     * @param string $suspensionStatus
     *
     * @return self
     */
    public function setSuspensionStatus(?string $suspensionStatus): self
    {
        $this->suspensionStatus = $suspensionStatus;

        return $this;
    }
}
