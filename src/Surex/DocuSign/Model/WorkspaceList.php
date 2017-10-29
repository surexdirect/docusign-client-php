<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceList
{
    /**
     * @var string
     */
    protected $endPosition;
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
     * @var Workspaces[]
     */
    protected $workspaces;

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
     * @return Workspaces[]
     */
    public function getWorkspaces()
    {
        return $this->workspaces;
    }

    /**
     * @param Workspaces[] $workspaces
     *
     * @return self
     */
    public function setWorkspaces(array $workspaces = null)
    {
        $this->workspaces = $workspaces;

        return $this;
    }
}
