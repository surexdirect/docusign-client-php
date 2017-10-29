<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PlanInformation
{
    /**
     * @var AddOn[]
     */
    protected $addOns;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $freeTrialDaysOverride;
    /**
     * @var FeatureSet[]
     */
    protected $planFeatureSets;
    /**
     * @var string
     */
    protected $planId;
    /**
     * @var RecipientDomain[]
     */
    protected $recipientDomains;

    /**
     * @return AddOn[]
     */
    public function getAddOns()
    {
        return $this->addOns;
    }

    /**
     * @param AddOn[] $addOns
     *
     * @return self
     */
    public function setAddOns(array $addOns = null)
    {
        $this->addOns = $addOns;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode = null)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreeTrialDaysOverride()
    {
        return $this->freeTrialDaysOverride;
    }

    /**
     * @param string $freeTrialDaysOverride
     *
     * @return self
     */
    public function setFreeTrialDaysOverride($freeTrialDaysOverride = null)
    {
        $this->freeTrialDaysOverride = $freeTrialDaysOverride;

        return $this;
    }

    /**
     * @return FeatureSet[]
     */
    public function getPlanFeatureSets()
    {
        return $this->planFeatureSets;
    }

    /**
     * @param FeatureSet[] $planFeatureSets
     *
     * @return self
     */
    public function setPlanFeatureSets(array $planFeatureSets = null)
    {
        $this->planFeatureSets = $planFeatureSets;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId($planId = null)
    {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @return RecipientDomain[]
     */
    public function getRecipientDomains()
    {
        return $this->recipientDomains;
    }

    /**
     * @param RecipientDomain[] $recipientDomains
     *
     * @return self
     */
    public function setRecipientDomains(array $recipientDomains = null)
    {
        $this->recipientDomains = $recipientDomains;

        return $this;
    }
}
