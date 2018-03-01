<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class UserInfo
{
    /**
     * @var string
     */
    protected $activationAccessCode;
    /**
     * @var string
     */
    protected $email;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $loginStatus;
    /**
     * @var string
     */
    protected $sendActivationEmail;
    /**
     * @var string
     */
    protected $uri;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $userStatus;
    /**
     * @var string
     */
    protected $userType;

    /**
     * @return string
     */
    public function getActivationAccessCode(): ?string
    {
        return $this->activationAccessCode;
    }

    /**
     * @param string $activationAccessCode
     *
     * @return self
     */
    public function setActivationAccessCode(?string $activationAccessCode): self
    {
        $this->activationAccessCode = $activationAccessCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
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
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getLoginStatus(): ?string
    {
        return $this->loginStatus;
    }

    /**
     * @param string $loginStatus
     *
     * @return self
     */
    public function setLoginStatus(?string $loginStatus): self
    {
        $this->loginStatus = $loginStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendActivationEmail(): ?string
    {
        return $this->sendActivationEmail;
    }

    /**
     * @param string $sendActivationEmail
     *
     * @return self
     */
    public function setSendActivationEmail(?string $sendActivationEmail): self
    {
        $this->sendActivationEmail = $sendActivationEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

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

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserStatus(): ?string
    {
        return $this->userStatus;
    }

    /**
     * @param string $userStatus
     *
     * @return self
     */
    public function setUserStatus(?string $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param string $userType
     *
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }
}
