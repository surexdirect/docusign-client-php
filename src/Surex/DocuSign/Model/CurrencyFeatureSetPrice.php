<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CurrencyFeatureSetPrice
{
    /**
     * Specifies the alternate ISO currency code for the account.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Specifies the alternate currency symbol for the account.
     *
     * @var string
     */
    protected $currencySymbol;
    /**
     * An incremental envelope cost for plans with envelope overages (when `isEnabled` is set to **true**.).
     *
     * @var string
     */
    protected $envelopeFee;
    /**
     * Specifies a one-time fee associated with the plan (when `isEnabled` is set to **true**.).
     *
     * @var string
     */
    protected $fixedFee;
    /**
     * Specifies an incremental seat cost for seat-based plans (when `isEnabled` is set to **true**.).
     *
     * @var string
     */
    protected $seatFee;

    /**
     * Specifies the alternate ISO currency code for the account.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the alternate ISO currency code for the account.
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
     * Specifies the alternate currency symbol for the account.
     *
     * @return string
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * Specifies the alternate currency symbol for the account.
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
     * An incremental envelope cost for plans with envelope overages (when `isEnabled` is set to **true**.).
     *
     * @return string
     */
    public function getEnvelopeFee(): ?string
    {
        return $this->envelopeFee;
    }

    /**
     * An incremental envelope cost for plans with envelope overages (when `isEnabled` is set to **true**.).
     *
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
     * Specifies a one-time fee associated with the plan (when `isEnabled` is set to **true**.).
     *
     * @return string
     */
    public function getFixedFee(): ?string
    {
        return $this->fixedFee;
    }

    /**
     * Specifies a one-time fee associated with the plan (when `isEnabled` is set to **true**.).
     *
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
     * Specifies an incremental seat cost for seat-based plans (when `isEnabled` is set to **true**.).
     *
     * @return string
     */
    public function getSeatFee(): ?string
    {
        return $this->seatFee;
    }

    /**
     * Specifies an incremental seat cost for seat-based plans (when `isEnabled` is set to **true**.).
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
