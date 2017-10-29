<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordLockoutDurationType
{
    /**
     * @var string[]
     */
    protected $options;

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(array $options = null)
    {
        $this->options = $options;

        return $this;
    }
}
