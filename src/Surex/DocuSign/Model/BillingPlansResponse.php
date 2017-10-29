<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlansResponse
{
    /**
     * @var BillingPlan[]
     */
    protected $billingPlans;

    /**
     * @return BillingPlan[]
     */
    public function getBillingPlans()
    {
        return $this->billingPlans;
    }

    /**
     * @param BillingPlan[] $billingPlans
     *
     * @return self
     */
    public function setBillingPlans(array $billingPlans = null)
    {
        $this->billingPlans = $billingPlans;

        return $this;
    }
}
