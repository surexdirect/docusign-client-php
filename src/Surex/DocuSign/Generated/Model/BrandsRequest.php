<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BrandsRequest
{
    /**
     * The list of brands.
     *
     * @var BrandRequest[]
     */
    protected $brands;

    /**
     * The list of brands.
     *
     * @return BrandRequest[]
     */
    public function getBrands(): ?array
    {
        return $this->brands;
    }

    /**
     * The list of brands.
     *
     * @param BrandRequest[] $brands
     *
     * @return self
     */
    public function setBrands(?array $brands): self
    {
        $this->brands = $brands;

        return $this;
    }
}
