<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Resources
{
    /**
     * @var NameValue[]
     */
    protected $resources;

    /**
     * @return NameValue[]
     */
    public function getResources(): ?array
    {
        return $this->resources;
    }

    /**
     * @param NameValue[] $resources
     *
     * @return self
     */
    public function setResources(?array $resources): self
    {
        $this->resources = $resources;

        return $this;
    }
}
