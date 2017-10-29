<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectEvents
{
    /**
     * @var ConnectLog[]
     */
    protected $failures;
    /**
     * @var ConnectLog[]
     */
    protected $logs;
    /**
     * @var string
     */
    protected $totalRecords;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return ConnectLog[]
     */
    public function getFailures()
    {
        return $this->failures;
    }

    /**
     * @param ConnectLog[] $failures
     *
     * @return self
     */
    public function setFailures(array $failures = null)
    {
        $this->failures = $failures;

        return $this;
    }

    /**
     * @return ConnectLog[]
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * @param ConnectLog[] $logs
     *
     * @return self
     */
    public function setLogs(array $logs = null)
    {
        $this->logs = $logs;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }

    /**
     * @param string $totalRecords
     *
     * @return self
     */
    public function setTotalRecords($totalRecords = null)
    {
        $this->totalRecords = $totalRecords;

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
}
