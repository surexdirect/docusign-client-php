<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Money
{
    /**
     * The total payment amount.
     in the currency's base unit.
     For example, for USD
     the base currency is one cent.

     *
     * @var string
     */
    protected $amountInBaseUnit;
    /**
     * The three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     For example:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     This is a read-only property.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @var string
     */
    protected $currency;
    /**
     * The payment amount as displayed.
     in the `currency`.

     For example, if the payment amount
     is USD 12.59,
     the `amountInBaseUnit` is 1259 (cents),
     and the displayed amount is `$12.59 USD`.

     This is a read-only property.

     *
     * @var string
     */
    protected $displayAmount;

    /**
     * The total payment amount.
     in the currency's base unit.
     For example, for USD
     the base currency is one cent.

     *
     * @return string
     */
    public function getAmountInBaseUnit(): ?string
    {
        return $this->amountInBaseUnit;
    }

    /**
     * The total payment amount.
     in the currency's base unit.
     For example, for USD
     the base currency is one cent.

     *
     * @param string $amountInBaseUnit
     *
     * @return self
     */
    public function setAmountInBaseUnit(?string $amountInBaseUnit): self
    {
        $this->amountInBaseUnit = $amountInBaseUnit;

        return $this;
    }

    /**
     * The three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     For example:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     This is a read-only property.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * The three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     For example:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     This is a read-only property.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * The payment amount as displayed.
     in the `currency`.

     For example, if the payment amount
     is USD 12.59,
     the `amountInBaseUnit` is 1259 (cents),
     and the displayed amount is `$12.59 USD`.

     This is a read-only property.

     *
     * @return string
     */
    public function getDisplayAmount(): ?string
    {
        return $this->displayAmount;
    }

    /**
     * The payment amount as displayed.
     in the `currency`.

     For example, if the payment amount
     is USD 12.59,
     the `amountInBaseUnit` is 1259 (cents),
     and the displayed amount is `$12.59 USD`.

     This is a read-only property.

     *
     * @param string $displayAmount
     *
     * @return self
     */
    public function setDisplayAmount(?string $displayAmount): self
    {
        $this->displayAmount = $displayAmount;

        return $this;
    }
}
