<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSettingsInformation
{
    /**
     * @var UserAccountManagementGranularInformation
     */
    protected $accountManagementGranular;
    /**
     * @var SenderEmailNotifications
     */
    protected $senderEmailNotifications;
    /**
     * An array of email notifications that specifies the email the user receives when they are a sender. When the specific email notification is set to true, the user receives those types of email notifications from DocuSign. The user inherits the default account sender email notification settings when the user is created.
     *
     * @var SignerEmailNotifications
     */
    protected $signerEmailNotifications;
    /**
     * @var NameValue[]
     */
    protected $userSettings;

    /**
     * @return UserAccountManagementGranularInformation
     */
    public function getAccountManagementGranular(): ?UserAccountManagementGranularInformation
    {
        return $this->accountManagementGranular;
    }

    /**
     * @param UserAccountManagementGranularInformation $accountManagementGranular
     *
     * @return self
     */
    public function setAccountManagementGranular(?UserAccountManagementGranularInformation $accountManagementGranular): self
    {
        $this->accountManagementGranular = $accountManagementGranular;

        return $this;
    }

    /**
     * @return SenderEmailNotifications
     */
    public function getSenderEmailNotifications(): ?SenderEmailNotifications
    {
        return $this->senderEmailNotifications;
    }

    /**
     * @param SenderEmailNotifications $senderEmailNotifications
     *
     * @return self
     */
    public function setSenderEmailNotifications(?SenderEmailNotifications $senderEmailNotifications): self
    {
        $this->senderEmailNotifications = $senderEmailNotifications;

        return $this;
    }

    /**
     * An array of email notifications that specifies the email the user receives when they are a sender. When the specific email notification is set to true, the user receives those types of email notifications from DocuSign. The user inherits the default account sender email notification settings when the user is created.
     *
     * @return SignerEmailNotifications
     */
    public function getSignerEmailNotifications(): ?SignerEmailNotifications
    {
        return $this->signerEmailNotifications;
    }

    /**
     * An array of email notifications that specifies the email the user receives when they are a sender. When the specific email notification is set to true, the user receives those types of email notifications from DocuSign. The user inherits the default account sender email notification settings when the user is created.
     *
     * @param SignerEmailNotifications $signerEmailNotifications
     *
     * @return self
     */
    public function setSignerEmailNotifications(?SignerEmailNotifications $signerEmailNotifications): self
    {
        $this->signerEmailNotifications = $signerEmailNotifications;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getUserSettings(): ?array
    {
        return $this->userSettings;
    }

    /**
     * @param NameValue[] $userSettings
     *
     * @return self
     */
    public function setUserSettings(?array $userSettings): self
    {
        $this->userSettings = $userSettings;

        return $this;
    }
}
