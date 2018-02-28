<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
