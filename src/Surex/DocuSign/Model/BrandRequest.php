<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandRequest
{
    /**
     * @var string
     */
    protected $brandId;

    /**
     * @return string
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId($brandId = null)
    {
        $this->brandId = $brandId;

        return $this;
    }
}
