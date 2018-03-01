<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
