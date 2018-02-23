<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ApiRequestLogsResult
{
    /**
     * Reserved: TBD.
     *
     * @var ApiRequestLog[]
     */
    protected $apiRequestLogs;

    /**
     * Reserved: TBD.
     *
     * @return ApiRequestLog[]
     */
    public function getApiRequestLogs(): ?array
    {
        return $this->apiRequestLogs;
    }

    /**
     * Reserved: TBD.
     *
     * @param ApiRequestLog[] $apiRequestLogs
     *
     * @return self
     */
    public function setApiRequestLogs(?array $apiRequestLogs): self
    {
        $this->apiRequestLogs = $apiRequestLogs;

        return $this;
    }
}
