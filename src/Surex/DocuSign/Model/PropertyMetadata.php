<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PropertyMetadata
{
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string
     */
    protected $rights;

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

    /**
     * @return string
     */
    public function getRights(): ?string
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     *
     * @return self
     */
    public function setRights(?string $rights): self
    {
        $this->rights = $rights;

        return $this;
    }
}
