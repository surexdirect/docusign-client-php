<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ViewLinkRequest
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $returnUrl;

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
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }
}
