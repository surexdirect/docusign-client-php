<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Folder
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var Filter
     */
    protected $filter;
    /**
     * @var string
     */
    protected $folderId;
    /**
     * @var Folder[]
     */
    protected $folders;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $ownerEmail;
    /**
     * @var string
     */
    protected $ownerUserId;
    /**
     * @var string
     */
    protected $ownerUserName;
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
     * @return Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param Filter $filter
     *
     * @return self
     */
    public function setFilter(Filter $filter = null)
    {
        $this->filter = $filter;

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
     * @return Folder[]
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @param Folder[] $folders
     *
     * @return self
     */
    public function setFolders(array $folders = null)
    {
        $this->folders = $folders;

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
    public function getOwnerEmail()
    {
        return $this->ownerEmail;
    }

    /**
     * @param string $ownerEmail
     *
     * @return self
     */
    public function setOwnerEmail($ownerEmail = null)
    {
        $this->ownerEmail = $ownerEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }

    /**
     * @param string $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId($ownerUserId = null)
    {
        $this->ownerUserId = $ownerUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerUserName()
    {
        return $this->ownerUserName;
    }

    /**
     * @param string $ownerUserName
     *
     * @return self
     */
    public function setOwnerUserName($ownerUserName = null)
    {
        $this->ownerUserName = $ownerUserName;

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
