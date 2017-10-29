<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PurchasedEnvelopesInformation
{
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $appName;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $platform;
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var string
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $receiptData;
    /**
     * @var string
     */
    protected $storeName;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return self
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     *
     * @return self
     */
    public function setAppName($appName = null)
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode = null)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform($platform = null)
    {
        $this->platform = $platform;

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

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

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

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param string $storeName
     *
     * @return self
     */
    public function setStoreName($storeName = null)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId($transactionId = null)
    {
        $this->transactionId = $transactionId;

        return $this;
    }
}
