<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BrandResourceUrls
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $sending;
    /**
     * @var string
     */
    protected $signing;
    /**
     * @var string
     */
    protected $signingCaptive;

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
    public function getSending(): ?string
    {
        return $this->sending;
    }

    /**
     * @param string $sending
     *
     * @return self
     */
    public function setSending(?string $sending): self
    {
        $this->sending = $sending;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigning(): ?string
    {
        return $this->signing;
    }

    /**
     * @param string $signing
     *
     * @return self
     */
    public function setSigning(?string $signing): self
    {
        $this->signing = $signing;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningCaptive(): ?string
    {
        return $this->signingCaptive;
    }

    /**
     * @param string $signingCaptive
     *
     * @return self
     */
    public function setSigningCaptive(?string $signingCaptive): self
    {
        $this->signingCaptive = $signingCaptive;

        return $this;
    }
}
