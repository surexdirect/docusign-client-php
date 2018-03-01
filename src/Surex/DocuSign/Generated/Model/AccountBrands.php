<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AccountBrands
{
    /**
     * The list of brands.
     *
     * @var Brand[]
     */
    protected $brands;
    /**
     * The brand seen by envelope recipients when a brand is not explicitly set.
     *
     * @var string
     */
    protected $recipientBrandIdDefault;
    /**
     * The brand seen by envelope senders when a brand is not explicitly set.
     *
     * @var string
     */
    protected $senderBrandIdDefault;

    /**
     * The list of brands.
     *
     * @return Brand[]
     */
    public function getBrands(): ?array
    {
        return $this->brands;
    }

    /**
     * The list of brands.
     *
     * @param Brand[] $brands
     *
     * @return self
     */
    public function setBrands(?array $brands): self
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * The brand seen by envelope recipients when a brand is not explicitly set.
     *
     * @return string
     */
    public function getRecipientBrandIdDefault(): ?string
    {
        return $this->recipientBrandIdDefault;
    }

    /**
     * The brand seen by envelope recipients when a brand is not explicitly set.
     *
     * @param string $recipientBrandIdDefault
     *
     * @return self
     */
    public function setRecipientBrandIdDefault(?string $recipientBrandIdDefault): self
    {
        $this->recipientBrandIdDefault = $recipientBrandIdDefault;

        return $this;
    }

    /**
     * The brand seen by envelope senders when a brand is not explicitly set.
     *
     * @return string
     */
    public function getSenderBrandIdDefault(): ?string
    {
        return $this->senderBrandIdDefault;
    }

    /**
     * The brand seen by envelope senders when a brand is not explicitly set.
     *
     * @param string $senderBrandIdDefault
     *
     * @return self
     */
    public function setSenderBrandIdDefault(?string $senderBrandIdDefault): self
    {
        $this->senderBrandIdDefault = $senderBrandIdDefault;

        return $this;
    }
}
