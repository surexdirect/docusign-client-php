<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AccountAddress
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
     * The city value of the address.
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
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $fax;
    /**
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
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
    protected $state;
    /**
     * Contains an array of countries supported by the billing plan.
     *
     * @var Country[]
     */
    protected $supportedCountries;

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
     * The city value of the address.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * The city value of the address.
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
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

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
     * Contains an array of countries supported by the billing plan.
     *
     * @return Country[]
     */
    public function getSupportedCountries(): ?array
    {
        return $this->supportedCountries;
    }

    /**
     * Contains an array of countries supported by the billing plan.
     *
     * @param Country[] $supportedCountries
     *
     * @return self
     */
    public function setSupportedCountries(?array $supportedCountries): self
    {
        $this->supportedCountries = $supportedCountries;

        return $this;
    }
}
