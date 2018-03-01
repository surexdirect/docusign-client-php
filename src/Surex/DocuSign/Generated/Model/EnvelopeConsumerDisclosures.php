<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeConsumerDisclosures
{
    /**
     * A GUID identifying the account associated with the consumer disclosure.
     *
     * @var string
     */
    protected $accountEsignId;
    /**
     * Indicates whether the customer can withdraw their acceptance of the consumer disclosure.
     *
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
     * The name of the company associated with the consumer disclosure.
     *
     * @var string
     */
    protected $companyName;
    /**
     * The phone number of the company associated with the consumer disclosure.
     *
     * @var string
     */
    protected $companyPhone;
    /**
     * @var string
     */
    protected $copyCostPerPage;
    /**
     * Specifies the fee collection method for cases in which the customer requires paper copies of the document.

     Maximum Length: 255 characters
     *
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
     * The Electronic Record and Signature Disclosure text. The disclosure text includes the html formatting.
     *
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
     * Contains the first address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $withdrawAddressLine1;
    /**
     * Contains the second address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $withdrawAddressLine2;
    /**
     * Indicates whether the customer can withdraw consent by email.
     *
     * @var string
     */
    protected $withdrawByEmail;
    /**
     * Indicates whether the customer can withdraw consent by postal mail.
     *
     * @var string
     */
    protected $withdrawByMail;
    /**
     * Indicates whether the customer can withdraw consent by phone.
     *
     * @var string
     */
    protected $withdrawByPhone;
    /**
     * Contains the city of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 50 characters.
     *
     * @var string
     */
    protected $withdrawCity;
    /**
     * Indicates the consequences of withdrawing consent.
     *
     * @var string
     */
    protected $withdrawConsequences;
    /**
     * Contains the email address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $withdrawEmail;
    /**
     * Indicates other information need to withdraw consent.

     Maximum length: 255 characters.
     *
     * @var string
     */
    protected $withdrawOther;
    /**
     * Contains the phone number which a customer can call to register consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @var string
     */
    protected $withdrawPhone;
    /**
     * Contains the postal code of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @var string
     */
    protected $withdrawPostalCode;
    /**
     * Contains the state of the postal address to which a customer can send a consent withdrawal notification.
     *
     * @var string
     */
    protected $withdrawState;

    /**
     * A GUID identifying the account associated with the consumer disclosure.
     *
     * @return string
     */
    public function getAccountEsignId(): ?string
    {
        return $this->accountEsignId;
    }

    /**
     * A GUID identifying the account associated with the consumer disclosure.
     *
     * @param string $accountEsignId
     *
     * @return self
     */
    public function setAccountEsignId(?string $accountEsignId): self
    {
        $this->accountEsignId = $accountEsignId;

        return $this;
    }

    /**
     * Indicates whether the customer can withdraw their acceptance of the consumer disclosure.
     *
     * @return string
     */
    public function getAllowCDWithdraw(): ?string
    {
        return $this->allowCDWithdraw;
    }

    /**
     * Indicates whether the customer can withdraw their acceptance of the consumer disclosure.
     *
     * @param string $allowCDWithdraw
     *
     * @return self
     */
    public function setAllowCDWithdraw(?string $allowCDWithdraw): self
    {
        $this->allowCDWithdraw = $allowCDWithdraw;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowCDWithdrawMetadata(): ?SettingsMetadata
    {
        return $this->allowCDWithdrawMetadata;
    }

    /**
     * @param SettingsMetadata $allowCDWithdrawMetadata
     *
     * @return self
     */
    public function setAllowCDWithdrawMetadata(?SettingsMetadata $allowCDWithdrawMetadata): self
    {
        $this->allowCDWithdrawMetadata = $allowCDWithdrawMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeEmail(): ?string
    {
        return $this->changeEmail;
    }

    /**
     * @param string $changeEmail
     *
     * @return self
     */
    public function setChangeEmail(?string $changeEmail): self
    {
        $this->changeEmail = $changeEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getChangeEmailOther(): ?string
    {
        return $this->changeEmailOther;
    }

    /**
     * @param string $changeEmailOther
     *
     * @return self
     */
    public function setChangeEmailOther(?string $changeEmailOther): self
    {
        $this->changeEmailOther = $changeEmailOther;

        return $this;
    }

    /**
     * The name of the company associated with the consumer disclosure.
     *
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * The name of the company associated with the consumer disclosure.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * The phone number of the company associated with the consumer disclosure.
     *
     * @return string
     */
    public function getCompanyPhone(): ?string
    {
        return $this->companyPhone;
    }

    /**
     * The phone number of the company associated with the consumer disclosure.
     *
     * @param string $companyPhone
     *
     * @return self
     */
    public function setCompanyPhone(?string $companyPhone): self
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyCostPerPage(): ?string
    {
        return $this->copyCostPerPage;
    }

    /**
     * @param string $copyCostPerPage
     *
     * @return self
     */
    public function setCopyCostPerPage(?string $copyCostPerPage): self
    {
        $this->copyCostPerPage = $copyCostPerPage;

        return $this;
    }

    /**
     * Specifies the fee collection method for cases in which the customer requires paper copies of the document.

     Maximum Length: 255 characters
     *
     * @return string
     */
    public function getCopyFeeCollectionMethod(): ?string
    {
        return $this->copyFeeCollectionMethod;
    }

    /**
     * Specifies the fee collection method for cases in which the customer requires paper copies of the document.

     Maximum Length: 255 characters
     *
     * @param string $copyFeeCollectionMethod
     *
     * @return self
     */
    public function setCopyFeeCollectionMethod(?string $copyFeeCollectionMethod): self
    {
        $this->copyFeeCollectionMethod = $copyFeeCollectionMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyRequestEmail(): ?string
    {
        return $this->copyRequestEmail;
    }

    /**
     * @param string $copyRequestEmail
     *
     * @return self
     */
    public function setCopyRequestEmail(?string $copyRequestEmail): self
    {
        $this->copyRequestEmail = $copyRequestEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom(): ?string
    {
        return $this->custom;
    }

    /**
     * @param string $custom
     *
     * @return self
     */
    public function setCustom(?string $custom): self
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableEsign(): ?string
    {
        return $this->enableEsign;
    }

    /**
     * @param string $enableEsign
     *
     * @return self
     */
    public function setEnableEsign(?string $enableEsign): self
    {
        $this->enableEsign = $enableEsign;

        return $this;
    }

    /**
     * The Electronic Record and Signature Disclosure text. The disclosure text includes the html formatting.
     *
     * @return string
     */
    public function getEsignAgreement(): ?string
    {
        return $this->esignAgreement;
    }

    /**
     * The Electronic Record and Signature Disclosure text. The disclosure text includes the html formatting.
     *
     * @param string $esignAgreement
     *
     * @return self
     */
    public function setEsignAgreement(?string $esignAgreement): self
    {
        $this->esignAgreement = $esignAgreement;

        return $this;
    }

    /**
     * @return string
     */
    public function getEsignText(): ?string
    {
        return $this->esignText;
    }

    /**
     * @param string $esignText
     *
     * @return self
     */
    public function setEsignText(?string $esignText): self
    {
        $this->esignText = $esignText;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMustAgreeToEsign(): ?string
    {
        return $this->mustAgreeToEsign;
    }

    /**
     * @param string $mustAgreeToEsign
     *
     * @return self
     */
    public function setMustAgreeToEsign(?string $mustAgreeToEsign): self
    {
        $this->mustAgreeToEsign = $mustAgreeToEsign;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfId(): ?string
    {
        return $this->pdfId;
    }

    /**
     * @param string $pdfId
     *
     * @return self
     */
    public function setPdfId(?string $pdfId): self
    {
        $this->pdfId = $pdfId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseBrand(): ?string
    {
        return $this->useBrand;
    }

    /**
     * @param string $useBrand
     *
     * @return self
     */
    public function setUseBrand(?string $useBrand): self
    {
        $this->useBrand = $useBrand;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseConsumerDisclosureWithinAccount(): ?string
    {
        return $this->useConsumerDisclosureWithinAccount;
    }

    /**
     * @param string $useConsumerDisclosureWithinAccount
     *
     * @return self
     */
    public function setUseConsumerDisclosureWithinAccount(?string $useConsumerDisclosureWithinAccount): self
    {
        $this->useConsumerDisclosureWithinAccount = $useConsumerDisclosureWithinAccount;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseConsumerDisclosureWithinAccountMetadata(): ?SettingsMetadata
    {
        return $this->useConsumerDisclosureWithinAccountMetadata;
    }

    /**
     * @param SettingsMetadata $useConsumerDisclosureWithinAccountMetadata
     *
     * @return self
     */
    public function setUseConsumerDisclosureWithinAccountMetadata(?SettingsMetadata $useConsumerDisclosureWithinAccountMetadata): self
    {
        $this->useConsumerDisclosureWithinAccountMetadata = $useConsumerDisclosureWithinAccountMetadata;

        return $this;
    }

    /**
     * Contains the first address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getWithdrawAddressLine1(): ?string
    {
        return $this->withdrawAddressLine1;
    }

    /**
     * Contains the first address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @param string $withdrawAddressLine1
     *
     * @return self
     */
    public function setWithdrawAddressLine1(?string $withdrawAddressLine1): self
    {
        $this->withdrawAddressLine1 = $withdrawAddressLine1;

        return $this;
    }

    /**
     * Contains the second address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getWithdrawAddressLine2(): ?string
    {
        return $this->withdrawAddressLine2;
    }

    /**
     * Contains the second address line of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @param string $withdrawAddressLine2
     *
     * @return self
     */
    public function setWithdrawAddressLine2(?string $withdrawAddressLine2): self
    {
        $this->withdrawAddressLine2 = $withdrawAddressLine2;

        return $this;
    }

    /**
     * Indicates whether the customer can withdraw consent by email.
     *
     * @return string
     */
    public function getWithdrawByEmail(): ?string
    {
        return $this->withdrawByEmail;
    }

    /**
     * Indicates whether the customer can withdraw consent by email.
     *
     * @param string $withdrawByEmail
     *
     * @return self
     */
    public function setWithdrawByEmail(?string $withdrawByEmail): self
    {
        $this->withdrawByEmail = $withdrawByEmail;

        return $this;
    }

    /**
     * Indicates whether the customer can withdraw consent by postal mail.
     *
     * @return string
     */
    public function getWithdrawByMail(): ?string
    {
        return $this->withdrawByMail;
    }

    /**
     * Indicates whether the customer can withdraw consent by postal mail.
     *
     * @param string $withdrawByMail
     *
     * @return self
     */
    public function setWithdrawByMail(?string $withdrawByMail): self
    {
        $this->withdrawByMail = $withdrawByMail;

        return $this;
    }

    /**
     * Indicates whether the customer can withdraw consent by phone.
     *
     * @return string
     */
    public function getWithdrawByPhone(): ?string
    {
        return $this->withdrawByPhone;
    }

    /**
     * Indicates whether the customer can withdraw consent by phone.
     *
     * @param string $withdrawByPhone
     *
     * @return self
     */
    public function setWithdrawByPhone(?string $withdrawByPhone): self
    {
        $this->withdrawByPhone = $withdrawByPhone;

        return $this;
    }

    /**
     * Contains the city of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 50 characters.
     *
     * @return string
     */
    public function getWithdrawCity(): ?string
    {
        return $this->withdrawCity;
    }

    /**
     * Contains the city of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 50 characters.
     *
     * @param string $withdrawCity
     *
     * @return self
     */
    public function setWithdrawCity(?string $withdrawCity): self
    {
        $this->withdrawCity = $withdrawCity;

        return $this;
    }

    /**
     * Indicates the consequences of withdrawing consent.
     *
     * @return string
     */
    public function getWithdrawConsequences(): ?string
    {
        return $this->withdrawConsequences;
    }

    /**
     * Indicates the consequences of withdrawing consent.
     *
     * @param string $withdrawConsequences
     *
     * @return self
     */
    public function setWithdrawConsequences(?string $withdrawConsequences): self
    {
        $this->withdrawConsequences = $withdrawConsequences;

        return $this;
    }

    /**
     * Contains the email address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getWithdrawEmail(): ?string
    {
        return $this->withdrawEmail;
    }

    /**
     * Contains the email address to which a customer can send a consent withdrawal notification.

     Maximum length: 100 characters.
     *
     * @param string $withdrawEmail
     *
     * @return self
     */
    public function setWithdrawEmail(?string $withdrawEmail): self
    {
        $this->withdrawEmail = $withdrawEmail;

        return $this;
    }

    /**
     * Indicates other information need to withdraw consent.

     Maximum length: 255 characters.
     *
     * @return string
     */
    public function getWithdrawOther(): ?string
    {
        return $this->withdrawOther;
    }

    /**
     * Indicates other information need to withdraw consent.

     Maximum length: 255 characters.
     *
     * @param string $withdrawOther
     *
     * @return self
     */
    public function setWithdrawOther(?string $withdrawOther): self
    {
        $this->withdrawOther = $withdrawOther;

        return $this;
    }

    /**
     * Contains the phone number which a customer can call to register consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @return string
     */
    public function getWithdrawPhone(): ?string
    {
        return $this->withdrawPhone;
    }

    /**
     * Contains the phone number which a customer can call to register consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @param string $withdrawPhone
     *
     * @return self
     */
    public function setWithdrawPhone(?string $withdrawPhone): self
    {
        $this->withdrawPhone = $withdrawPhone;

        return $this;
    }

    /**
     * Contains the postal code of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @return string
     */
    public function getWithdrawPostalCode(): ?string
    {
        return $this->withdrawPostalCode;
    }

    /**
     * Contains the postal code of the postal address to which a customer can send a consent withdrawal notification.

     Maximum length: 20 characters.
     *
     * @param string $withdrawPostalCode
     *
     * @return self
     */
    public function setWithdrawPostalCode(?string $withdrawPostalCode): self
    {
        $this->withdrawPostalCode = $withdrawPostalCode;

        return $this;
    }

    /**
     * Contains the state of the postal address to which a customer can send a consent withdrawal notification.
     *
     * @return string
     */
    public function getWithdrawState(): ?string
    {
        return $this->withdrawState;
    }

    /**
     * Contains the state of the postal address to which a customer can send a consent withdrawal notification.
     *
     * @param string $withdrawState
     *
     * @return self
     */
    public function setWithdrawState(?string $withdrawState): self
    {
        $this->withdrawState = $withdrawState;

        return $this;
    }
}
