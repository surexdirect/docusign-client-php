<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AppStoreProduct
{
    /**
     * @var string
     */
    protected $marketPlace;
    /**
     * @var string
     */
    protected $productId;

    /**
     * @return string
     */
    public function getMarketPlace()
    {
        return $this->marketPlace;
    }

    /**
     * @param string $marketPlace
     *
     * @return self
     */
    public function setMarketPlace($marketPlace = null)
    {
        $this->marketPlace = $marketPlace;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     *
     * @return self
     */
    public function setProductId($productId = null)
    {
        $this->productId = $productId;

        return $this;
    }
}
