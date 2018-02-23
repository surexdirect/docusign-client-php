<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeTemplateDefinition
{
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * The ID for the folder.
     *
     * @var string
     */
    protected $folderId;
    /**
     *  The name of the folder in which the template is located.
     *
     * @var string
     */
    protected $folderName;
    /**
     * The URI of the folder.
     *
     * @var string
     */
    protected $folderUri;
    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @var string
     */
    protected $lastModified;
    /**
     * @var UserInfo
     */
    protected $lastModifiedBy;
    /**
     * @var string
     */
    protected $name;
    /**
     * The user's new password.
     *
     * @var string
     */
    protected $newPassword;
    /**
     * @var UserInfo
     */
    protected $owner;
    /**
     * An integer value specifying the number of document pages in the template. Omit this property if not submitting a page count.
     *
     * @var int
     */
    protected $pageCount;
    /**
     * @var string
     */
    protected $parentFolderUri;
    /**
     * @var string
     */
    protected $password;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;
    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $uri;

    /**
     * A sender-defined description of the line item.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The ID for the folder.
     *
     * @return string
     */
    public function getFolderId(): ?string
    {
        return $this->folderId;
    }

    /**
     * The ID for the folder.
     *
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId(?string $folderId): self
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     *  The name of the folder in which the template is located.
     *
     * @return string
     */
    public function getFolderName(): ?string
    {
        return $this->folderName;
    }

    /**
     *  The name of the folder in which the template is located.
     *
     * @param string $folderName
     *
     * @return self
     */
    public function setFolderName(?string $folderName): self
    {
        $this->folderName = $folderName;

        return $this;
    }

    /**
     * The URI of the folder.
     *
     * @return string
     */
    public function getFolderUri(): ?string
    {
        return $this->folderUri;
    }

    /**
     * The URI of the folder.
     *
     * @param string $folderUri
     *
     * @return self
     */
    public function setFolderUri(?string $folderUri): self
    {
        $this->folderUri = $folderUri;

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
     * @return UserInfo
     */
    public function getLastModifiedBy(): ?UserInfo
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param UserInfo $lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy(?UserInfo $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
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
     * The user's new password.
     *
     * @return string
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    /**
     * The user's new password.
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getOwner(): ?UserInfo
    {
        return $this->owner;
    }

    /**
     * @param UserInfo $owner
     *
     * @return self
     */
    public function setOwner(?UserInfo $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * An integer value specifying the number of document pages in the template. Omit this property if not submitting a page count.
     *
     * @return int
     */
    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    /**
     * An integer value specifying the number of document pages in the template. Omit this property if not submitting a page count.
     *
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount(?int $pageCount): self
    {
        $this->pageCount = $pageCount;

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
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @return string
     */
    public function getShared(): ?string
    {
        return $this->shared;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(?string $shared): self
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return string
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;

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
