<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeConsumerDisclosures
{
    /**
     * @var string
     */
    protected $accountEsignId;
    /**
     * @var string
     */
    protected $allowCDWithdraw;
    /**
     * @var SettingsMetadata
     */
    protected $allowCDWithdrawMetadata;
    /**
     * @var string
     */
    protected $changeEmail;
    /**
     * @var string
     */
    protected $changeEmailOther;
    /**
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $companyPhone;
    /**
     * @var string
     */
    protected $copyCostPerPage;
    /**
     * @var string
     */
    protected $copyFeeCollectionMethod;
    /**
     * @var string
     */
    protected $copyRequestEmail;
    /**
     * @var string
     */
    protected $custom;
    /**
     * @var string
     */
    protected $enableEsign;
    /**
     * @var string
     */
    protected $esignAgreement;
    /**
     * @var string
     */
    protected $esignText;
    /**
     * @var string
     */
    protected $languageCode;
    /**
     * @var string
     */
    protected $mustAgreeToEsign;
    /**
     * @var string
     */
    protected $pdfId;
    /**
     * @var string
     */
    protected $useBrand;
    /**
     * @var string
     */
    protected $useConsumerDisclosureWithinAccount;
    /**
     * @var SettingsMetadata
     */
    protected $useConsumerDisclosureWithinAccountMetadata;
    /**
     * @var string
     */
    protected $withdrawAddressLine1;
    /**
     * @var string
     */
    protected $withdrawAddressLine2;
    /**
     * @var string
     */
    protected $withdrawByEmail;
    /**
     * @var string
     */
    protected $withdrawByMail;
    /**
     * @var string
     */
    protected $withdrawByPhone;
    /**
     * @var string
     */
    protected $withdrawCity;
    /**
     * @var string
     */
    protected $withdrawConsequences;
    /**
     * @var string
     */
    protected $withdrawEmail;
    /**
     * @var string
     */
    protected $withdrawOther;
    /**
     * @var string
     */
    protected $withdrawPhone;
    /**
     * @var string
     */
    protected $withdrawPostalCode;
    /**
     * @var string
     */
    protected $withdrawState;

    /**
     * @return string
     */
    public function getAccountEsignId()
    {
        return $this->accountEsignId;
    }

    /**
     * @param string $accountEsignId
     *
     * @return self
     */
    public function setAccountEsignId($accountEsignId = null)
    {
        $this->accountEsignId = $accountEsignId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowCDWithdraw()
    {
        return $this->allowCDWithdraw;
    }

    /**
     * @param string $allowCDWithdraw
     *
     * @return self
     */
    public function setAllowCDWithdraw($allowCDWithdraw = null)
    {
        $this->allowCDWithdraw = $allowCDWithdraw;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowCDWithdrawMetadata()
    {
        return $this->allowCDWithdrawMetadata;
    }

    /**
     * @param SettingsMetadata $allowCDWithdrawMetadata
     *
     * @return self
     */
    public function setAllowCDWithdrawMetadata(SettingsMetadata $allowCDWithdrawMetadata = null)
    {
        $this->allowCDWithdrawMetadata = $allowCDWithdrawMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeEmail()
    {
        return $this->changeEmail;
    }

    /**
     * @param string $changeEmail
     *
     * @return self
     */
    public function setChangeEmail($changeEmail = null)
    {
        $this->changeEmail = $changeEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeEmailOther()
    {
        return $this->changeEmailOther;
    }

    /**
     * @param string $changeEmailOther
     *
     * @return self
     */
    public function setChangeEmailOther($changeEmailOther = null)
    {
        $this->changeEmailOther = $changeEmailOther;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyPhone()
    {
        return $this->companyPhone;
    }

    /**
     * @param string $companyPhone
     *
     * @return self
     */
    public function setCompanyPhone($companyPhone = null)
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyCostPerPage()
    {
        return $this->copyCostPerPage;
    }

    /**
     * @param string $copyCostPerPage
     *
     * @return self
     */
    public function setCopyCostPerPage($copyCostPerPage = null)
    {
        $this->copyCostPerPage = $copyCostPerPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyFeeCollectionMethod()
    {
        return $this->copyFeeCollectionMethod;
    }

    /**
     * @param string $copyFeeCollectionMethod
     *
     * @return self
     */
    public function setCopyFeeCollectionMethod($copyFeeCollectionMethod = null)
    {
        $this->copyFeeCollectionMethod = $copyFeeCollectionMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyRequestEmail()
    {
        return $this->copyRequestEmail;
    }

    /**
     * @param string $copyRequestEmail
     *
     * @return self
     */
    public function setCopyRequestEmail($copyRequestEmail = null)
    {
        $this->copyRequestEmail = $copyRequestEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param string $custom
     *
     * @return self
     */
    public function setCustom($custom = null)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableEsign()
    {
        return $this->enableEsign;
    }

    /**
     * @param string $enableEsign
     *
     * @return self
     */
    public function setEnableEsign($enableEsign = null)
    {
        $this->enableEsign = $enableEsign;

        return $this;
    }

    /**
     * @return string
     */
    public function getEsignAgreement()
    {
        return $this->esignAgreement;
    }

    /**
     * @param string $esignAgreement
     *
     * @return self
     */
    public function setEsignAgreement($esignAgreement = null)
    {
        $this->esignAgreement = $esignAgreement;

        return $this;
    }

    /**
     * @return string
     */
    public function getEsignText()
    {
        return $this->esignText;
    }

    /**
     * @param string $esignText
     *
     * @return self
     */
    public function setEsignText($esignText = null)
    {
        $this->esignText = $esignText;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode($languageCode = null)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMustAgreeToEsign()
    {
        return $this->mustAgreeToEsign;
    }

    /**
     * @param string $mustAgreeToEsign
     *
     * @return self
     */
    public function setMustAgreeToEsign($mustAgreeToEsign = null)
    {
        $this->mustAgreeToEsign = $mustAgreeToEsign;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfId()
    {
        return $this->pdfId;
    }

    /**
     * @param string $pdfId
     *
     * @return self
     */
    public function setPdfId($pdfId = null)
    {
        $this->pdfId = $pdfId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseBrand()
    {
        return $this->useBrand;
    }

    /**
     * @param string $useBrand
     *
     * @return self
     */
    public function setUseBrand($useBrand = null)
    {
        $this->useBrand = $useBrand;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseConsumerDisclosureWithinAccount()
    {
        return $this->useConsumerDisclosureWithinAccount;
    }

    /**
     * @param string $useConsumerDisclosureWithinAccount
     *
     * @return self
     */
    public function setUseConsumerDisclosureWithinAccount($useConsumerDisclosureWithinAccount = null)
    {
        $this->useConsumerDisclosureWithinAccount = $useConsumerDisclosureWithinAccount;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseConsumerDisclosureWithinAccountMetadata()
    {
        return $this->useConsumerDisclosureWithinAccountMetadata;
    }

    /**
     * @param SettingsMetadata $useConsumerDisclosureWithinAccountMetadata
     *
     * @return self
     */
    public function setUseConsumerDisclosureWithinAccountMetadata(SettingsMetadata $useConsumerDisclosureWithinAccountMetadata = null)
    {
        $this->useConsumerDisclosureWithinAccountMetadata = $useConsumerDisclosureWithinAccountMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawAddressLine1()
    {
        return $this->withdrawAddressLine1;
    }

    /**
     * @param string $withdrawAddressLine1
     *
     * @return self
     */
    public function setWithdrawAddressLine1($withdrawAddressLine1 = null)
    {
        $this->withdrawAddressLine1 = $withdrawAddressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawAddressLine2()
    {
        return $this->withdrawAddressLine2;
    }

    /**
     * @param string $withdrawAddressLine2
     *
     * @return self
     */
    public function setWithdrawAddressLine2($withdrawAddressLine2 = null)
    {
        $this->withdrawAddressLine2 = $withdrawAddressLine2;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawByEmail()
    {
        return $this->withdrawByEmail;
    }

    /**
     * @param string $withdrawByEmail
     *
     * @return self
     */
    public function setWithdrawByEmail($withdrawByEmail = null)
    {
        $this->withdrawByEmail = $withdrawByEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawByMail()
    {
        return $this->withdrawByMail;
    }

    /**
     * @param string $withdrawByMail
     *
     * @return self
     */
    public function setWithdrawByMail($withdrawByMail = null)
    {
        $this->withdrawByMail = $withdrawByMail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawByPhone()
    {
        return $this->withdrawByPhone;
    }

    /**
     * @param string $withdrawByPhone
     *
     * @return self
     */
    public function setWithdrawByPhone($withdrawByPhone = null)
    {
        $this->withdrawByPhone = $withdrawByPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawCity()
    {
        return $this->withdrawCity;
    }

    /**
     * @param string $withdrawCity
     *
     * @return self
     */
    public function setWithdrawCity($withdrawCity = null)
    {
        $this->withdrawCity = $withdrawCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawConsequences()
    {
        return $this->withdrawConsequences;
    }

    /**
     * @param string $withdrawConsequences
     *
     * @return self
     */
    public function setWithdrawConsequences($withdrawConsequences = null)
    {
        $this->withdrawConsequences = $withdrawConsequences;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawEmail()
    {
        return $this->withdrawEmail;
    }

    /**
     * @param string $withdrawEmail
     *
     * @return self
     */
    public function setWithdrawEmail($withdrawEmail = null)
    {
        $this->withdrawEmail = $withdrawEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawOther()
    {
        return $this->withdrawOther;
    }

    /**
     * @param string $withdrawOther
     *
     * @return self
     */
    public function setWithdrawOther($withdrawOther = null)
    {
        $this->withdrawOther = $withdrawOther;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawPhone()
    {
        return $this->withdrawPhone;
    }

    /**
     * @param string $withdrawPhone
     *
     * @return self
     */
    public function setWithdrawPhone($withdrawPhone = null)
    {
        $this->withdrawPhone = $withdrawPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawPostalCode()
    {
        return $this->withdrawPostalCode;
    }

    /**
     * @param string $withdrawPostalCode
     *
     * @return self
     */
    public function setWithdrawPostalCode($withdrawPostalCode = null)
    {
        $this->withdrawPostalCode = $withdrawPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawState()
    {
        return $this->withdrawState;
    }

    /**
     * @param string $withdrawState
     *
     * @return self
     */
    public function setWithdrawState($withdrawState = null)
    {
        $this->withdrawState = $withdrawState;

        return $this;
    }
}
