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
    public function getAccountManagementGranular()
    {
        return $this->accountManagementGranular;
    }

    /**
     * @param UserAccountManagementGranularInformation $accountManagementGranular
     *
     * @return self
     */
    public function setAccountManagementGranular(UserAccountManagementGranularInformation $accountManagementGranular = null)
    {
        $this->accountManagementGranular = $accountManagementGranular;

        return $this;
    }

    /**
     * @return SenderEmailNotifications
     */
    public function getSenderEmailNotifications()
    {
        return $this->senderEmailNotifications;
    }

    /**
     * @param SenderEmailNotifications $senderEmailNotifications
     *
     * @return self
     */
    public function setSenderEmailNotifications(SenderEmailNotifications $senderEmailNotifications = null)
    {
        $this->senderEmailNotifications = $senderEmailNotifications;

        return $this;
    }

    /**
     * @return SignerEmailNotifications
     */
    public function getSignerEmailNotifications()
    {
        return $this->signerEmailNotifications;
    }

    /**
     * @param SignerEmailNotifications $signerEmailNotifications
     *
     * @return self
     */
    public function setSignerEmailNotifications(SignerEmailNotifications $signerEmailNotifications = null)
    {
        $this->signerEmailNotifications = $signerEmailNotifications;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getUserSettings()
    {
        return $this->userSettings;
    }

    /**
     * @param NameValue[] $userSettings
     *
     * @return self
     */
    public function setUserSettings(array $userSettings = null)
    {
        $this->userSettings = $userSettings;

        return $this;
    }
}
