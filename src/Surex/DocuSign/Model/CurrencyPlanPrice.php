<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CurrencyPlanPrice
{
    /**
     * Specifies the ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Specifies the currency symbol for the account.
     *
     * @var string
     */
    protected $currencySymbol;
    /**
     * @var string
     */
    protected $perSeatPrice;
    /**
     * @var CreditCardTypes
     */
    protected $supportedCardTypes;
    /**
     * The support incident fee charged for each support incident.
     *
     * @var string
     */
    protected $supportIncidentFee;
    /**
     * The support plan fee charged for this plan.
     *
     * @var string
     */
    protected $supportPlanFee;

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
     * Specifies the currency symbol for the account.
     *
     * @return string
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * Specifies the currency symbol for the account.
     *
     * @param string $currencySymbol
     *
     * @return self
     */
    public function setCurrencySymbol(?string $currencySymbol): self
    {
        $this->currencySymbol = $currencySymbol;

        return $this;
    }

    /**
     * @return string
     */
    public function getPerSeatPrice(): ?string
    {
        return $this->perSeatPrice;
    }

    /**
     * @param string $perSeatPrice
     *
     * @return self
     */
    public function setPerSeatPrice(?string $perSeatPrice): self
    {
        $this->perSeatPrice = $perSeatPrice;

        return $this;
    }

    /**
     * @return CreditCardTypes
     */
    public function getSupportedCardTypes(): ?CreditCardTypes
    {
        return $this->supportedCardTypes;
    }

    /**
     * @param CreditCardTypes $supportedCardTypes
     *
     * @return self
     */
    public function setSupportedCardTypes(?CreditCardTypes $supportedCardTypes): self
    {
        $this->supportedCardTypes = $supportedCardTypes;

        return $this;
    }

    /**
     * The support incident fee charged for each support incident.
     *
     * @return string
     */
    public function getSupportIncidentFee(): ?string
    {
        return $this->supportIncidentFee;
    }

    /**
     * The support incident fee charged for each support incident.
     *
     * @param string $supportIncidentFee
     *
     * @return self
     */
    public function setSupportIncidentFee(?string $supportIncidentFee): self
    {
        $this->supportIncidentFee = $supportIncidentFee;

        return $this;
    }

    /**
     * The support plan fee charged for this plan.
     *
     * @return string
     */
    public function getSupportPlanFee(): ?string
    {
        return $this->supportPlanFee;
    }

    /**
     * The support plan fee charged for this plan.
     *
     * @param string $supportPlanFee
     *
     * @return self
     */
    public function setSupportPlanFee(?string $supportPlanFee): self
    {
        $this->supportPlanFee = $supportPlanFee;

        return $this;
    }
}
