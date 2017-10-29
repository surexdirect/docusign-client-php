<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ReturnUrlRequest
{
    /**
     * @var string
     */
    protected $returnUrl;

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl($returnUrl = null)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }
}
