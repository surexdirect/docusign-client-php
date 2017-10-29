<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountMinimumPasswordLength
{
    /**
     * @var string
     */
    protected $maximumLength;
    /**
     * @var string
     */
    protected $minimumLength;

    /**
     * @return string
     */
    public function getMaximumLength()
    {
        return $this->maximumLength;
    }

    /**
     * @param string $maximumLength
     *
     * @return self
     */
    public function setMaximumLength($maximumLength = null)
    {
        $this->maximumLength = $maximumLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumLength()
    {
        return $this->minimumLength;
    }

    /**
     * @param string $minimumLength
     *
     * @return self
     */
    public function setMinimumLength($minimumLength = null)
    {
        $this->minimumLength = $minimumLength;

        return $this;
    }
}
