<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param NameValue[] $resources
     *
     * @return self
     */
    public function setResources(array $resources = null)
    {
        $this->resources = $resources;

        return $this;
    }
}
