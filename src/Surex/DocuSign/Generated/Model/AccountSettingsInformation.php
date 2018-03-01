<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AccountSettingsInformation
{
    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @var NameValue[]
     */
    protected $accountSettings;

    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @return NameValue[]
     */
    public function getAccountSettings(): ?array
    {
        return $this->accountSettings;
    }

    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @param NameValue[] $accountSettings
     *
     * @return self
     */
    public function setAccountSettings(?array $accountSettings): self
    {
        $this->accountSettings = $accountSettings;

        return $this;
    }
}
