<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Group
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The DocuSign group ID for the group.
     *
     * @var string
     */
    protected $groupId;
    /**
     * The name of the group.
     *
     * @var string
     */
    protected $groupName;
    /**
     * The group type.
     *
     * @var string
     */
    protected $groupType;
    /**
     * The ID of the permission profile associated with the group.
     *
     * @var string
     */
    protected $permissionProfileId;
    /**
     * @var UserInfo[]
     */
    protected $users;

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
     * The DocuSign group ID for the group.
     *
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * The DocuSign group ID for the group.
     *
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * The name of the group.
     *
     * @return string
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * The name of the group.
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * The group type.
     *
     * @return string
     */
    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    /**
     * The group type.
     *
     * @param string $groupType
     *
     * @return self
     */
    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * The ID of the permission profile associated with the group.
     *
     * @return string
     */
    public function getPermissionProfileId(): ?string
    {
        return $this->permissionProfileId;
    }

    /**
     * The ID of the permission profile associated with the group.
     *
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
     * @return UserInfo[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param UserInfo[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
