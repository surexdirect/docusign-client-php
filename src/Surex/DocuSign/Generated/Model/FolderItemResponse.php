<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class FolderItemResponse
{
    /**
     * The last position in the result set.
     *
     * @var string
     */
    protected $endPosition;
    /**
     * A list of the envelopes in the specified folder or folders.
     *
     * @var FolderItemV2[]
     */
    protected $folderItems;
    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @var string
     */
    protected $nextUri;
    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @var string
     */
    protected $previousUri;
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
     * @var string
     */
    protected $totalRows;

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
     * A list of the envelopes in the specified folder or folders.
     *
     * @return FolderItemV2[]
     */
    public function getFolderItems(): ?array
    {
        return $this->folderItems;
    }

    /**
     * A list of the envelopes in the specified folder or folders.
     *
     * @param FolderItemV2[] $folderItems
     *
     * @return self
     */
    public function setFolderItems(?array $folderItems): self
    {
        $this->folderItems = $folderItems;

        return $this;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @return string
     */
    public function getNextUri(): ?string
    {
        return $this->nextUri;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri(?string $nextUri): self
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @return string
     */
    public function getPreviousUri(): ?string
    {
        return $this->previousUri;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri(?string $previousUri): self
    {
        $this->previousUri = $previousUri;

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
     * @return string
     */
    public function getTotalRows(): ?string
    {
        return $this->totalRows;
    }

    /**
     * @param string $totalRows
     *
     * @return self
     */
    public function setTotalRows(?string $totalRows): self
    {
        $this->totalRows = $totalRows;

        return $this;
    }
}
