<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserAccountManagementGranularInformation
{
    /**
     * @var string
     */
    protected $canManageAdmins;
    /**
     * @var SettingsMetadata
     */
    protected $canManageAdminsMetadata;
    /**
     * @var string
     */
    protected $canManageGroups;
    /**
     * @var SettingsMetadata
     */
    protected $canManageGroupsMetadata;
    /**
     * @var string
     */
    protected $canManageSharing;
    /**
     * @var SettingsMetadata
     */
    protected $canManageSharingMetadata;
    /**
     * @var string
     */
    protected $canManageUsers;
    /**
     * @var SettingsMetadata
     */
    protected $canManageUsersMetadata;

    /**
     * @return string
     */
    public function getCanManageAdmins()
    {
        return $this->canManageAdmins;
    }

    /**
     * @param string $canManageAdmins
     *
     * @return self
     */
    public function setCanManageAdmins($canManageAdmins = null)
    {
        $this->canManageAdmins = $canManageAdmins;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageAdminsMetadata()
    {
        return $this->canManageAdminsMetadata;
    }

    /**
     * @param SettingsMetadata $canManageAdminsMetadata
     *
     * @return self
     */
    public function setCanManageAdminsMetadata(SettingsMetadata $canManageAdminsMetadata = null)
    {
        $this->canManageAdminsMetadata = $canManageAdminsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageGroups()
    {
        return $this->canManageGroups;
    }

    /**
     * @param string $canManageGroups
     *
     * @return self
     */
    public function setCanManageGroups($canManageGroups = null)
    {
        $this->canManageGroups = $canManageGroups;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageGroupsMetadata()
    {
        return $this->canManageGroupsMetadata;
    }

    /**
     * @param SettingsMetadata $canManageGroupsMetadata
     *
     * @return self
     */
    public function setCanManageGroupsMetadata(SettingsMetadata $canManageGroupsMetadata = null)
    {
        $this->canManageGroupsMetadata = $canManageGroupsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageSharing()
    {
        return $this->canManageSharing;
    }

    /**
     * @param string $canManageSharing
     *
     * @return self
     */
    public function setCanManageSharing($canManageSharing = null)
    {
        $this->canManageSharing = $canManageSharing;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageSharingMetadata()
    {
        return $this->canManageSharingMetadata;
    }

    /**
     * @param SettingsMetadata $canManageSharingMetadata
     *
     * @return self
     */
    public function setCanManageSharingMetadata(SettingsMetadata $canManageSharingMetadata = null)
    {
        $this->canManageSharingMetadata = $canManageSharingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageUsers()
    {
        return $this->canManageUsers;
    }

    /**
     * @param string $canManageUsers
     *
     * @return self
     */
    public function setCanManageUsers($canManageUsers = null)
    {
        $this->canManageUsers = $canManageUsers;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageUsersMetadata()
    {
        return $this->canManageUsersMetadata;
    }

    /**
     * @param SettingsMetadata $canManageUsersMetadata
     *
     * @return self
     */
    public function setCanManageUsersMetadata(SettingsMetadata $canManageUsersMetadata = null)
    {
        $this->canManageUsersMetadata = $canManageUsersMetadata;

        return $this;
    }
}
