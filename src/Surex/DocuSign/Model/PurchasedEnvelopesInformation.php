<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PurchasedEnvelopesInformation
{
    /**
     * The total amount of the purchase.
     *
     * @var string
     */
    protected $amount;
    /**
     * The AppName of the client application.
     *
     * @var string
     */
    protected $appName;
    /**
     * Specifies the ISO currency code of the purchase. This is based on the ISO 4217 currency code information.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * The Platform of the client application.
     *
     * @var string
     */
    protected $platform;
    /**
     * The Product ID from the AppStore.
     *
     * @var string
     */
    protected $productId;
    /**
     * The quantity of envelopes to add to the account.
     *
     * @var string
     */
    protected $quantity;
    /**
     * The encrypted Base64 encoded receipt data.
     *
     * @var string
     */
    protected $receiptData;
    /**
     * The name of the AppStore.
     *
     * @var string
     */
    protected $storeName;
    /**
     * Specifies the Transaction ID from the AppStore.
     *
     * @var string
     */
    protected $transactionId;

    /**
     * The total amount of the purchase.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * The total amount of the purchase.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The AppName of the client application.
     *
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * The AppName of the client application.
     *
     * @param string $appName
     *
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * Specifies the ISO currency code of the purchase. This is based on the ISO 4217 currency code information.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the ISO currency code of the purchase. This is based on the ISO 4217 currency code information.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * The Platform of the client application.
     *
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * The Platform of the client application.
     *
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;

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

    /**
     * The quantity of envelopes to add to the account.
     *
     * @return string
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * The quantity of envelopes to add to the account.
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The encrypted Base64 encoded receipt data.
     *
     * @return string
     */
    public function getReceiptData(): ?string
    {
        return $this->receiptData;
    }

    /**
     * The encrypted Base64 encoded receipt data.
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

    /**
     * The name of the AppStore.
     *
     * @return string
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * The name of the AppStore.
     *
     * @param string $storeName
     *
     * @return self
     */
    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Specifies the Transaction ID from the AppStore.
     *
     * @return string
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Specifies the Transaction ID from the AppStore.
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }
}
