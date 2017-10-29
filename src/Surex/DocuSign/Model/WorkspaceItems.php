<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceItems
{
    /**
     * @var WorkspaceUserAuthorization
     */
    protected $callerAuthorization;
    /**
     * @var string
     */
    protected $contentType;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdById;
    /**
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
     * @var string
     */
    protected $isPublic;
    /**
     * @var string
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $lastModifiedById;
    /**
     * @var WorkspaceUser
     */
    protected $lastModifiedByInformation;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $pageCount;
    /**
     * @var string
     */
    protected $parentFolderId;
    /**
     * @var string
     */
    protected $parentFolderUri;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return WorkspaceUserAuthorization
     */
    public function getCallerAuthorization()
    {
        return $this->callerAuthorization;
    }

    /**
     * @param WorkspaceUserAuthorization $callerAuthorization
     *
     * @return self
     */
    public function setCallerAuthorization(WorkspaceUserAuthorization $callerAuthorization = null)
    {
        $this->callerAuthorization = $callerAuthorization;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType($contentType = null)
    {
        $this->contentType = $contentType;

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
     * @return WorkspaceUser
     */
    public function getCreatedByInformation()
    {
        return $this->createdByInformation;
    }

    /**
     * @param WorkspaceUser $createdByInformation
     *
     * @return self
     */
    public function setCreatedByInformation(WorkspaceUser $createdByInformation = null)
    {
        $this->createdByInformation = $createdByInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     *
     * @return self
     */
    public function setExtension($extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param string $fileSize
     *
     * @return self
     */
    public function setFileSize($fileSize = null)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileUri()
    {
        return $this->fileUri;
    }

    /**
     * @param string $fileUri
     *
     * @return self
     */
    public function setFileUri($fileUri = null)
    {
        $this->fileUri = $fileUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * @param string $isPublic
     *
     * @return self
     */
    public function setIsPublic($isPublic = null)
    {
        $this->isPublic = $isPublic;

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
     * @return WorkspaceUser
     */
    public function getLastModifiedByInformation()
    {
        return $this->lastModifiedByInformation;
    }

    /**
     * @param WorkspaceUser $lastModifiedByInformation
     *
     * @return self
     */
    public function setLastModifiedByInformation(WorkspaceUser $lastModifiedByInformation = null)
    {
        $this->lastModifiedByInformation = $lastModifiedByInformation;

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
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param string $pageCount
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
    public function getParentFolderId()
    {
        return $this->parentFolderId;
    }

    /**
     * @param string $parentFolderId
     *
     * @return self
     */
    public function setParentFolderId($parentFolderId = null)
    {
        $this->parentFolderId = $parentFolderId;

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
