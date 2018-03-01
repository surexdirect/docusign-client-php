<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class WorkspaceUser
{
    /**
     * The account ID associated with the envelope.
     *
     * @var string
     */
    protected $accountId;
    /**
     * The name of the account that the workspace user belongs to.
     *
     * @var string
     */
    protected $accountName;
    /**
     * @var string
     */
    protected $activeSince;
    /**
     * The UTC DateTime when the workspace user was created.
     *
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
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @var string
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $lastModifiedById;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userName;
    /**
     * Specifies the workspace ID GUID.
     *
     * @var string
     */
    protected $workspaceId;
    /**
     * The relative URI that may be used to access a workspace user.
     *
     * @var string
     */
    protected $workspaceUserBaseUrl;
    /**
     * @var string
     */
    protected $workspaceUserId;

    /**
     * The account ID associated with the envelope.
     *
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * The account ID associated with the envelope.
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The name of the account that the workspace user belongs to.
     *
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * The name of the account that the workspace user belongs to.
     *
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return string
     */
    public function getActiveSince(): ?string
    {
        return $this->activeSince;
    }

    /**
     * @param string $activeSince
     *
     * @return self
     */
    public function setActiveSince(?string $activeSince): self
    {
        $this->activeSince = $activeSince;

        return $this;
    }

    /**
     * The UTC DateTime when the workspace user was created.
     *
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The UTC DateTime when the workspace user was created.
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
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @return string
     */
    public function getLastModified(): ?string
    {
        return $this->lastModified;
    }

    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified(?string $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedById(): ?string
    {
        return $this->lastModifiedById;
    }

    /**
     * @param string $lastModifiedById
     *
     * @return self
     */
    public function setLastModifiedById(?string $lastModifiedById): self
    {
        $this->lastModifiedById = $lastModifiedById;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Specifies the workspace ID GUID.
     *
     * @return string
     */
    public function getWorkspaceId(): ?string
    {
        return $this->workspaceId;
    }

    /**
     * Specifies the workspace ID GUID.
     *
     * @param string $workspaceId
     *
     * @return self
     */
    public function setWorkspaceId(?string $workspaceId): self
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * The relative URI that may be used to access a workspace user.
     *
     * @return string
     */
    public function getWorkspaceUserBaseUrl(): ?string
    {
        return $this->workspaceUserBaseUrl;
    }

    /**
     * The relative URI that may be used to access a workspace user.
     *
     * @param string $workspaceUserBaseUrl
     *
     * @return self
     */
    public function setWorkspaceUserBaseUrl(?string $workspaceUserBaseUrl): self
    {
        $this->workspaceUserBaseUrl = $workspaceUserBaseUrl;

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
}
