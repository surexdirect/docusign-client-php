<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class WorkspaceList
{
    /**
     * The last position in the result set.
     *
     * @var string
     */
    protected $endPosition;
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
     * A list of workspaces.
     *
     * @var Workspaces[]
     */
    protected $workspaces;

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
     * A list of workspaces.
     *
     * @return Workspaces[]
     */
    public function getWorkspaces(): ?array
    {
        return $this->workspaces;
    }

    /**
     * A list of workspaces.
     *
     * @param Workspaces[] $workspaces
     *
     * @return self
     */
    public function setWorkspaces(?array $workspaces): self
    {
        $this->workspaces = $workspaces;

        return $this;
    }
}
