<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getMaximumDays(): ?string
    {
        return $this->maximumDays;
    }

    /**
     * @param string $maximumDays
     *
     * @return self
     */
    public function setMaximumDays(?string $maximumDays): self
    {
        $this->maximumDays = $maximumDays;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumDays(): ?string
    {
        return $this->minimumDays;
    }

    /**
     * @param string $minimumDays
     *
     * @return self
     */
    public function setMinimumDays(?string $minimumDays): self
    {
        $this->minimumDays = $minimumDays;

        return $this;
    }
}
