<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * @param string $phoneType
     *
     * @return self
     */
    public function setPhoneType($phoneType = null)
    {
        $this->phoneType = $phoneType;

        return $this;
    }
}
