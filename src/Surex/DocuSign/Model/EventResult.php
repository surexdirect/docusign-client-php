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
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
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
    public function getEventTimestamp(): ?string
    {
        return $this->eventTimestamp;
    }

    /**
     * @param string $eventTimestamp
     *
     * @return self
     */
    public function setEventTimestamp(?string $eventTimestamp): self
    {
        $this->eventTimestamp = $eventTimestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureDescription(): ?string
    {
        return $this->failureDescription;
    }

    /**
     * @param string $failureDescription
     *
     * @return self
     */
    public function setFailureDescription(?string $failureDescription): self
    {
        $this->failureDescription = $failureDescription;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getVendorFailureStatusCode(): ?string
    {
        return $this->vendorFailureStatusCode;
    }

    /**
     * @param string $vendorFailureStatusCode
     *
     * @return self
     */
    public function setVendorFailureStatusCode(?string $vendorFailureStatusCode): self
    {
        $this->vendorFailureStatusCode = $vendorFailureStatusCode;

        return $this;
    }
}
