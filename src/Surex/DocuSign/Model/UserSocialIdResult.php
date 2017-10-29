<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSocialIdResult
{
    /**
     * @var UserSocialAccountLogins[]
     */
    protected $socialAccountInformation;
    /**
     * @var string
     */
    protected $userId;

    /**
     * @return UserSocialAccountLogins[]
     */
    public function getSocialAccountInformation()
    {
        return $this->socialAccountInformation;
    }

    /**
     * @param UserSocialAccountLogins[] $socialAccountInformation
     *
     * @return self
     */
    public function setSocialAccountInformation(array $socialAccountInformation = null)
    {
        $this->socialAccountInformation = $socialAccountInformation;

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
