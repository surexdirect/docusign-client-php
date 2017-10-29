<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EventResult
{
    /**
     * @var string
     */
    protected $eventTimestamp;
    /**
     * @var string
     */
    protected $failureDescription;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $vendorFailureStatusCode;

    /**
     * @return string
     */
    public function getEventTimestamp()
    {
        return $this->eventTimestamp;
    }

    /**
     * @param string $eventTimestamp
     *
     * @return self
     */
    public function setEventTimestamp($eventTimestamp = null)
    {
        $this->eventTimestamp = $eventTimestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureDescription()
    {
        return $this->failureDescription;
    }

    /**
     * @param string $failureDescription
     *
     * @return self
     */
    public function setFailureDescription($failureDescription = null)
    {
        $this->failureDescription = $failureDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getVendorFailureStatusCode()
    {
        return $this->vendorFailureStatusCode;
    }

    /**
     * @param string $vendorFailureStatusCode
     *
     * @return self
     */
    public function setVendorFailureStatusCode($vendorFailureStatusCode = null)
    {
        $this->vendorFailureStatusCode = $vendorFailureStatusCode;

        return $this;
    }
}
