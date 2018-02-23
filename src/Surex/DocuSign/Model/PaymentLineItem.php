<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentLineItem
{
    /**
     * This is a the `tabLabel`.
     that specifies the amount paid
     for the line items.


     *
     * @var string
     */
    protected $amountReference;
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * This is the sender-defined.
     SKU, inventory number, or other item code
     for the line item.

     *
     * @var string
     */
    protected $itemCode;
    /**
     * This is a sender-defined.
     product name, service name,
     or other designation for the line item.

     *
     * @var string
     */
    protected $name;

    /**
     * This is a the `tabLabel`.
     that specifies the amount paid
     for the line items.


     *
     * @return string
     */
    public function getAmountReference(): ?string
    {
        return $this->amountReference;
    }

    /**
     * This is a the `tabLabel`.
     that specifies the amount paid
     for the line items.


     *
     * @param string $amountReference
     *
     * @return self
     */
    public function setAmountReference(?string $amountReference): self
    {
        $this->amountReference = $amountReference;

        return $this;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * This is the sender-defined.
     SKU, inventory number, or other item code
     for the line item.

     *
     * @return string
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * This is the sender-defined.
     SKU, inventory number, or other item code
     for the line item.

     *
     * @param string $itemCode
     *
     * @return self
     */
    public function setItemCode(?string $itemCode): self
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * This is a sender-defined.
     product name, service name,
     or other designation for the line item.

     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * This is a sender-defined.
     product name, service name,
     or other designation for the line item.

     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
