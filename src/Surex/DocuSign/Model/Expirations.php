<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Expirations
{
    /**
     * @var string
     */
    protected $expireAfter;
    /**
     * @var string
     */
    protected $expireEnabled;
    /**
     * @var string
     */
    protected $expireWarn;

    /**
     * @return string
     */
    public function getExpireAfter()
    {
        return $this->expireAfter;
    }

    /**
     * @param string $expireAfter
     *
     * @return self
     */
    public function setExpireAfter($expireAfter = null)
    {
        $this->expireAfter = $expireAfter;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpireEnabled()
    {
        return $this->expireEnabled;
    }

    /**
     * @param string $expireEnabled
     *
     * @return self
     */
    public function setExpireEnabled($expireEnabled = null)
    {
        $this->expireEnabled = $expireEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpireWarn()
    {
        return $this->expireWarn;
    }

    /**
     * @param string $expireWarn
     *
     * @return self
     */
    public function setExpireWarn($expireWarn = null)
    {
        $this->expireWarn = $expireWarn;

        return $this;
    }
}
