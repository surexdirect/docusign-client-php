<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AddressInformationV2
{
    /**
     * First Line of the address.
     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $address1;
    /**
     * Second Line of the address.
     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $address2;
    /**
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
     * @var string
     */
    protected $fax;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * The state or province associated with the address.
     *
     * @var string
     */
    protected $stateOrProvince;

    /**
     * First Line of the address.
     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * First Line of the address.
     Maximum length: 100 characters.
     *
     * @param string $address1
     *
     * @return self
     */
    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Second Line of the address.
     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Second Line of the address.
     Maximum length: 100 characters.
     *
     * @param string $address2
     *
     * @return self
     */
    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
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
     * @return string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
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
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
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
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * The state or province associated with the address.
     *
     * @return string
     */
    public function getStateOrProvince(): ?string
    {
        return $this->stateOrProvince;
    }

    /**
     * The state or province associated with the address.
     *
     * @param string $stateOrProvince
     *
     * @return self
     */
    public function setStateOrProvince(?string $stateOrProvince): self
    {
        $this->stateOrProvince = $stateOrProvince;

        return $this;
    }
}
