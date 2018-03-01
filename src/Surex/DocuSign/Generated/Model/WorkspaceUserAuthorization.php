<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdById;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
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
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @var WorkspaceUser
     */
    protected $workspaceUserInformation;

    /**
     * @return string
     */
    public function getCanDelete(): ?string
    {
        return $this->canDelete;
    }

    /**
     * @param string $canDelete
     *
     * @return self
     */
    public function setCanDelete(?string $canDelete): self
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanMove(): ?string
    {
        return $this->canMove;
    }

    /**
     * @param string $canMove
     *
     * @return self
     */
    public function setCanMove(?string $canMove): self
    {
        $this->canMove = $canMove;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanTransact(): ?string
    {
        return $this->canTransact;
    }

    /**
     * @param string $canTransact
     *
     * @return self
     */
    public function setCanTransact(?string $canTransact): self
    {
        $this->canTransact = $canTransact;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanView(): ?string
    {
        return $this->canView;
    }

    /**
     * @param string $canView
     *
     * @return self
     */
    public function setCanView(?string $canView): self
    {
        $this->canView = $canView;

        return $this;
    }

    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }

    /**
     * @param string $createdById
     *
     * @return self
     */
    public function setCreatedById(?string $createdById): self
    {
        $this->createdById = $createdById;

        return $this;
    }

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
     * @return string
     */
    public function getModified(): ?string
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     *
     * @return self
     */
    public function setModified(?string $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedById(): ?string
    {
        return $this->modifiedById;
    }

    /**
     * @param string $modifiedById
     *
     * @return self
     */
    public function setModifiedById(?string $modifiedById): self
    {
        $this->modifiedById = $modifiedById;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceUserId(): ?string
    {
        return $this->workspaceUserId;
    }

    /**
     * @param string $workspaceUserId
     *
     * @return self
     */
    public function setWorkspaceUserId(?string $workspaceUserId): self
    {
        $this->workspaceUserId = $workspaceUserId;

        return $this;
    }

    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @return WorkspaceUser
     */
    public function getWorkspaceUserInformation(): ?WorkspaceUser
    {
        return $this->workspaceUserInformation;
    }

    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @param WorkspaceUser $workspaceUserInformation
     *
     * @return self
     */
    public function setWorkspaceUserInformation(?WorkspaceUser $workspaceUserInformation): self
    {
        $this->workspaceUserInformation = $workspaceUserInformation;

        return $this;
    }
}
