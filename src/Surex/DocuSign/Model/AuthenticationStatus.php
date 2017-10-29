<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getAccessCodeResult()
    {
        return $this->accessCodeResult;
    }

    /**
     * @param EventResult $accessCodeResult
     *
     * @return self
     */
    public function setAccessCodeResult(EventResult $accessCodeResult = null)
    {
        $this->accessCodeResult = $accessCodeResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getAgeVerifyResult()
    {
        return $this->ageVerifyResult;
    }

    /**
     * @param EventResult $ageVerifyResult
     *
     * @return self
     */
    public function setAgeVerifyResult(EventResult $ageVerifyResult = null)
    {
        $this->ageVerifyResult = $ageVerifyResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getAnySocialIDResult()
    {
        return $this->anySocialIDResult;
    }

    /**
     * @param EventResult $anySocialIDResult
     *
     * @return self
     */
    public function setAnySocialIDResult(EventResult $anySocialIDResult = null)
    {
        $this->anySocialIDResult = $anySocialIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getFacebookResult()
    {
        return $this->facebookResult;
    }

    /**
     * @param EventResult $facebookResult
     *
     * @return self
     */
    public function setFacebookResult(EventResult $facebookResult = null)
    {
        $this->facebookResult = $facebookResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getGoogleResult()
    {
        return $this->googleResult;
    }

    /**
     * @param EventResult $googleResult
     *
     * @return self
     */
    public function setGoogleResult(EventResult $googleResult = null)
    {
        $this->googleResult = $googleResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getIdLookupResult()
    {
        return $this->idLookupResult;
    }

    /**
     * @param EventResult $idLookupResult
     *
     * @return self
     */
    public function setIdLookupResult(EventResult $idLookupResult = null)
    {
        $this->idLookupResult = $idLookupResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getIdQuestionsResult()
    {
        return $this->idQuestionsResult;
    }

    /**
     * @param EventResult $idQuestionsResult
     *
     * @return self
     */
    public function setIdQuestionsResult(EventResult $idQuestionsResult = null)
    {
        $this->idQuestionsResult = $idQuestionsResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getLinkedinResult()
    {
        return $this->linkedinResult;
    }

    /**
     * @param EventResult $linkedinResult
     *
     * @return self
     */
    public function setLinkedinResult(EventResult $linkedinResult = null)
    {
        $this->linkedinResult = $linkedinResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getLiveIDResult()
    {
        return $this->liveIDResult;
    }

    /**
     * @param EventResult $liveIDResult
     *
     * @return self
     */
    public function setLiveIDResult(EventResult $liveIDResult = null)
    {
        $this->liveIDResult = $liveIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getOfacResult()
    {
        return $this->ofacResult;
    }

    /**
     * @param EventResult $ofacResult
     *
     * @return self
     */
    public function setOfacResult(EventResult $ofacResult = null)
    {
        $this->ofacResult = $ofacResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getOpenIDResult()
    {
        return $this->openIDResult;
    }

    /**
     * @param EventResult $openIDResult
     *
     * @return self
     */
    public function setOpenIDResult(EventResult $openIDResult = null)
    {
        $this->openIDResult = $openIDResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getPhoneAuthResult()
    {
        return $this->phoneAuthResult;
    }

    /**
     * @param EventResult $phoneAuthResult
     *
     * @return self
     */
    public function setPhoneAuthResult(EventResult $phoneAuthResult = null)
    {
        $this->phoneAuthResult = $phoneAuthResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSalesforceResult()
    {
        return $this->salesforceResult;
    }

    /**
     * @param EventResult $salesforceResult
     *
     * @return self
     */
    public function setSalesforceResult(EventResult $salesforceResult = null)
    {
        $this->salesforceResult = $salesforceResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSignatureProviderResult()
    {
        return $this->signatureProviderResult;
    }

    /**
     * @param EventResult $signatureProviderResult
     *
     * @return self
     */
    public function setSignatureProviderResult(EventResult $signatureProviderResult = null)
    {
        $this->signatureProviderResult = $signatureProviderResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSmsAuthResult()
    {
        return $this->smsAuthResult;
    }

    /**
     * @param EventResult $smsAuthResult
     *
     * @return self
     */
    public function setSmsAuthResult(EventResult $smsAuthResult = null)
    {
        $this->smsAuthResult = $smsAuthResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getSTANPinResult()
    {
        return $this->sTANPinResult;
    }

    /**
     * @param EventResult $sTANPinResult
     *
     * @return self
     */
    public function setSTANPinResult(EventResult $sTANPinResult = null)
    {
        $this->sTANPinResult = $sTANPinResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getTwitterResult()
    {
        return $this->twitterResult;
    }

    /**
     * @param EventResult $twitterResult
     *
     * @return self
     */
    public function setTwitterResult(EventResult $twitterResult = null)
    {
        $this->twitterResult = $twitterResult;

        return $this;
    }

    /**
     * @return EventResult
     */
    public function getYahooResult()
    {
        return $this->yahooResult;
    }

    /**
     * @param EventResult $yahooResult
     *
     * @return self
     */
    public function setYahooResult(EventResult $yahooResult = null)
    {
        $this->yahooResult = $yahooResult;

        return $this;
    }
}
