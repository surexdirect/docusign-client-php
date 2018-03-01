<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Expirations
{
    /**
     * An integer that sets the number of days the envelope is active.
     *
     * @var string
     */
    protected $expireAfter;
    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @var string
     */
    protected $expireEnabled;
    /**
     * An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @var string
     */
    protected $expireWarn;

    /**
     * An integer that sets the number of days the envelope is active.
     *
     * @return string
     */
    public function getExpireAfter(): ?string
    {
        return $this->expireAfter;
    }

    /**
     * An integer that sets the number of days the envelope is active.
     *
     * @param string $expireAfter
     *
     * @return self
     */
    public function setExpireAfter(?string $expireAfter): self
    {
        $this->expireAfter = $expireAfter;

        return $this;
    }

    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @return string
     */
    public function getExpireEnabled(): ?string
    {
        return $this->expireEnabled;
    }

    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @param string $expireEnabled
     *
     * @return self
     */
    public function setExpireEnabled(?string $expireEnabled): self
    {
        $this->expireEnabled = $expireEnabled;

        return $this;
    }

    /**
     * An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @return string
     */
    public function getExpireWarn(): ?string
    {
        return $this->expireWarn;
    }

    /**
     * An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @param string $expireWarn
     *
     * @return self
     */
    public function setExpireWarn(?string $expireWarn): self
    {
        $this->expireWarn = $expireWarn;

        return $this;
    }
}
