<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Workspaces
{
    /**
     * @var string
     */
    protected $billableAccountId;
    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @var string
     */
    protected $created;
    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @var WorkspaceUser
     */
    protected $createdByInformation;
    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @var string
     */
    protected $lastModified;
    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @var WorkspaceUser
     */
    protected $lastModifiedByInformation;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * The relative URL that may be used to access the workspace.
     *
     * @var string
     */
    protected $workspaceBaseUrl;
    /**
     * Text describing the purpose of the workspace.
     *
     * @var string
     */
    protected $workspaceDescription;
    /**
     * The id of the workspace, always populated.
     *
     * @var string
     */
    protected $workspaceId;
    /**
     * The name of the workspace.
     *
     * @var string
     */
    protected $workspaceName;
    /**
     * The relative URI that may be used to access the workspace.
     *
     * @var string
     */
    protected $workspaceUri;

    /**
     * @return string
     */
    public function getBillableAccountId(): ?string
    {
        return $this->billableAccountId;
    }

    /**
     * @param string $billableAccountId
     *
     * @return self
     */
    public function setBillableAccountId(?string $billableAccountId): self
    {
        $this->billableAccountId = $billableAccountId;

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
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @return WorkspaceUser
     */
    public function getCreatedByInformation(): ?WorkspaceUser
    {
        return $this->createdByInformation;
    }

    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @param WorkspaceUser $createdByInformation
     *
     * @return self
     */
    public function setCreatedByInformation(?WorkspaceUser $createdByInformation): self
    {
        $this->createdByInformation = $createdByInformation;

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
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @return WorkspaceUser
     */
    public function getLastModifiedByInformation(): ?WorkspaceUser
    {
        return $this->lastModifiedByInformation;
    }

    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @param WorkspaceUser $lastModifiedByInformation
     *
     * @return self
     */
    public function setLastModifiedByInformation(?WorkspaceUser $lastModifiedByInformation): self
    {
        $this->lastModifiedByInformation = $lastModifiedByInformation;

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
     * The relative URL that may be used to access the workspace.
     *
     * @return string
     */
    public function getWorkspaceBaseUrl(): ?string
    {
        return $this->workspaceBaseUrl;
    }

    /**
     * The relative URL that may be used to access the workspace.
     *
     * @param string $workspaceBaseUrl
     *
     * @return self
     */
    public function setWorkspaceBaseUrl(?string $workspaceBaseUrl): self
    {
        $this->workspaceBaseUrl = $workspaceBaseUrl;

        return $this;
    }

    /**
     * Text describing the purpose of the workspace.
     *
     * @return string
     */
    public function getWorkspaceDescription(): ?string
    {
        return $this->workspaceDescription;
    }

    /**
     * Text describing the purpose of the workspace.
     *
     * @param string $workspaceDescription
     *
     * @return self
     */
    public function setWorkspaceDescription(?string $workspaceDescription): self
    {
        $this->workspaceDescription = $workspaceDescription;

        return $this;
    }

    /**
     * The id of the workspace, always populated.
     *
     * @return string
     */
    public function getWorkspaceId(): ?string
    {
        return $this->workspaceId;
    }

    /**
     * The id of the workspace, always populated.
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
     * The name of the workspace.
     *
     * @return string
     */
    public function getWorkspaceName(): ?string
    {
        return $this->workspaceName;
    }

    /**
     * The name of the workspace.
     *
     * @param string $workspaceName
     *
     * @return self
     */
    public function setWorkspaceName(?string $workspaceName): self
    {
        $this->workspaceName = $workspaceName;

        return $this;
    }

    /**
     * The relative URI that may be used to access the workspace.
     *
     * @return string
     */
    public function getWorkspaceUri(): ?string
    {
        return $this->workspaceUri;
    }

    /**
     * The relative URI that may be used to access the workspace.
     *
     * @param string $workspaceUri
     *
     * @return self
     */
    public function setWorkspaceUri(?string $workspaceUri): self
    {
        $this->workspaceUri = $workspaceUri;

        return $this;
    }
}
