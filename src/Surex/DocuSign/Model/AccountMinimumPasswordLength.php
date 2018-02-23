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
    public function getMaximumLength(): ?string
    {
        return $this->maximumLength;
    }

    /**
     * @param string $maximumLength
     *
     * @return self
     */
    public function setMaximumLength(?string $maximumLength): self
    {
        $this->maximumLength = $maximumLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumLength(): ?string
    {
        return $this->minimumLength;
    }

    /**
     * @param string $minimumLength
     *
     * @return self
     */
    public function setMinimumLength(?string $minimumLength): self
    {
        $this->minimumLength = $minimumLength;

        return $this;
    }
}
