<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlansResponse
{
    /**
     * Reserved: TBD.
     *
     * @var BillingPlan[]
     */
    protected $billingPlans;

    /**
     * Reserved: TBD.
     *
     * @return BillingPlan[]
     */
    public function getBillingPlans(): ?array
    {
        return $this->billingPlans;
    }

    /**
     * Reserved: TBD.
     *
     * @param BillingPlan[] $billingPlans
     *
     * @return self
     */
    public function setBillingPlans(?array $billingPlans): self
    {
        $this->billingPlans = $billingPlans;

        return $this;
    }
}
