<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceItems
{
    /**
     * Provides properties that describe user authorization to a workspace.
     *
     * @var WorkspaceUserAuthorization
     */
    protected $callerAuthorization;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * The UTC DateTime when the workspace item was created.
     *
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdById;
    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @var WorkspaceUser
     */
    protected $createdByInformation;
    /**
     * @var string
     */
    protected $extension;
    /**
     * @var string
     */
    protected $fileSize;
    /**
     * @var string
     */
    protected $fileUri;
    /**
     * @var string
     */
    protected $id;
    /**
     *  If true, this supersedes need for bit mask permission with workspaceUserAuthorization.
     *
     * @var string
     */
    protected $isPublic;
    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @var string
     */
    protected $lastModified;
    /**
     * Utc date and time the comment was last updated (can only be done by creator).
     *
     * @var string
     */
    protected $lastModifiedById;
    /**
     * A workspaceUser representing the user. This property is only returned in response to user specific GET call.
     *
     * @var WorkspaceUser
     */
    protected $lastModifiedByInformation;
    /**
     * A simple string description of the item, such as a file name or a folder name.
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $pageCount;
    /**
     * The ID of the parent folder. This is the GUID of the parent folder, or the special value 'root' for the root folder.
     *
     * @var string
     */
    protected $parentFolderId;
    /**
     * @var string
     */
    protected $parentFolderUri;
    /**
     * The type of the workspace item. Valid values are file, folder.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uri;

    /**
     * Provides properties that describe user authorization to a workspace.
     *
     * @return WorkspaceUserAuthorization
     */
    public function getCallerAuthorization(): ?WorkspaceUserAuthorization
    {
        return $this->callerAuthorization;
    }

    /**
     * Provides properties that describe user authorization to a workspace.
     *
     * @param WorkspaceUserAuthorization $callerAuthorization
     *
     * @return self
     */
    public function setCallerAuthorization(?WorkspaceUserAuthorization $callerAuthorization): self
    {
        $this->callerAuthorization = $callerAuthorization;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * The UTC DateTime when the workspace item was created.
     *
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The UTC DateTime when the workspace item was created.
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
     * @return string
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileSize(): ?string
    {
        return $this->fileSize;
    }

    /**
     * @param string $fileSize
     *
     * @return self
     */
    public function setFileSize(?string $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileUri(): ?string
    {
        return $this->fileUri;
    }

    /**
     * @param string $fileUri
     *
     * @return self
     */
    public function setFileUri(?string $fileUri): self
    {
        $this->fileUri = $fileUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     *  If true, this supersedes need for bit mask permission with workspaceUserAuthorization.
     *
     * @return string
     */
    public function getIsPublic(): ?string
    {
        return $this->isPublic;
    }

    /**
     *  If true, this supersedes need for bit mask permission with workspaceUserAuthorization.
     *
     * @param string $isPublic
     *
     * @return self
     */
    public function setIsPublic(?string $isPublic): self
    {
        $this->isPublic = $isPublic;

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
     * Utc date and time the comment was last updated (can only be done by creator).
     *
     * @return string
     */
    public function getLastModifiedById(): ?string
    {
        return $this->lastModifiedById;
    }

    /**
     * Utc date and time the comment was last updated (can only be done by creator).
     *
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
     * A simple string description of the item, such as a file name or a folder name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * A simple string description of the item, such as a file name or a folder name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageCount(): ?string
    {
        return $this->pageCount;
    }

    /**
     * @param string $pageCount
     *
     * @return self
     */
    public function setPageCount(?string $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * The ID of the parent folder. This is the GUID of the parent folder, or the special value 'root' for the root folder.
     *
     * @return string
     */
    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    /**
     * The ID of the parent folder. This is the GUID of the parent folder, or the special value 'root' for the root folder.
     *
     * @param string $parentFolderId
     *
     * @return self
     */
    public function setParentFolderId(?string $parentFolderId): self
    {
        $this->parentFolderId = $parentFolderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentFolderUri(): ?string
    {
        return $this->parentFolderUri;
    }

    /**
     * @param string $parentFolderUri
     *
     * @return self
     */
    public function setParentFolderUri(?string $parentFolderUri): self
    {
        $this->parentFolderUri = $parentFolderUri;

        return $this;
    }

    /**
     * The type of the workspace item. Valid values are file, folder.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the workspace item. Valid values are file, folder.
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
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }
}
