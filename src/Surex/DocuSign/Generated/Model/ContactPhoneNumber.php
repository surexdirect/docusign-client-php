<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ContactPhoneNumber
{
    /**
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $phoneType;

    /**
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    /**
     * @param string $phoneType
     *
     * @return self
     */
    public function setPhoneType(?string $phoneType): self
    {
        $this->phoneType = $phoneType;

        return $this;
    }
}
