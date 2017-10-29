<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RequestLogs
{
    /**
     * @var string
     */
    protected $apiRequestLogging;
    /**
     * @var string
     */
    protected $apiRequestLogMaxEntries;
    /**
     * @var string
     */
    protected $apiRequestLogRemainingEntries;

    /**
     * @return string
     */
    public function getApiRequestLogging()
    {
        return $this->apiRequestLogging;
    }

    /**
     * @param string $apiRequestLogging
     *
     * @return self
     */
    public function setApiRequestLogging($apiRequestLogging = null)
    {
        $this->apiRequestLogging = $apiRequestLogging;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiRequestLogMaxEntries()
    {
        return $this->apiRequestLogMaxEntries;
    }

    /**
     * @param string $apiRequestLogMaxEntries
     *
     * @return self
     */
    public function setApiRequestLogMaxEntries($apiRequestLogMaxEntries = null)
    {
        $this->apiRequestLogMaxEntries = $apiRequestLogMaxEntries;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiRequestLogRemainingEntries()
    {
        return $this->apiRequestLogRemainingEntries;
    }

    /**
     * @param string $apiRequestLogRemainingEntries
     *
     * @return self
     */
    public function setApiRequestLogRemainingEntries($apiRequestLogRemainingEntries = null)
    {
        $this->apiRequestLogRemainingEntries = $apiRequestLogRemainingEntries;

        return $this;
    }
}
