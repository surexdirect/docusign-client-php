<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientDomain
{
    /**
     * @var string
     */
    protected $active;
    /**
     * @var string
     */
    protected $domainCode;
    /**
     * @var string
     */
    protected $domainName;
    /**
     * @var string
     */
    protected $recipientDomainId;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     *
     * @return self
     */
    public function setActive($active = null)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainCode()
    {
        return $this->domainCode;
    }

    /**
     * @param string $domainCode
     *
     * @return self
     */
    public function setDomainCode($domainCode = null)
    {
        $this->domainCode = $domainCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName($domainName = null)
    {
        $this->domainName = $domainName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientDomainId()
    {
        return $this->recipientDomainId;
    }

    /**
     * @param string $recipientDomainId
     *
     * @return self
     */
    public function setRecipientDomainId($recipientDomainId = null)
    {
        $this->recipientDomainId = $recipientDomainId;

        return $this;
    }
}
