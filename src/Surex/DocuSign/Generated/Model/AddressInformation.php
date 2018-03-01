<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AddressInformation
{
    /**
     * The city associated with the address.
     *
     * @var string
     */
    protected $city;
    /**
     * Specifies the country associated with the address.
     *
     * @var string
     */
    protected $country;
    /**
     * A Fax number associated with the address if one is available.
     *
     * @var string
     */
    protected $fax;
    /**
     * A phone number associated with the address.
     *
     * @var string
     */
    protected $phone;
    /**
     * The state or province associated with the address.
     *
     * @var string
     */
    protected $state;
    /**
     * The first line of the address.
     *
     * @var string
     */
    protected $street1;
    /**
     * The second line of the address (optional).
     *
     * @var string
     */
    protected $street2;
    /**
     * The zip or postal code associated with the address.
     *
     * @var string
     */
    protected $zip;

    /**
     * The city associated with the address.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * The city associated with the address.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Specifies the country associated with the address.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Specifies the country associated with the address.
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * A Fax number associated with the address if one is available.
     *
     * @return string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * A Fax number associated with the address if one is available.
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * A phone number associated with the address.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * A phone number associated with the address.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The state or province associated with the address.
     *
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * The state or province associated with the address.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * The first line of the address.
     *
     * @return string
     */
    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    /**
     * The first line of the address.
     *
     * @param string $street1
     *
     * @return self
     */
    public function setStreet1(?string $street1): self
    {
        $this->street1 = $street1;

        return $this;
    }

    /**
     * The second line of the address (optional).
     *
     * @return string
     */
    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    /**
     * The second line of the address (optional).
     *
     * @param string $street2
     *
     * @return self
     */
    public function setStreet2(?string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }

    /**
     * The zip or postal code associated with the address.
     *
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * The zip or postal code associated with the address.
     *
     * @param string $zip
     *
     * @return self
     */
    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }
}
