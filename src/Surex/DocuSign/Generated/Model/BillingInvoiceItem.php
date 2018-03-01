<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingInvoiceItem
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $chargeAmount;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $chargeName;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $invoiceItemId;
    /**
     * The quantity of envelopes to add to the account.
     *
     * @var string
     */
    protected $quantity;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $unitPrice;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getChargeAmount(): ?string
    {
        return $this->chargeAmount;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $chargeAmount
     *
     * @return self
     */
    public function setChargeAmount(?string $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getChargeName(): ?string
    {
        return $this->chargeName;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $chargeName
     *
     * @return self
     */
    public function setChargeName(?string $chargeName): self
    {
        $this->chargeName = $chargeName;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getInvoiceItemId(): ?string
    {
        return $this->invoiceItemId;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $invoiceItemId
     *
     * @return self
     */
    public function setInvoiceItemId(?string $invoiceItemId): self
    {
        $this->invoiceItemId = $invoiceItemId;

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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
