<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FeatureSet
{
    /**
     * A complex type that contains alternate currency values that are configured for this plan feature set.
     *
     * @var CurrencyFeatureSetPrice[]
     */
    protected $currencyFeatureSetPrices;
    /**
     * @var string
     */
    protected $envelopeFee;
    /**
     * A unique ID for the feature set.
     *
     * @var string
     */
    protected $featureSetId;
    /**
     * @var string
     */
    protected $fixedFee;
    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string
     */
    protected $isActive;
    /**
     * Specifies whether the feature set is actively enabled as part of the plan.
     *
     * @var string
     */
    protected $isEnabled;
    /**
     * @var string
     */
    protected $name;
    /**
     * An incremental seat cost for seat-based plans. Only valid when isEnabled for the feature set is set to true.
     *
     * @var string
     */
    protected $seatFee;

    /**
     * A complex type that contains alternate currency values that are configured for this plan feature set.
     *
     * @return CurrencyFeatureSetPrice[]
     */
    public function getCurrencyFeatureSetPrices(): ?array
    {
        return $this->currencyFeatureSetPrices;
    }

    /**
     * A complex type that contains alternate currency values that are configured for this plan feature set.
     *
     * @param CurrencyFeatureSetPrice[] $currencyFeatureSetPrices
     *
     * @return self
     */
    public function setCurrencyFeatureSetPrices(?array $currencyFeatureSetPrices): self
    {
        $this->currencyFeatureSetPrices = $currencyFeatureSetPrices;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeFee(): ?string
    {
        return $this->envelopeFee;
    }

    /**
     * @param string $envelopeFee
     *
     * @return self
     */
    public function setEnvelopeFee(?string $envelopeFee): self
    {
        $this->envelopeFee = $envelopeFee;

        return $this;
    }

    /**
     * A unique ID for the feature set.
     *
     * @return string
     */
    public function getFeatureSetId(): ?string
    {
        return $this->featureSetId;
    }

    /**
     * A unique ID for the feature set.
     *
     * @param string $featureSetId
     *
     * @return self
     */
    public function setFeatureSetId(?string $featureSetId): self
    {
        $this->featureSetId = $featureSetId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFixedFee(): ?string
    {
        return $this->fixedFee;
    }

    /**
     * @param string $fixedFee
     *
     * @return self
     */
    public function setFixedFee(?string $fixedFee): self
    {
        $this->fixedFee = $fixedFee;

        return $this;
    }

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @return string
     */
    public function getIs21CFRPart11(): ?string
    {
        return $this->is21CFRPart11;
    }

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11(?string $is21CFRPart11): self
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     *
     * @return self
     */
    public function setIsActive(?string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Specifies whether the feature set is actively enabled as part of the plan.
     *
     * @return string
     */
    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    /**
     * Specifies whether the feature set is actively enabled as part of the plan.
     *
     * @param string $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * An incremental seat cost for seat-based plans. Only valid when isEnabled for the feature set is set to true.
     *
     * @return string
     */
    public function getSeatFee(): ?string
    {
        return $this->seatFee;
    }

    /**
     * An incremental seat cost for seat-based plans. Only valid when isEnabled for the feature set is set to true.
     *
     * @param string $seatFee
     *
     * @return self
     */
    public function setSeatFee(?string $seatFee): self
    {
        $this->seatFee = $seatFee;

        return $this;
    }
}
