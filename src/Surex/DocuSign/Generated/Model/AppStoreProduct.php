<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AppStoreProduct
{
    /**
     * @var string
     */
    protected $marketPlace;
    /**
     * The Product ID from the AppStore.
     *
     * @var string
     */
    protected $productId;

    /**
     * @return string
     */
    public function getMarketPlace(): ?string
    {
        return $this->marketPlace;
    }

    /**
     * @param string $marketPlace
     *
     * @return self
     */
    public function setMarketPlace(?string $marketPlace): self
    {
        $this->marketPlace = $marketPlace;

        return $this;
    }

    /**
     * The Product ID from the AppStore.
     *
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * The Product ID from the AppStore.
     *
     * @param string $productId
     *
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }
}
