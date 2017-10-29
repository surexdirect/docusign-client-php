<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FolderItemResponse
{
    /**
     * @var string
     */
    protected $endPosition;
    /**
     * @var FolderItemV2[]
     */
    protected $folderItems;
    /**
     * @var string
     */
    protected $nextUri;
    /**
     * @var string
     */
    protected $previousUri;
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
    protected $totalRows;

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
     * @return FolderItemV2[]
     */
    public function getFolderItems()
    {
        return $this->folderItems;
    }

    /**
     * @param FolderItemV2[] $folderItems
     *
     * @return self
     */
    public function setFolderItems(array $folderItems = null)
    {
        $this->folderItems = $folderItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getNextUri()
    {
        return $this->nextUri;
    }

    /**
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri($nextUri = null)
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->previousUri;
    }

    /**
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri($previousUri = null)
    {
        $this->previousUri = $previousUri;

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
    public function getTotalRows()
    {
        return $this->totalRows;
    }

    /**
     * @param string $totalRows
     *
     * @return self
     */
    public function setTotalRows($totalRows = null)
    {
        $this->totalRows = $totalRows;

        return $this;
    }
}
