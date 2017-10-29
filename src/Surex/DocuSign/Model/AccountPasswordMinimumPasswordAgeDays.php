<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordMinimumPasswordAgeDays
{
    /**
     * @var string
     */
    protected $maximumAge;
    /**
     * @var string
     */
    protected $minimumAge;

    /**
     * @return string
     */
    public function getMaximumAge()
    {
        return $this->maximumAge;
    }

    /**
     * @param string $maximumAge
     *
     * @return self
     */
    public function setMaximumAge($maximumAge = null)
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * @param string $minimumAge
     *
     * @return self
     */
    public function setMinimumAge($minimumAge = null)
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }
}
