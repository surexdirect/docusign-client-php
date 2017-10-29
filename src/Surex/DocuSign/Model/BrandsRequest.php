<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandsRequest
{
    /**
     * @var BrandRequest[]
     */
    protected $brands;

    /**
     * @return BrandRequest[]
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @param BrandRequest[] $brands
     *
     * @return self
     */
    public function setBrands(array $brands = null)
    {
        $this->brands = $brands;

        return $this;
    }
}
