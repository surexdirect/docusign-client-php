<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CorrectViewRequest
{
    /**
     * @var string
     */
    protected $returnUrl;
    /**
     * @var string
     */
    protected $suppressNavigation;

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

    /**
     * @return string
     */
    public function getSuppressNavigation()
    {
        return $this->suppressNavigation;
    }

    /**
     * @param string $suppressNavigation
     *
     * @return self
     */
    public function setSuppressNavigation($suppressNavigation = null)
    {
        $this->suppressNavigation = $suppressNavigation;

        return $this;
    }
}
