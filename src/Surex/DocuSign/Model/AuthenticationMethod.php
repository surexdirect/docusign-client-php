<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AuthenticationMethod
{
    /**
     * @var string
     */
    protected $authenticationType;
    /**
     * @var string
     */
    protected $lastProvider;
    /**
     * @var string
     */
    protected $lastTimestamp;
    /**
     * @var int
     */
    protected $totalCount;

    /**
     * @return string
     */
    public function getAuthenticationType()
    {
        return $this->authenticationType;
    }

    /**
     * @param string $authenticationType
     *
     * @return self
     */
    public function setAuthenticationType($authenticationType = null)
    {
        $this->authenticationType = $authenticationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastProvider()
    {
        return $this->lastProvider;
    }

    /**
     * @param string $lastProvider
     *
     * @return self
     */
    public function setLastProvider($lastProvider = null)
    {
        $this->lastProvider = $lastProvider;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastTimestamp()
    {
        return $this->lastTimestamp;
    }

    /**
     * @param string $lastTimestamp
     *
     * @return self
     */
    public function setLastTimestamp($lastTimestamp = null)
    {
        $this->lastTimestamp = $lastTimestamp;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount($totalCount = null)
    {
        $this->totalCount = $totalCount;

        return $this;
    }
}
