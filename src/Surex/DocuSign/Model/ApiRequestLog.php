<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ApiRequestLog
{
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $requestLogId;
    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime($createdDateTime = null)
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestLogId()
    {
        return $this->requestLogId;
    }

    /**
     * @param string $requestLogId
     *
     * @return self
     */
    public function setRequestLogId($requestLogId = null)
    {
        $this->requestLogId = $requestLogId;

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
}
