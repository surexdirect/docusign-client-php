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
    public function getModifiedByUsername(): ?string
    {
        return $this->modifiedByUsername;
    }

    /**
     * @param string $modifiedByUsername
     *
     * @return self
     */
    public function setModifiedByUsername(?string $modifiedByUsername): self
    {
        $this->modifiedByUsername = $modifiedByUsername;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateTime(): ?string
    {
        return $this->modifiedDateTime;
    }

    /**
     * @param string $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(?string $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileId(): ?string
    {
        return $this->permissionProfileId;
    }

    /**
     * @param string $permissionProfileId
     *
     * @return self
     */
    public function setPermissionProfileId(?string $permissionProfileId): self
    {
        $this->permissionProfileId = $permissionProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileName(): ?string
    {
        return $this->permissionProfileName;
    }

    /**
     * @param string $permissionProfileName
     *
     * @return self
     */
    public function setPermissionProfileName(?string $permissionProfileName): self
    {
        $this->permissionProfileName = $permissionProfileName;

        return $this;
    }

    /**
     * @return AccountRoleSettings
     */
    public function getSettings(): ?AccountRoleSettings
    {
        return $this->settings;
    }

    /**
     * @param AccountRoleSettings $settings
     *
     * @return self
     */
    public function setSettings(?AccountRoleSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserCount(): ?string
    {
        return $this->userCount;
    }

    /**
     * @param string $userCount
     *
     * @return self
     */
    public function setUserCount(?string $userCount): self
    {
        $this->userCount = $userCount;

        return $this;
    }

    /**
     * @return Users[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param Users[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
