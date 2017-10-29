<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandResourcesList
{
    /**
     * @var BrandResources[]
     */
    protected $resourcesContentTypes;

    /**
     * @return BrandResources[]
     */
    public function getResourcesContentTypes()
    {
        return $this->resourcesContentTypes;
    }

    /**
     * @param BrandResources[] $resourcesContentTypes
     *
     * @return self
     */
    public function setResourcesContentTypes(array $resourcesContentTypes = null)
    {
        $this->resourcesContentTypes = $resourcesContentTypes;

        return $this;
    }
}
