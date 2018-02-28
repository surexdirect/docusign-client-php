<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getPrimary(): ?string
    {
        return $this->primary;
    }

    /**
     * @param string $primary
     *
     * @return self
     */
    public function setPrimary(?string $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondary(): ?string
    {
        return $this->secondary;
    }

    /**
     * @param string $secondary
     *
     * @return self
     */
    public function setSecondary(?string $secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }
}
