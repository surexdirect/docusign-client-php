<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeLocks
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $lockDurationInSeconds;
    /**
     * @var string
     */
    protected $lockedByApp;
    /**
     * @var UserInfo
     */
    protected $lockedByUser;
    /**
     * @var string
     */
    protected $lockedUntilDateTime;
    /**
     * @var string
     */
    protected $lockToken;
    /**
     * @var string
     */
    protected $lockType;
    /**
     * @var string
     */
    protected $useScratchPad;

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
    public function getLockDurationInSeconds()
    {
        return $this->lockDurationInSeconds;
    }

    /**
     * @param string $lockDurationInSeconds
     *
     * @return self
     */
    public function setLockDurationInSeconds($lockDurationInSeconds = null)
    {
        $this->lockDurationInSeconds = $lockDurationInSeconds;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockedByApp()
    {
        return $this->lockedByApp;
    }

    /**
     * @param string $lockedByApp
     *
     * @return self
     */
    public function setLockedByApp($lockedByApp = null)
    {
        $this->lockedByApp = $lockedByApp;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getLockedByUser()
    {
        return $this->lockedByUser;
    }

    /**
     * @param UserInfo $lockedByUser
     *
     * @return self
     */
    public function setLockedByUser(UserInfo $lockedByUser = null)
    {
        $this->lockedByUser = $lockedByUser;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockedUntilDateTime()
    {
        return $this->lockedUntilDateTime;
    }

    /**
     * @param string $lockedUntilDateTime
     *
     * @return self
     */
    public function setLockedUntilDateTime($lockedUntilDateTime = null)
    {
        $this->lockedUntilDateTime = $lockedUntilDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockToken()
    {
        return $this->lockToken;
    }

    /**
     * @param string $lockToken
     *
     * @return self
     */
    public function setLockToken($lockToken = null)
    {
        $this->lockToken = $lockToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockType()
    {
        return $this->lockType;
    }

    /**
     * @param string $lockType
     *
     * @return self
     */
    public function setLockType($lockType = null)
    {
        $this->lockType = $lockType;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseScratchPad()
    {
        return $this->useScratchPad;
    }

    /**
     * @param string $useScratchPad
     *
     * @return self
     */
    public function setUseScratchPad($useScratchPad = null)
    {
        $this->useScratchPad = $useScratchPad;

        return $this;
    }
}
