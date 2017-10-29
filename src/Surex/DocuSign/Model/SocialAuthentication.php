<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SocialAuthentication
{
    /**
     * @var string
     */
    protected $authentication;

    /**
     * @return string
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * @param string $authentication
     *
     * @return self
     */
    public function setAuthentication($authentication = null)
    {
        $this->authentication = $authentication;

        return $this;
    }
}
