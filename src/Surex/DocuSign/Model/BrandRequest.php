<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandRequest
{
    /**
     * The ID of the brand used in API calls.
     *
     * @var string
     */
    protected $brandId;

    /**
     * The ID of the brand used in API calls.
     *
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * The ID of the brand used in API calls.
     *
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }
}
