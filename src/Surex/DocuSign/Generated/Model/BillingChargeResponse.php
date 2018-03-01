<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingChargeResponse
{
    /**
     * Reserved: TBD.
     *
     * @var BillingCharge[]
     */
    protected $billingChargeItems;

    /**
     * Reserved: TBD.
     *
     * @return BillingCharge[]
     */
    public function getBillingChargeItems(): ?array
    {
        return $this->billingChargeItems;
    }

    /**
     * Reserved: TBD.
     *
     * @param BillingCharge[] $billingChargeItems
     *
     * @return self
     */
    public function setBillingChargeItems(?array $billingChargeItems): self
    {
        $this->billingChargeItems = $billingChargeItems;

        return $this;
    }
}
