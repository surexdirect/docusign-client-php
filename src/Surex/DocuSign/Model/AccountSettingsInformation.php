<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountSettingsInformation
{
    /**
     * @var NameValue[]
     */
    protected $accountSettings;

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
}
