<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordLockoutDurationMinutes
{
    /**
     * @var string
     */
    protected $maximumMinutes;
    /**
     * @var string
     */
    protected $minimumMinutes;

    /**
     * @return string
     */
    public function getMaximumMinutes(): ?string
    {
        return $this->maximumMinutes;
    }

    /**
     * @param string $maximumMinutes
     *
     * @return self
     */
    public function setMaximumMinutes(?string $maximumMinutes): self
    {
        $this->maximumMinutes = $maximumMinutes;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumMinutes(): ?string
    {
        return $this->minimumMinutes;
    }

    /**
     * @param string $minimumMinutes
     *
     * @return self
     */
    public function setMinimumMinutes(?string $minimumMinutes): self
    {
        $this->minimumMinutes = $minimumMinutes;

        return $this;
    }
}
