<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceFolderContents
{
    /**
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
     * @var string
     */
    protected $resultSetSize;
    /**
     * @var string
     */
    protected $startPosition;
    /**
     * @var string
     */
    protected $totalSetSize;
    /**
     * @var string
     */
    protected $workspaceId;

    /**
     * @return string
     */
    public function getEndPosition()
    {
        return $this->endPosition;
    }

    /**
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition($endPosition = null)
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * @return WorkspaceItems
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param WorkspaceItems $folder
     *
     * @return self
     */
    public function setFolder(WorkspaceItems $folder = null)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * @return WorkspaceItems[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param WorkspaceItems[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return WorkspaceItems[]
     */
    public function getParentFolders()
    {
        return $this->parentFolders;
    }

    /**
     * @param WorkspaceItems[] $parentFolders
     *
     * @return self
     */
    public function setParentFolders(array $parentFolders = null)
    {
        $this->parentFolders = $parentFolders;

        return $this;
    }

    /**
     * @return string
     */
    public function getResultSetSize()
    {
        return $this->resultSetSize;
    }

    /**
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize($resultSetSize = null)
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartPosition()
    {
        return $this->startPosition;
    }

    /**
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition($startPosition = null)
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalSetSize()
    {
        return $this->totalSetSize;
    }

    /**
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize($totalSetSize = null)
    {
        $this->totalSetSize = $totalSetSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->workspaceId;
    }

    /**
     * @param string $workspaceId
     *
     * @return self
     */
    public function setWorkspaceId($workspaceId = null)
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }
}
