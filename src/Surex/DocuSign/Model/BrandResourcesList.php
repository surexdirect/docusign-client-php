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
    public function getResourcesContentTypes(): ?array
    {
        return $this->resourcesContentTypes;
    }

    /**
     * @param BrandResources[] $resourcesContentTypes
     *
     * @return self
     */
    public function setResourcesContentTypes(?array $resourcesContentTypes): self
    {
        $this->resourcesContentTypes = $resourcesContentTypes;

        return $this;
    }
}
