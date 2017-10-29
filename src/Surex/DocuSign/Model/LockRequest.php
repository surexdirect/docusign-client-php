<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class LockRequest
{
    /**
     * @var string
     */
    protected $lockDurationInSeconds;
    /**
     * @var string
     */
    protected $lockedByApp;
    /**
     * @var string
     */
    protected $lockType;
    /**
     * @var string
     */
    protected $templatePassword;
    /**
     * @var string
     */
    protected $useScratchPad;

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
    public function getTemplatePassword()
    {
        return $this->templatePassword;
    }

    /**
     * @param string $templatePassword
     *
     * @return self
     */
    public function setTemplatePassword($templatePassword = null)
    {
        $this->templatePassword = $templatePassword;

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
