<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RequestLogs
{
    /**
     *  When set to **true**, enables API request logging for the user.
     *
     * @var string
     */
    protected $apiRequestLogging;
    /**
     * Specifies the maximum number of API requests to log.
     *
     * @var string
     */
    protected $apiRequestLogMaxEntries;
    /**
     * Indicates the remaining number of API requests that can be logged.
     *
     * @var string
     */
    protected $apiRequestLogRemainingEntries;

    /**
     *  When set to **true**, enables API request logging for the user.
     *
     * @return string
     */
    public function getApiRequestLogging(): ?string
    {
        return $this->apiRequestLogging;
    }

    /**
     *  When set to **true**, enables API request logging for the user.
     *
     * @param string $apiRequestLogging
     *
     * @return self
     */
    public function setApiRequestLogging(?string $apiRequestLogging): self
    {
        $this->apiRequestLogging = $apiRequestLogging;

        return $this;
    }

    /**
     * Specifies the maximum number of API requests to log.
     *
     * @return string
     */
    public function getApiRequestLogMaxEntries(): ?string
    {
        return $this->apiRequestLogMaxEntries;
    }

    /**
     * Specifies the maximum number of API requests to log.
     *
     * @param string $apiRequestLogMaxEntries
     *
     * @return self
     */
    public function setApiRequestLogMaxEntries(?string $apiRequestLogMaxEntries): self
    {
        $this->apiRequestLogMaxEntries = $apiRequestLogMaxEntries;

        return $this;
    }

    /**
     * Indicates the remaining number of API requests that can be logged.
     *
     * @return string
     */
    public function getApiRequestLogRemainingEntries(): ?string
    {
        return $this->apiRequestLogRemainingEntries;
    }

    /**
     * Indicates the remaining number of API requests that can be logged.
     *
     * @param string $apiRequestLogRemainingEntries
     *
     * @return self
     */
    public function setApiRequestLogRemainingEntries(?string $apiRequestLogRemainingEntries): self
    {
        $this->apiRequestLogRemainingEntries = $apiRequestLogRemainingEntries;

        return $this;
    }
}
