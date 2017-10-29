<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BccEmailAddress
{
    /**
     * @var string
     */
    protected $bccEmailAddressId;
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getBccEmailAddressId()
    {
        return $this->bccEmailAddressId;
    }

    /**
     * @param string $bccEmailAddressId
     *
     * @return self
     */
    public function setBccEmailAddressId($bccEmailAddressId = null)
    {
        $this->bccEmailAddressId = $bccEmailAddressId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }
}
