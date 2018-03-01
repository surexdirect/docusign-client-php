<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ConnectDebugLog
{
    /**
     * @var string
     */
    protected $connectConfig;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
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
    public function getConnectConfig(): ?string
    {
        return $this->connectConfig;
    }

    /**
     * @param string $connectConfig
     *
     * @return self
     */
    public function setConnectConfig(?string $connectConfig): self
    {
        $this->connectConfig = $connectConfig;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDateTime(): ?string
    {
        return $this->eventDateTime;
    }

    /**
     * @param string $eventDateTime
     *
     * @return self
     */
    public function setEventDateTime(?string $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDescription(): ?string
    {
        return $this->eventDescription;
    }

    /**
     * @param string $eventDescription
     *
     * @return self
     */
    public function setEventDescription(?string $eventDescription): self
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload(): ?string
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     *
     * @return self
     */
    public function setPayload(?string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }
}
