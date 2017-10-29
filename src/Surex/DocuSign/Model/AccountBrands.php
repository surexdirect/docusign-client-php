<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountBrands
{
    /**
     * @var Brand[]
     */
    protected $brands;
    /**
     * @var string
     */
    protected $recipientBrandIdDefault;
    /**
     * @var string
     */
    protected $senderBrandIdDefault;

    /**
     * @return Brand[]
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @param Brand[] $brands
     *
     * @return self
     */
    public function setBrands(array $brands = null)
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientBrandIdDefault()
    {
        return $this->recipientBrandIdDefault;
    }

    /**
     * @param string $recipientBrandIdDefault
     *
     * @return self
     */
    public function setRecipientBrandIdDefault($recipientBrandIdDefault = null)
    {
        $this->recipientBrandIdDefault = $recipientBrandIdDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderBrandIdDefault()
    {
        return $this->senderBrandIdDefault;
    }

    /**
     * @param string $senderBrandIdDefault
     *
     * @return self
     */
    public function setSenderBrandIdDefault($senderBrandIdDefault = null)
    {
        $this->senderBrandIdDefault = $senderBrandIdDefault;

        return $this;
    }
}
