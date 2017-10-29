<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getActivationAccessCode()
    {
        return $this->activationAccessCode;
    }

    /**
     * @param string $activationAccessCode
     *
     * @return self
     */
    public function setActivationAccessCode($activationAccessCode = null)
    {
        $this->activationAccessCode = $activationAccessCode;

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
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getLoginStatus()
    {
        return $this->loginStatus;
    }

    /**
     * @param string $loginStatus
     *
     * @return self
     */
    public function setLoginStatus($loginStatus = null)
    {
        $this->loginStatus = $loginStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendActivationEmail()
    {
        return $this->sendActivationEmail;
    }

    /**
     * @param string $sendActivationEmail
     *
     * @return self
     */
    public function setSendActivationEmail($sendActivationEmail = null)
    {
        $this->sendActivationEmail = $sendActivationEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

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

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName = null)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @param string $userStatus
     *
     * @return self
     */
    public function setUserStatus($userStatus = null)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param string $userType
     *
     * @return self
     */
    public function setUserType($userType = null)
    {
        $this->userType = $userType;

        return $this;
    }
}
