<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordStrengthType
{
    /**
     * @var AccountPasswordStrengthTypeOption[]
     */
    protected $options;

    /**
     * @return AccountPasswordStrengthTypeOption[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param AccountPasswordStrengthTypeOption[] $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
