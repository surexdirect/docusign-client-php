<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ApiRequestLogsResult
{
    /**
     * @var ApiRequestLog[]
     */
    protected $apiRequestLogs;

    /**
     * @return ApiRequestLog[]
     */
    public function getApiRequestLogs()
    {
        return $this->apiRequestLogs;
    }

    /**
     * @param ApiRequestLog[] $apiRequestLogs
     *
     * @return self
     */
    public function setApiRequestLogs(array $apiRequestLogs = null)
    {
        $this->apiRequestLogs = $apiRequestLogs;

        return $this;
    }
}
