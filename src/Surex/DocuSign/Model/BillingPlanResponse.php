<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPlanResponse
{
    /**
     * @var BillingPlan
     */
    protected $billingPlan;
    /**
     * @var BillingPlan[]
     */
    protected $successorPlans;

    /**
     * @return BillingPlan
     */
    public function getBillingPlan()
    {
        return $this->billingPlan;
    }

    /**
     * @param BillingPlan $billingPlan
     *
     * @return self
     */
    public function setBillingPlan(BillingPlan $billingPlan = null)
    {
        $this->billingPlan = $billingPlan;

        return $this;
    }

    /**
     * @return BillingPlan[]
     */
    public function getSuccessorPlans()
    {
        return $this->successorPlans;
    }

    /**
     * @param BillingPlan[] $successorPlans
     *
     * @return self
     */
    public function setSuccessorPlans(array $successorPlans = null)
    {
        $this->successorPlans = $successorPlans;

        return $this;
    }
}
