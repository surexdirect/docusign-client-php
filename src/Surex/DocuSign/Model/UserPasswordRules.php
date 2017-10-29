<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserPasswordRules
{
    /**
     * @var AccountPasswordRules
     */
    protected $passwordRules;
    /**
     * @var string
     */
    protected $userId;

    /**
     * @return AccountPasswordRules
     */
    public function getPasswordRules()
    {
        return $this->passwordRules;
    }

    /**
     * @param AccountPasswordRules $passwordRules
     *
     * @return self
     */
    public function setPasswordRules(AccountPasswordRules $passwordRules = null)
    {
        $this->passwordRules = $passwordRules;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }
}
