<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Authentication
{
    /**
     * @var string
     */
    protected $apiPassword;
    /**
     * @var LoginAccount[]
     */
    protected $loginAccounts;

    /**
     * @return string
     */
    public function getApiPassword()
    {
        return $this->apiPassword;
    }

    /**
     * @param string $apiPassword
     *
     * @return self
     */
    public function setApiPassword($apiPassword = null)
    {
        $this->apiPassword = $apiPassword;

        return $this;
    }

    /**
     * @return LoginAccount[]
     */
    public function getLoginAccounts()
    {
        return $this->loginAccounts;
    }

    /**
     * @param LoginAccount[] $loginAccounts
     *
     * @return self
     */
    public function setLoginAccounts(array $loginAccounts = null)
    {
        $this->loginAccounts = $loginAccounts;

        return $this;
    }
}
