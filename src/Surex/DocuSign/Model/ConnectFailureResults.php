<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getRetryQueue(): ?array
    {
        return $this->retryQueue;
    }

    /**
     * @param ConnectFailureResult[] $retryQueue
     *
     * @return self
     */
    public function setRetryQueue(?array $retryQueue): self
    {
        $this->retryQueue = $retryQueue;

        return $this;
    }
}
