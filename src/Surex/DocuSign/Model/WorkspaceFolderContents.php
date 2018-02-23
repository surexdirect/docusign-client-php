<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceFolderContents
{
    /**
     * The last position in the result set.
     *
     * @var string
     */
    protected $endPosition;
    /**
     * @var WorkspaceItems
     */
    protected $folder;
    /**
     * @var WorkspaceItems[]
     */
    protected $items;
    /**
     * @var WorkspaceItems[]
     */
    protected $parentFolders;
    /**
     * The number of results returned in this response.
     *
     * @var string
     */
    protected $resultSetSize;
    /**
     * Starting position of the current result set.
     *
     * @var string
     */
    protected $startPosition;
    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @var string
     */
    protected $totalSetSize;
    /**
     * The id of the workspace, always populated.
     *
     * @var string
     */
    protected $workspaceId;

    /**
     * The last position in the result set.
     *
     * @return string
     */
    public function getEndPosition(): ?string
    {
        return $this->endPosition;
    }

    /**
     * The last position in the result set.
     *
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition(?string $endPosition): self
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * @return WorkspaceItems
     */
    public function getFolder(): ?WorkspaceItems
    {
        return $this->folder;
    }

    /**
     * @param WorkspaceItems $folder
     *
     * @return self
     */
    public function setFolder(?WorkspaceItems $folder): self
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * @return WorkspaceItems[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param WorkspaceItems[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return WorkspaceItems[]
     */
    public function getParentFolders(): ?array
    {
        return $this->parentFolders;
    }

    /**
     * @param WorkspaceItems[] $parentFolders
     *
     * @return self
     */
    public function setParentFolders(?array $parentFolders): self
    {
        $this->parentFolders = $parentFolders;

        return $this;
    }

    /**
     * The number of results returned in this response.
     *
     * @return string
     */
    public function getResultSetSize(): ?string
    {
        return $this->resultSetSize;
    }

    /**
     * The number of results returned in this response.
     *
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize(?string $resultSetSize): self
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * Starting position of the current result set.
     *
     * @return string
     */
    public function getStartPosition(): ?string
    {
        return $this->startPosition;
    }

    /**
     * Starting position of the current result set.
     *
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition(?string $startPosition): self
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @return string
     */
    public function getTotalSetSize(): ?string
    {
        return $this->totalSetSize;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize(?string $totalSetSize): self
    {
        $this->totalSetSize = $totalSetSize;

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
}
