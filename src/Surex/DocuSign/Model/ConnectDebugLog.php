<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectDebugLog
{
    /**
     * @var string
     */
    protected $connectConfig;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $eventDateTime;
    /**
     * @var string
     */
    protected $eventDescription;
    /**
     * @var string
     */
    protected $payload;

    /**
     * @return string
     */
    public function getConnectConfig()
    {
        return $this->connectConfig;
    }

    /**
     * @param string $connectConfig
     *
     * @return self
     */
    public function setConnectConfig($connectConfig = null)
    {
        $this->connectConfig = $connectConfig;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDateTime()
    {
        return $this->eventDateTime;
    }

    /**
     * @param string $eventDateTime
     *
     * @return self
     */
    public function setEventDateTime($eventDateTime = null)
    {
        $this->eventDateTime = $eventDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @param string $eventDescription
     *
     * @return self
     */
    public function setEventDescription($eventDescription = null)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     *
     * @return self
     */
    public function setPayload($payload = null)
    {
        $this->payload = $payload;

        return $this;
    }
}
