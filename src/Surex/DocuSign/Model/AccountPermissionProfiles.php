<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPermissionProfiles
{
    /**
     * @var string
     */
    protected $modifiedByUsername;
    /**
     * @var string
     */
    protected $modifiedDateTime;
    /**
     * @var string
     */
    protected $permissionProfileId;
    /**
     * @var string
     */
    protected $permissionProfileName;
    /**
     * @var AccountRoleSettings
     */
    protected $settings;
    /**
     * @var string
     */
    protected $userCount;
    /**
     * @var Users[]
     */
    protected $users;

    /**
     * @return string
     */
    public function getModifiedByUsername()
    {
        return $this->modifiedByUsername;
    }

    /**
     * @param string $modifiedByUsername
     *
     * @return self
     */
    public function setModifiedByUsername($modifiedByUsername = null)
    {
        $this->modifiedByUsername = $modifiedByUsername;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateTime()
    {
        return $this->modifiedDateTime;
    }

    /**
     * @param string $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime($modifiedDateTime = null)
    {
        $this->modifiedDateTime = $modifiedDateTime;

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
     * @return AccountRoleSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param AccountRoleSettings $settings
     *
     * @return self
     */
    public function setSettings(AccountRoleSettings $settings = null)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserCount()
    {
        return $this->userCount;
    }

    /**
     * @param string $userCount
     *
     * @return self
     */
    public function setUserCount($userCount = null)
    {
        $this->userCount = $userCount;

        return $this;
    }

    /**
     * @return Users[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param Users[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }
}
