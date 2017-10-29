<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getMaximumMinutes()
    {
        return $this->maximumMinutes;
    }

    /**
     * @param string $maximumMinutes
     *
     * @return self
     */
    public function setMaximumMinutes($maximumMinutes = null)
    {
        $this->maximumMinutes = $maximumMinutes;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumMinutes()
    {
        return $this->minimumMinutes;
    }

    /**
     * @param string $minimumMinutes
     *
     * @return self
     */
    public function setMinimumMinutes($minimumMinutes = null)
    {
        $this->minimumMinutes = $minimumMinutes;

        return $this;
    }
}
