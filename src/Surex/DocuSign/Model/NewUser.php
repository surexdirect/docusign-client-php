<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NewUser
{
    /**
     * @var string
     */
    protected $apiPassword;
    /**
     * @var string
     */
    protected $createdDateTime;
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
    protected $permissionProfileId;
    /**
     * @var string
     */
    protected $permissionProfileName;
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
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime($createdDateTime = null)
    {
        $this->createdDateTime = $createdDateTime;

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
    public function getPermissionProfileId()
    {
        return $this->permissionProfileId;
    }

    /**
     * @param string $permissionProfileId
     *
     * @return self
     */
    public function setPermissionProfileId($permissionProfileId = null)
    {
        $this->permissionProfileId = $permissionProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileName()
    {
        return $this->permissionProfileName;
    }

    /**
     * @param string $permissionProfileName
     *
     * @return self
     */
    public function setPermissionProfileName($permissionProfileName = null)
    {
        $this->permissionProfileName = $permissionProfileName;

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
}
