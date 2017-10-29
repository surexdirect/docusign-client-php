<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AppStoreReceipt
{
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var string
     */
    protected $receiptData;

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

    /**
     * @return string
     */
    public function getReceiptData()
    {
        return $this->receiptData;
    }

    /**
     * @param string $receiptData
     *
     * @return self
     */
    public function setReceiptData($receiptData = null)
    {
        $this->receiptData = $receiptData;

        return $this;
    }
}
