<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandLogos
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $primary;
    /**
     * @var string
     */
    protected $secondary;

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

    /**
     * @return string
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param string $primary
     *
     * @return self
     */
    public function setPrimary($primary = null)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondary()
    {
        return $this->secondary;
    }

    /**
     * @param string $secondary
     *
     * @return self
     */
    public function setSecondary($secondary = null)
    {
        $this->secondary = $secondary;

        return $this;
    }
}
