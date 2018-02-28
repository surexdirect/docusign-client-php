<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CreditCardInformation
{
    /**
     * Contains address information.
     *
     * @var AddressInformation
     */
    protected $address;
    /**
     * The number on the credit card.
     *
     * @var string
     */
    protected $cardNumber;
    /**
     * The credit card type. Valid values are: visa, mastercard, or amex.
     *
     * @var string
     */
    protected $cardType;
    /**
     * The month that the credit card expires (1-12).
     *
     * @var string
     */
    protected $expirationMonth;
    /**
     * The year 4 digit year in which the credit card expires.
     *
     * @var string
     */
    protected $expirationYear;
    /**
     * The exact name printed on the credit card.
     *
     * @var string
     */
    protected $nameOnCard;

    /**
     * Contains address information.
     *
     * @return AddressInformation
     */
    public function getAddress(): ?AddressInformation
    {
        return $this->address;
    }

    /**
     * Contains address information.
     *
     * @param AddressInformation $address
     *
     * @return self
     */
    public function setAddress(?AddressInformation $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * The number on the credit card.
     *
     * @return string
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * The number on the credit card.
     *
     * @param string $cardNumber
     *
     * @return self
     */
    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * The credit card type. Valid values are: visa, mastercard, or amex.
     *
     * @return string
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * The credit card type. Valid values are: visa, mastercard, or amex.
     *
     * @param string $cardType
     *
     * @return self
     */
    public function setCardType(?string $cardType): self
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * The month that the credit card expires (1-12).
     *
     * @return string
     */
    public function getExpirationMonth(): ?string
    {
        return $this->expirationMonth;
    }

    /**
     * The month that the credit card expires (1-12).
     *
     * @param string $expirationMonth
     *
     * @return self
     */
    public function setExpirationMonth(?string $expirationMonth): self
    {
        $this->expirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * The year 4 digit year in which the credit card expires.
     *
     * @return string
     */
    public function getExpirationYear(): ?string
    {
        return $this->expirationYear;
    }

    /**
     * The year 4 digit year in which the credit card expires.
     *
     * @param string $expirationYear
     *
     * @return self
     */
    public function setExpirationYear(?string $expirationYear): self
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * The exact name printed on the credit card.
     *
     * @return string
     */
    public function getNameOnCard(): ?string
    {
        return $this->nameOnCard;
    }

    /**
     * The exact name printed on the credit card.
     *
     * @param string $nameOnCard
     *
     * @return self
     */
    public function setNameOnCard(?string $nameOnCard): self
    {
        $this->nameOnCard = $nameOnCard;

        return $this;
    }
}
