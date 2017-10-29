<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceUserAuthorization
{
    /**
     * @var string
     */
    protected $canDelete;
    /**
     * @var string
     */
    protected $canMove;
    /**
     * @var string
     */
    protected $canTransact;
    /**
     * @var string
     */
    protected $canView;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdById;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $modified;
    /**
     * @var string
     */
    protected $modifiedById;
    /**
     * @var string
     */
    protected $workspaceUserId;
    /**
     * @var WorkspaceUser
     */
    protected $workspaceUserInformation;

    /**
     * @return string
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    /**
     * @param string $canDelete
     *
     * @return self
     */
    public function setCanDelete($canDelete = null)
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanMove()
    {
        return $this->canMove;
    }

    /**
     * @param string $canMove
     *
     * @return self
     */
    public function setCanMove($canMove = null)
    {
        $this->canMove = $canMove;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanTransact()
    {
        return $this->canTransact;
    }

    /**
     * @param string $canTransact
     *
     * @return self
     */
    public function setCanTransact($canTransact = null)
    {
        $this->canTransact = $canTransact;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanView()
    {
        return $this->canView;
    }

    /**
     * @param string $canView
     *
     * @return self
     */
    public function setCanView($canView = null)
    {
        $this->canView = $canView;

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
    public function getModifiedById()
    {
        return $this->modifiedById;
    }

    /**
     * @param string $modifiedById
     *
     * @return self
     */
    public function setModifiedById($modifiedById = null)
    {
        $this->modifiedById = $modifiedById;

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

    /**
     * @return WorkspaceUser
     */
    public function getWorkspaceUserInformation()
    {
        return $this->workspaceUserInformation;
    }

    /**
     * @param WorkspaceUser $workspaceUserInformation
     *
     * @return self
     */
    public function setWorkspaceUserInformation(WorkspaceUser $workspaceUserInformation = null)
    {
        $this->workspaceUserInformation = $workspaceUserInformation;

        return $this;
    }
}
