<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserPasswordRules
{
    /**
     * @var AccountPasswordRules
     */
    protected $passwordRules;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;

    /**
     * @return AccountPasswordRules
     */
    public function getPasswordRules(): ?AccountPasswordRules
    {
        return $this->passwordRules;
    }

    /**
     * @param AccountPasswordRules $passwordRules
     *
     * @return self
     */
    public function setPasswordRules(?AccountPasswordRules $passwordRules): self
    {
        $this->passwordRules = $passwordRules;

        return $this;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
