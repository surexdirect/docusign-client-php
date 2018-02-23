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
    public function getMaximumAge(): ?string
    {
        return $this->maximumAge;
    }

    /**
     * @param string $maximumAge
     *
     * @return self
     */
    public function setMaximumAge(?string $maximumAge): self
    {
        $this->maximumAge = $maximumAge;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumAge(): ?string
    {
        return $this->minimumAge;
    }

    /**
     * @param string $minimumAge
     *
     * @return self
     */
    public function setMinimumAge(?string $minimumAge): self
    {
        $this->minimumAge = $minimumAge;

        return $this;
    }
}
