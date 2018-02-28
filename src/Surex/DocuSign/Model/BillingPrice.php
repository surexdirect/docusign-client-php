<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPrice
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
    protected $endQuantity;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $unitPrice;

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

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
