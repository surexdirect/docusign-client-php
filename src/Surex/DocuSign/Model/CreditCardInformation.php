<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CreditCardInformation
{
    /**
     * @var AddressInformation
     */
    protected $address;
    /**
     * @var string
     */
    protected $cardNumber;
    /**
     * @var string
     */
    protected $cardType;
    /**
     * @var string
     */
    protected $expirationMonth;
    /**
     * @var string
     */
    protected $expirationYear;
    /**
     * @var string
     */
    protected $nameOnCard;

    /**
     * @return AddressInformation
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressInformation $address
     *
     * @return self
     */
    public function setAddress(AddressInformation $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     *
     * @return self
     */
    public function setCardNumber($cardNumber = null)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     *
     * @return self
     */
    public function setCardType($cardType = null)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param string $expirationMonth
     *
     * @return self
     */
    public function setExpirationMonth($expirationMonth = null)
    {
        $this->expirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param string $expirationYear
     *
     * @return self
     */
    public function setExpirationYear($expirationYear = null)
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @param string $nameOnCard
     *
     * @return self
     */
    public function setNameOnCard($nameOnCard = null)
    {
        $this->nameOnCard = $nameOnCard;

        return $this;
    }
}
