<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserPasswordInformation
{
    /**
     * @var string
     */
    protected $currentPassword;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var ForgottenPasswordInformation
     */
    protected $forgottenPasswordInfo;
    /**
     * @var string
     */
    protected $newPassword;

    /**
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->currentPassword;
    }

    /**
     * @param string $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword($currentPassword = null)
    {
        $this->currentPassword = $currentPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo()
    {
        return $this->forgottenPasswordInfo;
    }

    /**
     * @param ForgottenPasswordInformation $forgottenPasswordInfo
     *
     * @return self
     */
    public function setForgottenPasswordInfo(ForgottenPasswordInformation $forgottenPasswordInfo = null)
    {
        $this->forgottenPasswordInfo = $forgottenPasswordInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword($newPassword = null)
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
