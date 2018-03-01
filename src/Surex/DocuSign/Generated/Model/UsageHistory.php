<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class UsageHistory
{
    /**
     * The date and time the user last sent an envelope.
     *
     * @var string
     */
    protected $lastSentDateTime;
    /**
     * The date and time the user last signed an envelope.
     *
     * @var string
     */
    protected $lastSignedDateTime;
    /**
     * The number of envelopes the user has sent.
     *
     * @var int
     */
    protected $sentCount;
    /**
     * The number of envelopes the user has signed.
     *
     * @var int
     */
    protected $signedCount;

    /**
     * The date and time the user last sent an envelope.
     *
     * @return string
     */
    public function getLastSentDateTime(): ?string
    {
        return $this->lastSentDateTime;
    }

    /**
     * The date and time the user last sent an envelope.
     *
     * @param string $lastSentDateTime
     *
     * @return self
     */
    public function setLastSentDateTime(?string $lastSentDateTime): self
    {
        $this->lastSentDateTime = $lastSentDateTime;

        return $this;
    }

    /**
     * The date and time the user last signed an envelope.
     *
     * @return string
     */
    public function getLastSignedDateTime(): ?string
    {
        return $this->lastSignedDateTime;
    }

    /**
     * The date and time the user last signed an envelope.
     *
     * @param string $lastSignedDateTime
     *
     * @return self
     */
    public function setLastSignedDateTime(?string $lastSignedDateTime): self
    {
        $this->lastSignedDateTime = $lastSignedDateTime;

        return $this;
    }

    /**
     * The number of envelopes the user has sent.
     *
     * @return int
     */
    public function getSentCount(): ?int
    {
        return $this->sentCount;
    }

    /**
     * The number of envelopes the user has sent.
     *
     * @param int $sentCount
     *
     * @return self
     */
    public function setSentCount(?int $sentCount): self
    {
        $this->sentCount = $sentCount;

        return $this;
    }

    /**
     * The number of envelopes the user has signed.
     *
     * @return int
     */
    public function getSignedCount(): ?int
    {
        return $this->signedCount;
    }

    /**
     * The number of envelopes the user has signed.
     *
     * @param int $signedCount
     *
     * @return self
     */
    public function setSignedCount(?int $signedCount): self
    {
        $this->signedCount = $signedCount;

        return $this;
    }
}
