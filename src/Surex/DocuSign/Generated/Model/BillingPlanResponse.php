<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BillingPlanResponse
{
    /**
     * Contains information about a billing plan.
     *
     * @var BillingPlan
     */
    protected $billingPlan;
    /**
     * @var BillingPlan[]
     */
    protected $successorPlans;

    /**
     * Contains information about a billing plan.
     *
     * @return BillingPlan
     */
    public function getBillingPlan(): ?BillingPlan
    {
        return $this->billingPlan;
    }

    /**
     * Contains information about a billing plan.
     *
     * @param BillingPlan $billingPlan
     *
     * @return self
     */
    public function setBillingPlan(?BillingPlan $billingPlan): self
    {
        $this->billingPlan = $billingPlan;

        return $this;
    }

    /**
     * @return BillingPlan[]
     */
    public function getSuccessorPlans(): ?array
    {
        return $this->successorPlans;
    }

    /**
     * @param BillingPlan[] $successorPlans
     *
     * @return self
     */
    public function setSuccessorPlans(?array $successorPlans): self
    {
        $this->successorPlans = $successorPlans;

        return $this;
    }
}
