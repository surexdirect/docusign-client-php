<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceUser
{
    /**
     * @var string
     */
    protected $accountId;
    /**
     * @var string
     */
    protected $accountName;
    /**
     * @var string
     */
    protected $activeSince;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdById;
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
    protected $lastModified;
    /**
     * @var string
     */
    protected $lastModifiedById;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $type;
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
    protected $workspaceId;
    /**
     * @var string
     */
    protected $workspaceUserBaseUrl;
    /**
     * @var string
     */
    protected $workspaceUserId;

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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName($accountName = null)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return string
     */
    public function getActiveSince()
    {
        return $this->activeSince;
    }

    /**
     * @param string $activeSince
     *
     * @return self
     */
    public function setActiveSince($activeSince = null)
    {
        $this->activeSince = $activeSince;

        return $this;
    }

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
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * @param string $createdById
     *
     * @return self
     */
    public function setCreatedById($createdById = null)
    {
        $this->createdById = $createdById;

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
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified = null)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedById()
    {
        return $this->lastModifiedById;
    }

    /**
     * @param string $lastModifiedById
     *
     * @return self
     */
    public function setLastModifiedById($lastModifiedById = null)
    {
        $this->lastModifiedById = $lastModifiedById;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

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
    public function getWorkspaceId()
    {
        return $this->workspaceId;
    }

    /**
     * @param string $workspaceId
     *
     * @return self
     */
    public function setWorkspaceId($workspaceId = null)
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceUserBaseUrl()
    {
        return $this->workspaceUserBaseUrl;
    }

    /**
     * @param string $workspaceUserBaseUrl
     *
     * @return self
     */
    public function setWorkspaceUserBaseUrl($workspaceUserBaseUrl = null)
    {
        $this->workspaceUserBaseUrl = $workspaceUserBaseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceUserId()
    {
        return $this->workspaceUserId;
    }

    /**
     * @param string $workspaceUserId
     *
     * @return self
     */
    public function setWorkspaceUserId($workspaceUserId = null)
    {
        $this->workspaceUserId = $workspaceUserId;

        return $this;
    }
}
