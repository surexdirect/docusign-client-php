<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getSending()
    {
        return $this->sending;
    }

    /**
     * @param string $sending
     *
     * @return self
     */
    public function setSending($sending = null)
    {
        $this->sending = $sending;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigning()
    {
        return $this->signing;
    }

    /**
     * @param string $signing
     *
     * @return self
     */
    public function setSigning($signing = null)
    {
        $this->signing = $signing;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningCaptive()
    {
        return $this->signingCaptive;
    }

    /**
     * @param string $signingCaptive
     *
     * @return self
     */
    public function setSigningCaptive($signingCaptive = null)
    {
        $this->signingCaptive = $signingCaptive;

        return $this;
    }
}
