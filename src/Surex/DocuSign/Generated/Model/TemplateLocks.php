<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class TemplateLocks
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Sets the time, in seconds, until the lock expires when there is no activity on the envelope.

     If no value is entered, then the default value of 300 seconds is used. The maximum value is 1,800 seconds.

     The lock duration can be extended.

     *
     * @var string
     */
    protected $lockDurationInSeconds;
    /**
     * Specifies the friendly name of  the application that is locking the envelope.
     *
     * @var string
     */
    protected $lockedByApp;
    /**
     * @var UserInfo
     */
    protected $lockedByUser;
    /**
     * The datetime until the envelope lock expires.
     *
     * @var string
     */
    protected $lockedUntilDateTime;
    /**
     * A unique identifier provided to the owner of the envelope lock.   Used to prove ownership of the lock.
     *
     * @var string
     */
    protected $lockToken;
    /**
     * The type of envelope lock.  Currently "edit" is the only supported type.
     *
     * @var string
     */
    protected $lockType;
    /**
     * Reserved for future use.

     Indicates whether a scratchpad is used for editing information.

     *
     * @var string
     */
    protected $useScratchPad;

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
     * Sets the time, in seconds, until the lock expires when there is no activity on the envelope.

     If no value is entered, then the default value of 300 seconds is used. The maximum value is 1,800 seconds.

     The lock duration can be extended.

     *
     * @return string
     */
    public function getLockDurationInSeconds(): ?string
    {
        return $this->lockDurationInSeconds;
    }

    /**
     * Sets the time, in seconds, until the lock expires when there is no activity on the envelope.

     If no value is entered, then the default value of 300 seconds is used. The maximum value is 1,800 seconds.

     The lock duration can be extended.

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
     * Specifies the friendly name of  the application that is locking the envelope.
     *
     * @return string
     */
    public function getLockedByApp(): ?string
    {
        return $this->lockedByApp;
    }

    /**
     * Specifies the friendly name of  the application that is locking the envelope.
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
     * @return UserInfo
     */
    public function getLockedByUser(): ?UserInfo
    {
        return $this->lockedByUser;
    }

    /**
     * @param UserInfo $lockedByUser
     *
     * @return self
     */
    public function setLockedByUser(?UserInfo $lockedByUser): self
    {
        $this->lockedByUser = $lockedByUser;

        return $this;
    }

    /**
     * The datetime until the envelope lock expires.
     *
     * @return string
     */
    public function getLockedUntilDateTime(): ?string
    {
        return $this->lockedUntilDateTime;
    }

    /**
     * The datetime until the envelope lock expires.
     *
     * @param string $lockedUntilDateTime
     *
     * @return self
     */
    public function setLockedUntilDateTime(?string $lockedUntilDateTime): self
    {
        $this->lockedUntilDateTime = $lockedUntilDateTime;

        return $this;
    }

    /**
     * A unique identifier provided to the owner of the envelope lock.   Used to prove ownership of the lock.
     *
     * @return string
     */
    public function getLockToken(): ?string
    {
        return $this->lockToken;
    }

    /**
     * A unique identifier provided to the owner of the envelope lock.   Used to prove ownership of the lock.
     *
     * @param string $lockToken
     *
     * @return self
     */
    public function setLockToken(?string $lockToken): self
    {
        $this->lockToken = $lockToken;

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
