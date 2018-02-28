<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PlanInformation
{
    /**
     * Reserved:.
     *
     * @var AddOn[]
     */
    protected $addOns;
    /**
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Reserved for DocuSign use only.
     *
     * @var string
     */
    protected $freeTrialDaysOverride;
    /**
     * A complex type that sets the feature sets for the account.
     *
     * @var FeatureSet[]
     */
    protected $planFeatureSets;
    /**
     * The DocuSign Plan ID for the account.
     *
     * @var string
     */
    protected $planId;
    /**
     * @var RecipientDomain[]
     */
    protected $recipientDomains;

    /**
     * Reserved:.
     *
     * @return AddOn[]
     */
    public function getAddOns(): ?array
    {
        return $this->addOns;
    }

    /**
     * Reserved:.
     *
     * @param AddOn[] $addOns
     *
     * @return self
     */
    public function setAddOns(?array $addOns): self
    {
        $this->addOns = $addOns;

        return $this;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the ISO currency code for the account.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @return string
     */
    public function getFreeTrialDaysOverride(): ?string
    {
        return $this->freeTrialDaysOverride;
    }

    /**
     * Reserved for DocuSign use only.
     *
     * @param string $freeTrialDaysOverride
     *
     * @return self
     */
    public function setFreeTrialDaysOverride(?string $freeTrialDaysOverride): self
    {
        $this->freeTrialDaysOverride = $freeTrialDaysOverride;

        return $this;
    }

    /**
     * A complex type that sets the feature sets for the account.
     *
     * @return FeatureSet[]
     */
    public function getPlanFeatureSets(): ?array
    {
        return $this->planFeatureSets;
    }

    /**
     * A complex type that sets the feature sets for the account.
     *
     * @param FeatureSet[] $planFeatureSets
     *
     * @return self
     */
    public function setPlanFeatureSets(?array $planFeatureSets): self
    {
        $this->planFeatureSets = $planFeatureSets;

        return $this;
    }

    /**
     * The DocuSign Plan ID for the account.
     *
     * @return string
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    /**
     * The DocuSign Plan ID for the account.
     *
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @return RecipientDomain[]
     */
    public function getRecipientDomains(): ?array
    {
        return $this->recipientDomains;
    }

    /**
     * @param RecipientDomain[] $recipientDomains
     *
     * @return self
     */
    public function setRecipientDomains(?array $recipientDomains): self
    {
        $this->recipientDomains = $recipientDomains;

        return $this;
    }
}
