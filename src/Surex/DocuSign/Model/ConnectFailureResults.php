<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectFailureResults
{
    /**
     * @var ConnectFailureResult[]
     */
    protected $retryQueue;

    /**
     * @return ConnectFailureResult[]
     */
    public function getRetryQueue()
    {
        return $this->retryQueue;
    }

    /**
     * @param ConnectFailureResult[] $retryQueue
     *
     * @return self
     */
    public function setRetryQueue(array $retryQueue = null)
    {
        $this->retryQueue = $retryQueue;

        return $this;
    }
}
