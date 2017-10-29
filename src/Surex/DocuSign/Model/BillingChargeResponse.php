<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingChargeResponse
{
    /**
     * @var BillingCharge[]
     */
    protected $billingChargeItems;

    /**
     * @return BillingCharge[]
     */
    public function getBillingChargeItems()
    {
        return $this->billingChargeItems;
    }

    /**
     * @param BillingCharge[] $billingChargeItems
     *
     * @return self
     */
    public function setBillingChargeItems(array $billingChargeItems = null)
    {
        $this->billingChargeItems = $billingChargeItems;

        return $this;
    }
}
