<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeTemplateDefinition
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $folderId;
    /**
     * @var string
     */
    protected $folderName;
    /**
     * @var string
     */
    protected $folderUri;
    /**
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
     * @var string
     */
    protected $newPassword;
    /**
     * @var UserInfo
     */
    protected $owner;
    /**
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
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId($folderId = null)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * @param string $folderName
     *
     * @return self
     */
    public function setFolderName($folderName = null)
    {
        $this->folderName = $folderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderUri()
    {
        return $this->folderUri;
    }

    /**
     * @param string $folderUri
     *
     * @return self
     */
    public function setFolderUri($folderUri = null)
    {
        $this->folderUri = $folderUri;

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
     * @return UserInfo
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param UserInfo $lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy(UserInfo $lastModifiedBy = null)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword($newPassword = null)
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param UserInfo $owner
     *
     * @return self
     */
    public function setOwner(UserInfo $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount($pageCount = null)
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentFolderUri()
    {
        return $this->parentFolderUri;
    }

    /**
     * @param string $parentFolderUri
     *
     * @return self
     */
    public function setParentFolderUri($parentFolderUri = null)
    {
        $this->parentFolderUri = $parentFolderUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param string $shared
     *
     * @return self
     */
    public function setShared($shared = null)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId($templateId = null)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

        return $this;
    }
}
