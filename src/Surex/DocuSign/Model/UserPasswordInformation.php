<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserPasswordInformation
{
    /**
     * The user's current password to be changed.
     *
     * @var string
     */
    protected $currentPassword;
    /**
     * The user's email address for the associated account.
     *
     * @var string
     */
    protected $email;
    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @var ForgottenPasswordInformation
     */
    protected $forgottenPasswordInfo;
    /**
     * The user's new password.
     *
     * @var string
     */
    protected $newPassword;

    /**
     * The user's current password to be changed.
     *
     * @return string
     */
    public function getCurrentPassword(): ?string
    {
        return $this->currentPassword;
    }

    /**
     * The user's current password to be changed.
     *
     * @param string $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword(?string $currentPassword): self
    {
        $this->currentPassword = $currentPassword;

        return $this;
    }

    /**
     * The user's email address for the associated account.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The user's email address for the associated account.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @return ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo(): ?ForgottenPasswordInformation
    {
        return $this->forgottenPasswordInfo;
    }

    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @param ForgottenPasswordInformation $forgottenPasswordInfo
     *
     * @return self
     */
    public function setForgottenPasswordInfo(?ForgottenPasswordInformation $forgottenPasswordInfo): self
    {
        $this->forgottenPasswordInfo = $forgottenPasswordInfo;

        return $this;
    }

    /**
     * The user's new password.
     *
     * @return string
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    /**
     * The user's new password.
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
