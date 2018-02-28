<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getCanManageAdmins(): ?string
    {
        return $this->canManageAdmins;
    }

    /**
     * @param string $canManageAdmins
     *
     * @return self
     */
    public function setCanManageAdmins(?string $canManageAdmins): self
    {
        $this->canManageAdmins = $canManageAdmins;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageAdminsMetadata(): ?SettingsMetadata
    {
        return $this->canManageAdminsMetadata;
    }

    /**
     * @param SettingsMetadata $canManageAdminsMetadata
     *
     * @return self
     */
    public function setCanManageAdminsMetadata(?SettingsMetadata $canManageAdminsMetadata): self
    {
        $this->canManageAdminsMetadata = $canManageAdminsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageGroups(): ?string
    {
        return $this->canManageGroups;
    }

    /**
     * @param string $canManageGroups
     *
     * @return self
     */
    public function setCanManageGroups(?string $canManageGroups): self
    {
        $this->canManageGroups = $canManageGroups;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageGroupsMetadata(): ?SettingsMetadata
    {
        return $this->canManageGroupsMetadata;
    }

    /**
     * @param SettingsMetadata $canManageGroupsMetadata
     *
     * @return self
     */
    public function setCanManageGroupsMetadata(?SettingsMetadata $canManageGroupsMetadata): self
    {
        $this->canManageGroupsMetadata = $canManageGroupsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageSharing(): ?string
    {
        return $this->canManageSharing;
    }

    /**
     * @param string $canManageSharing
     *
     * @return self
     */
    public function setCanManageSharing(?string $canManageSharing): self
    {
        $this->canManageSharing = $canManageSharing;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageSharingMetadata(): ?SettingsMetadata
    {
        return $this->canManageSharingMetadata;
    }

    /**
     * @param SettingsMetadata $canManageSharingMetadata
     *
     * @return self
     */
    public function setCanManageSharingMetadata(?SettingsMetadata $canManageSharingMetadata): self
    {
        $this->canManageSharingMetadata = $canManageSharingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanManageUsers(): ?string
    {
        return $this->canManageUsers;
    }

    /**
     * @param string $canManageUsers
     *
     * @return self
     */
    public function setCanManageUsers(?string $canManageUsers): self
    {
        $this->canManageUsers = $canManageUsers;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanManageUsersMetadata(): ?SettingsMetadata
    {
        return $this->canManageUsersMetadata;
    }

    /**
     * @param SettingsMetadata $canManageUsersMetadata
     *
     * @return self
     */
    public function setCanManageUsersMetadata(?SettingsMetadata $canManageUsersMetadata): self
    {
        $this->canManageUsersMetadata = $canManageUsersMetadata;

        return $this;
    }
}
