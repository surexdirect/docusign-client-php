<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordExpirePasswordDays
{
    /**
     * @var string
     */
    protected $maximumDays;
    /**
     * @var string
     */
    protected $minimumDays;

    /**
     * @return string
     */
    public function getMaximumDays()
    {
        return $this->maximumDays;
    }

    /**
     * @param string $maximumDays
     *
     * @return self
     */
    public function setMaximumDays($maximumDays = null)
    {
        $this->maximumDays = $maximumDays;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumDays()
    {
        return $this->minimumDays;
    }

    /**
     * @param string $minimumDays
     *
     * @return self
     */
    public function setMinimumDays($minimumDays = null)
    {
        $this->minimumDays = $minimumDays;

        return $this;
    }
}
