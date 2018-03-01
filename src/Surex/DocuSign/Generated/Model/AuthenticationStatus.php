<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AuthenticationStatus
{
    /**
     * @var EventResult
     */
    protected $accessCodeResult;
    /**
     * @var EventResult
     */
    protected $ageVerifyResult;
    /**
     * @var EventResult
     */
    protected $anySocialIDResult;
    /**
     * @var EventResult
     */
    protected $facebookResult;
    /**
     * @var EventResult
     */
    protected $googleResult;
    /**
     * @var EventResult
     */
    protected $idLookupResult;
    /**
     * @var EventResult
     */
    protected $idQuestionsResult;
    /**
     * @var EventResult
     */
    protected $linkedinResult;
    /**
     * @var EventResult
     */
    protected $liveIDResult;
    /**
     * @var EventResult
     */
    protected $ofacResult;
    /**
     * @var EventResult
     */
    protected $openIDResult;
    /**
     * @var EventResult
     */
    protected $phoneAuthResult;
    /**
     * @var EventResult
     */
    protected $salesforceResult;
    /**
     * @var EventResult
     */
    protected $signatureProviderResult;
    /**
     * @var EventResult
     */
    protected $smsAuthResult;
    /**
     * @var EventResult
     */
    protected $sTANPinResult;
    /**
     * @var EventResult
     */
    protected $twitterResult;
    /**
     * @var EventResult
     */
    protected $yahooResult;

    /**
     * @return EventResult
     */
    public function getAccessCodeResult(): ?EventResult
    {
        return $this->accessCodeResult;
    }

    /**
     * @param EventResult $accessCodeResult
     *
     * @return self
     */
    public function setAccessCodeResult(?EventResult $accessCodeResult): self
    {
        $this->accessCodeResult = $accessCodeResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getAgeVerifyResult(): ?EventResult
    {
        return $this->ageVerifyResult;
    }

    /**
     * @param EventResult $ageVerifyResult
     *
     * @return self
     */
    public function setAgeVerifyResult(?EventResult $ageVerifyResult): self
    {
        $this->ageVerifyResult = $ageVerifyResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getAnySocialIDResult(): ?EventResult
    {
        return $this->anySocialIDResult;
    }

    /**
     * @param EventResult $anySocialIDResult
     *
     * @return self
     */
    public function setAnySocialIDResult(?EventResult $anySocialIDResult): self
    {
        $this->anySocialIDResult = $anySocialIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getFacebookResult(): ?EventResult
    {
        return $this->facebookResult;
    }

    /**
     * @param EventResult $facebookResult
     *
     * @return self
     */
    public function setFacebookResult(?EventResult $facebookResult): self
    {
        $this->facebookResult = $facebookResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getGoogleResult(): ?EventResult
    {
        return $this->googleResult;
    }

    /**
     * @param EventResult $googleResult
     *
     * @return self
     */
    public function setGoogleResult(?EventResult $googleResult): self
    {
        $this->googleResult = $googleResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getIdLookupResult(): ?EventResult
    {
        return $this->idLookupResult;
    }

    /**
     * @param EventResult $idLookupResult
     *
     * @return self
     */
    public function setIdLookupResult(?EventResult $idLookupResult): self
    {
        $this->idLookupResult = $idLookupResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getIdQuestionsResult(): ?EventResult
    {
        return $this->idQuestionsResult;
    }

    /**
     * @param EventResult $idQuestionsResult
     *
     * @return self
     */
    public function setIdQuestionsResult(?EventResult $idQuestionsResult): self
    {
        $this->idQuestionsResult = $idQuestionsResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getLinkedinResult(): ?EventResult
    {
        return $this->linkedinResult;
    }

    /**
     * @param EventResult $linkedinResult
     *
     * @return self
     */
    public function setLinkedinResult(?EventResult $linkedinResult): self
    {
        $this->linkedinResult = $linkedinResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getLiveIDResult(): ?EventResult
    {
        return $this->liveIDResult;
    }

    /**
     * @param EventResult $liveIDResult
     *
     * @return self
     */
    public function setLiveIDResult(?EventResult $liveIDResult): self
    {
        $this->liveIDResult = $liveIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getOfacResult(): ?EventResult
    {
        return $this->ofacResult;
    }

    /**
     * @param EventResult $ofacResult
     *
     * @return self
     */
    public function setOfacResult(?EventResult $ofacResult): self
    {
        $this->ofacResult = $ofacResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getOpenIDResult(): ?EventResult
    {
        return $this->openIDResult;
    }

    /**
     * @param EventResult $openIDResult
     *
     * @return self
     */
    public function setOpenIDResult(?EventResult $openIDResult): self
    {
        $this->openIDResult = $openIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getPhoneAuthResult(): ?EventResult
    {
        return $this->phoneAuthResult;
    }

    /**
     * @param EventResult $phoneAuthResult
     *
     * @return self
     */
    public function setPhoneAuthResult(?EventResult $phoneAuthResult): self
    {
        $this->phoneAuthResult = $phoneAuthResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSalesforceResult(): ?EventResult
    {
        return $this->salesforceResult;
    }

    /**
     * @param EventResult $salesforceResult
     *
     * @return self
     */
    public function setSalesforceResult(?EventResult $salesforceResult): self
    {
        $this->salesforceResult = $salesforceResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSignatureProviderResult(): ?EventResult
    {
        return $this->signatureProviderResult;
    }

    /**
     * @param EventResult $signatureProviderResult
     *
     * @return self
     */
    public function setSignatureProviderResult(?EventResult $signatureProviderResult): self
    {
        $this->signatureProviderResult = $signatureProviderResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSmsAuthResult(): ?EventResult
    {
        return $this->smsAuthResult;
    }

    /**
     * @param EventResult $smsAuthResult
     *
     * @return self
     */
    public function setSmsAuthResult(?EventResult $smsAuthResult): self
    {
        $this->smsAuthResult = $smsAuthResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSTANPinResult(): ?EventResult
    {
        return $this->sTANPinResult;
    }

    /**
     * @param EventResult $sTANPinResult
     *
     * @return self
     */
    public function setSTANPinResult(?EventResult $sTANPinResult): self
    {
        $this->sTANPinResult = $sTANPinResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getTwitterResult(): ?EventResult
    {
        return $this->twitterResult;
    }

    /**
     * @param EventResult $twitterResult
     *
     * @return self
     */
    public function setTwitterResult(?EventResult $twitterResult): self
    {
        $this->twitterResult = $twitterResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getYahooResult(): ?EventResult
    {
        return $this->yahooResult;
    }

    /**
     * @param EventResult $yahooResult
     *
     * @return self
     */
    public function setYahooResult(?EventResult $yahooResult): self
    {
        $this->yahooResult = $yahooResult;

        return $this;
    }
}
