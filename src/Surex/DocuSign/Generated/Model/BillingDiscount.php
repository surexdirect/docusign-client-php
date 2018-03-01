<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingDiscount
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $beginQuantity;
    /**
     * @var string
     */
    protected $discount;
    /**
     * @var string
     */
    protected $endQuantity;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBeginQuantity(): ?string
    {
        return $this->beginQuantity;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $beginQuantity
     *
     * @return self
     */
    public function setBeginQuantity(?string $beginQuantity): self
    {
        $this->beginQuantity = $beginQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    /**
     * @param string $discount
     *
     * @return self
     */
    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndQuantity(): ?string
    {
        return $this->endQuantity;
    }

    /**
     * @param string $endQuantity
     *
     * @return self
     */
    public function setEndQuantity(?string $endQuantity): self
    {
        $this->endQuantity = $endQuantity;

        return $this;
    }
}
