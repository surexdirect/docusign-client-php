<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Folder
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var Filter
     */
    protected $filter;
    /**
     * The ID of the folder being accessed.
     *
     * @var string
     */
    protected $folderId;
    /**
     * A collection of folder objects returned in a response.
     *
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
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uri;

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
     * @return Filter
     */
    public function getFilter(): ?Filter
    {
        return $this->filter;
    }

    /**
     * @param Filter $filter
     *
     * @return self
     */
    public function setFilter(?Filter $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * The ID of the folder being accessed.
     *
     * @return string
     */
    public function getFolderId(): ?string
    {
        return $this->folderId;
    }

    /**
     * The ID of the folder being accessed.
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
     * A collection of folder objects returned in a response.
     *
     * @return Folder[]
     */
    public function getFolders(): ?array
    {
        return $this->folders;
    }

    /**
     * A collection of folder objects returned in a response.
     *
     * @param Folder[] $folders
     *
     * @return self
     */
    public function setFolders(?array $folders): self
    {
        $this->folders = $folders;

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
     * @return string
     */
    public function getOwnerEmail(): ?string
    {
        return $this->ownerEmail;
    }

    /**
     * @param string $ownerEmail
     *
     * @return self
     */
    public function setOwnerEmail(?string $ownerEmail): self
    {
        $this->ownerEmail = $ownerEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerUserId(): ?string
    {
        return $this->ownerUserId;
    }

    /**
     * @param string $ownerUserId
     *
     * @return self
     */
    public function setOwnerUserId(?string $ownerUserId): self
    {
        $this->ownerUserId = $ownerUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerUserName(): ?string
    {
        return $this->ownerUserName;
    }

    /**
     * @param string $ownerUserName
     *
     * @return self
     */
    public function setOwnerUserName(?string $ownerUserName): self
    {
        $this->ownerUserName = $ownerUserName;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    /**
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
