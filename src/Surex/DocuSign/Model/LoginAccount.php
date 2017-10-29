<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class LoginAccount
{
    /**
     * @var string
     */
    protected $accountId;
    /**
     * @var string
     */
    protected $accountIdGuid;
    /**
     * @var string
     */
    protected $baseUrl;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $isDefault;
    /**
     * @var NameValue[]
     */
    protected $loginAccountSettings;
    /**
     * @var NameValue[]
     */
    protected $loginUserSettings;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $siteDescription;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userName;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId($accountId = null)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountIdGuid()
    {
        return $this->accountIdGuid;
    }

    /**
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid($accountIdGuid = null)
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl($baseUrl = null)
    {
        $this->baseUrl = $baseUrl;

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
     * @return string
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault = null)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getLoginAccountSettings()
    {
        return $this->loginAccountSettings;
    }

    /**
     * @param NameValue[] $loginAccountSettings
     *
     * @return self
     */
    public function setLoginAccountSettings(array $loginAccountSettings = null)
    {
        $this->loginAccountSettings = $loginAccountSettings;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getLoginUserSettings()
    {
        return $this->loginUserSettings;
    }

    /**
     * @param NameValue[] $loginUserSettings
     *
     * @return self
     */
    public function setLoginUserSettings(array $loginUserSettings = null)
    {
        $this->loginUserSettings = $loginUserSettings;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSiteDescription()
    {
        return $this->siteDescription;
    }

    /**
     * @param string $siteDescription
     *
     * @return self
     */
    public function setSiteDescription($siteDescription = null)
    {
        $this->siteDescription = $siteDescription;

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
}
