<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getActive(): ?string
    {
        return $this->active;
    }

    /**
     * @param string $active
     *
     * @return self
     */
    public function setActive(?string $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainCode(): ?string
    {
        return $this->domainCode;
    }

    /**
     * @param string $domainCode
     *
     * @return self
     */
    public function setDomainCode(?string $domainCode): self
    {
        $this->domainCode = $domainCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientDomainId(): ?string
    {
        return $this->recipientDomainId;
    }

    /**
     * @param string $recipientDomainId
     *
     * @return self
     */
    public function setRecipientDomainId(?string $recipientDomainId): self
    {
        $this->recipientDomainId = $recipientDomainId;

        return $this;
    }
}
