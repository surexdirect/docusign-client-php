<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AppStoreReceipt
{
    /**
     * The Product ID from the AppStore.
     *
     * @var string
     */
    protected $productId;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $receiptData;

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

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getReceiptData(): ?string
    {
        return $this->receiptData;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $receiptData
     *
     * @return self
     */
    public function setReceiptData(?string $receiptData): self
    {
        $this->receiptData = $receiptData;

        return $this;
    }
}
