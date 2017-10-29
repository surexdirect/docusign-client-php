<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SigningGroups
{
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdBy;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $groupEmail;
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
    protected $modified;
    /**
     * @var string
     */
    protected $modifiedBy;
    /**
     * @var string
     */
    protected $signingGroupId;
    /**
     * @var SigningGroupUser[]
     */
    protected $users;

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy = null)
    {
        $this->createdBy = $createdBy;

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
    public function getGroupEmail()
    {
        return $this->groupEmail;
    }

    /**
     * @param string $groupEmail
     *
     * @return self
     */
    public function setGroupEmail($groupEmail = null)
    {
        $this->groupEmail = $groupEmail;

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
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     *
     * @return self
     */
    public function setModified($modified = null)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     *
     * @return self
     */
    public function setModifiedBy($modifiedBy = null)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningGroupId()
    {
        return $this->signingGroupId;
    }

    /**
     * @param string $signingGroupId
     *
     * @return self
     */
    public function setSigningGroupId($signingGroupId = null)
    {
        $this->signingGroupId = $signingGroupId;

        return $this;
    }

    /**
     * @return SigningGroupUser[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param SigningGroupUser[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }
}
