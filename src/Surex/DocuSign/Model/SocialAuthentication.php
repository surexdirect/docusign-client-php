<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SocialAuthentication
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $authentication;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getAuthentication(): ?string
    {
        return $this->authentication;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $authentication
     *
     * @return self
     */
    public function setAuthentication(?string $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }
}
