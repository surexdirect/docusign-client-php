<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UsageHistory
{
    /**
     * @var string
     */
    protected $lastSentDateTime;
    /**
     * @var string
     */
    protected $lastSignedDateTime;
    /**
     * @var int
     */
    protected $sentCount;
    /**
     * @var int
     */
    protected $signedCount;

    /**
     * @return string
     */
    public function getLastSentDateTime()
    {
        return $this->lastSentDateTime;
    }

    /**
     * @param string $lastSentDateTime
     *
     * @return self
     */
    public function setLastSentDateTime($lastSentDateTime = null)
    {
        $this->lastSentDateTime = $lastSentDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastSignedDateTime()
    {
        return $this->lastSignedDateTime;
    }

    /**
     * @param string $lastSignedDateTime
     *
     * @return self
     */
    public function setLastSignedDateTime($lastSignedDateTime = null)
    {
        $this->lastSignedDateTime = $lastSignedDateTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getSentCount()
    {
        return $this->sentCount;
    }

    /**
     * @param int $sentCount
     *
     * @return self
     */
    public function setSentCount($sentCount = null)
    {
        $this->sentCount = $sentCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getSignedCount()
    {
        return $this->signedCount;
    }

    /**
     * @param int $signedCount
     *
     * @return self
     */
    public function setSignedCount($signedCount = null)
    {
        $this->signedCount = $signedCount;

        return $this;
    }
}
