<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Group
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $groupId;
    /**
     * @var string
     */
    protected $groupName;
    /**
     * @var string
     */
    protected $groupType;
    /**
     * @var string
     */
    protected $permissionProfileId;
    /**
     * @var UserInfo[]
     */
    protected $users;

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
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName($groupName = null)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * @return string
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * @param string $groupType
     *
     * @return self
     */
    public function setGroupType($groupType = null)
    {
        $this->groupType = $groupType;

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
     * @return UserInfo[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param UserInfo[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }
}
