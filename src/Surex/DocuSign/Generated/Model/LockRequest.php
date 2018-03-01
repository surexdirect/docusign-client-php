<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class LockRequest
{
    /**
     * The number of seconds to lock the envelope for editing.  Must be greater than 0 seconds.
     *
     * @var string
     */
    protected $lockDurationInSeconds;
    /**
     * A friendly name of the application used to lock the envelope.  Will be used in error messages to the user when lock conflicts occur.
     *
     * @var string
     */
    protected $lockedByApp;
    /**
     * The type of envelope lock.  Currently "edit" is the only supported type.
     *
     * @var string
     */
    protected $lockType;
    /**
     * @var string
     */
    protected $templatePassword;
    /**
     * Reserved for future use.

     Indicates whether a scratchpad is used for editing information.

     *
     * @var string
     */
    protected $useScratchPad;

    /**
     * The number of seconds to lock the envelope for editing.  Must be greater than 0 seconds.
     *
     * @return string
     */
    public function getLockDurationInSeconds(): ?string
    {
        return $this->lockDurationInSeconds;
    }

    /**
     * The number of seconds to lock the envelope for editing.  Must be greater than 0 seconds.
     *
     * @param string $lockDurationInSeconds
     *
     * @return self
     */
    public function setLockDurationInSeconds(?string $lockDurationInSeconds): self
    {
        $this->lockDurationInSeconds = $lockDurationInSeconds;

        return $this;
    }

    /**
     * A friendly name of the application used to lock the envelope.  Will be used in error messages to the user when lock conflicts occur.
     *
     * @return string
     */
    public function getLockedByApp(): ?string
    {
        return $this->lockedByApp;
    }

    /**
     * A friendly name of the application used to lock the envelope.  Will be used in error messages to the user when lock conflicts occur.
     *
     * @param string $lockedByApp
     *
     * @return self
     */
    public function setLockedByApp(?string $lockedByApp): self
    {
        $this->lockedByApp = $lockedByApp;

        return $this;
    }

    /**
     * The type of envelope lock.  Currently "edit" is the only supported type.
     *
     * @return string
     */
    public function getLockType(): ?string
    {
        return $this->lockType;
    }

    /**
     * The type of envelope lock.  Currently "edit" is the only supported type.
     *
     * @param string $lockType
     *
     * @return self
     */
    public function setLockType(?string $lockType): self
    {
        $this->lockType = $lockType;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplatePassword(): ?string
    {
        return $this->templatePassword;
    }

    /**
     * @param string $templatePassword
     *
     * @return self
     */
    public function setTemplatePassword(?string $templatePassword): self
    {
        $this->templatePassword = $templatePassword;

        return $this;
    }

    /**
     * Reserved for future use.

     Indicates whether a scratchpad is used for editing information.

     *
     * @return string
     */
    public function getUseScratchPad(): ?string
    {
        return $this->useScratchPad;
    }

    /**
     * Reserved for future use.

     Indicates whether a scratchpad is used for editing information.

     *
     * @param string $useScratchPad
     *
     * @return self
     */
    public function setUseScratchPad(?string $useScratchPad): self
    {
        $this->useScratchPad = $useScratchPad;

        return $this;
    }
}
