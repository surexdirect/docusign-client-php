<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateDocumentTabs
{
    /**
     * @var Approve[]
     */
    protected $approveTabs;
    /**
     * @var Checkbox[]
     */
    protected $checkboxTabs;
    /**
     * @var Company[]
     */
    protected $companyTabs;
    /**
     * @var DateSigned[]
     */
    protected $dateSignedTabs;
    /**
     * @var Date[]
     */
    protected $dateTabs;
    /**
     * @var Decline[]
     */
    protected $declineTabs;
    /**
     * @var EmailAddress[]
     */
    protected $emailAddressTabs;
    /**
     * @var Email[]
     */
    protected $emailTabs;
    /**
     * @var EnvelopeId[]
     */
    protected $envelopeIdTabs;
    /**
     * @var FirstName[]
     */
    protected $firstNameTabs;
    /**
     * @var FormulaTab[]
     */
    protected $formulaTabs;
    /**
     * @var FullName[]
     */
    protected $fullNameTabs;
    /**
     * @var InitialHere[]
     */
    protected $initialHereTabs;
    /**
     * @var LastName[]
     */
    protected $lastNameTabs;
    /**
     * @var _List[]
     */
    protected $listTabs;
    /**
     * @var Note[]
     */
    protected $noteTabs;
    /**
     * @var Number[]
     */
    protected $numberTabs;
    /**
     * @var RadioGroup[]
     */
    protected $radioGroupTabs;
    /**
     * @var SignerAttachment[]
     */
    protected $signerAttachmentTabs;
    /**
     * @var SignHere[]
     */
    protected $signHereTabs;
    /**
     * @var Ssn[]
     */
    protected $ssnTabs;
    /**
     * @var Text[]
     */
    protected $textTabs;
    /**
     * @var Title[]
     */
    protected $titleTabs;
    /**
     * @var View[]
     */
    protected $viewTabs;
    /**
     * @var Zip[]
     */
    protected $zipTabs;

    /**
     * @return Approve[]
     */
    public function getApproveTabs()
    {
        return $this->approveTabs;
    }

    /**
     * @param Approve[] $approveTabs
     *
     * @return self
     */
    public function setApproveTabs(array $approveTabs = null)
    {
        $this->approveTabs = $approveTabs;

        return $this;
    }

    /**
     * @return Checkbox[]
     */
    public function getCheckboxTabs()
    {
        return $this->checkboxTabs;
    }

    /**
     * @param Checkbox[] $checkboxTabs
     *
     * @return self
     */
    public function setCheckboxTabs(array $checkboxTabs = null)
    {
        $this->checkboxTabs = $checkboxTabs;

        return $this;
    }

    /**
     * @return Company[]
     */
    public function getCompanyTabs()
    {
        return $this->companyTabs;
    }

    /**
     * @param Company[] $companyTabs
     *
     * @return self
     */
    public function setCompanyTabs(array $companyTabs = null)
    {
        $this->companyTabs = $companyTabs;

        return $this;
    }

    /**
     * @return DateSigned[]
     */
    public function getDateSignedTabs()
    {
        return $this->dateSignedTabs;
    }

    /**
     * @param DateSigned[] $dateSignedTabs
     *
     * @return self
     */
    public function setDateSignedTabs(array $dateSignedTabs = null)
    {
        $this->dateSignedTabs = $dateSignedTabs;

        return $this;
    }

    /**
     * @return Date[]
     */
    public function getDateTabs()
    {
        return $this->dateTabs;
    }

    /**
     * @param Date[] $dateTabs
     *
     * @return self
     */
    public function setDateTabs(array $dateTabs = null)
    {
        $this->dateTabs = $dateTabs;

        return $this;
    }

    /**
     * @return Decline[]
     */
    public function getDeclineTabs()
    {
        return $this->declineTabs;
    }

    /**
     * @param Decline[] $declineTabs
     *
     * @return self
     */
    public function setDeclineTabs(array $declineTabs = null)
    {
        $this->declineTabs = $declineTabs;

        return $this;
    }

    /**
     * @return EmailAddress[]
     */
    public function getEmailAddressTabs()
    {
        return $this->emailAddressTabs;
    }

    /**
     * @param EmailAddress[] $emailAddressTabs
     *
     * @return self
     */
    public function setEmailAddressTabs(array $emailAddressTabs = null)
    {
        $this->emailAddressTabs = $emailAddressTabs;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getEmailTabs()
    {
        return $this->emailTabs;
    }

    /**
     * @param Email[] $emailTabs
     *
     * @return self
     */
    public function setEmailTabs(array $emailTabs = null)
    {
        $this->emailTabs = $emailTabs;

        return $this;
    }

    /**
     * @return EnvelopeId[]
     */
    public function getEnvelopeIdTabs()
    {
        return $this->envelopeIdTabs;
    }

    /**
     * @param EnvelopeId[] $envelopeIdTabs
     *
     * @return self
     */
    public function setEnvelopeIdTabs(array $envelopeIdTabs = null)
    {
        $this->envelopeIdTabs = $envelopeIdTabs;

        return $this;
    }

    /**
     * @return FirstName[]
     */
    public function getFirstNameTabs()
    {
        return $this->firstNameTabs;
    }

    /**
     * @param FirstName[] $firstNameTabs
     *
     * @return self
     */
    public function setFirstNameTabs(array $firstNameTabs = null)
    {
        $this->firstNameTabs = $firstNameTabs;

        return $this;
    }

    /**
     * @return FormulaTab[]
     */
    public function getFormulaTabs()
    {
        return $this->formulaTabs;
    }

    /**
     * @param FormulaTab[] $formulaTabs
     *
     * @return self
     */
    public function setFormulaTabs(array $formulaTabs = null)
    {
        $this->formulaTabs = $formulaTabs;

        return $this;
    }

    /**
     * @return FullName[]
     */
    public function getFullNameTabs()
    {
        return $this->fullNameTabs;
    }

    /**
     * @param FullName[] $fullNameTabs
     *
     * @return self
     */
    public function setFullNameTabs(array $fullNameTabs = null)
    {
        $this->fullNameTabs = $fullNameTabs;

        return $this;
    }

    /**
     * @return InitialHere[]
     */
    public function getInitialHereTabs()
    {
        return $this->initialHereTabs;
    }

    /**
     * @param InitialHere[] $initialHereTabs
     *
     * @return self
     */
    public function setInitialHereTabs(array $initialHereTabs = null)
    {
        $this->initialHereTabs = $initialHereTabs;

        return $this;
    }

    /**
     * @return LastName[]
     */
    public function getLastNameTabs()
    {
        return $this->lastNameTabs;
    }

    /**
     * @param LastName[] $lastNameTabs
     *
     * @return self
     */
    public function setLastNameTabs(array $lastNameTabs = null)
    {
        $this->lastNameTabs = $lastNameTabs;

        return $this;
    }

    /**
     * @return _List[]
     */
    public function getListTabs()
    {
        return $this->listTabs;
    }

    /**
     * @param _List[] $listTabs
     *
     * @return self
     */
    public function setListTabs(array $listTabs = null)
    {
        $this->listTabs = $listTabs;

        return $this;
    }

    /**
     * @return Note[]
     */
    public function getNoteTabs()
    {
        return $this->noteTabs;
    }

    /**
     * @param Note[] $noteTabs
     *
     * @return self
     */
    public function setNoteTabs(array $noteTabs = null)
    {
        $this->noteTabs = $noteTabs;

        return $this;
    }

    /**
     * @return Number[]
     */
    public function getNumberTabs()
    {
        return $this->numberTabs;
    }

    /**
     * @param Number[] $numberTabs
     *
     * @return self
     */
    public function setNumberTabs(array $numberTabs = null)
    {
        $this->numberTabs = $numberTabs;

        return $this;
    }

    /**
     * @return RadioGroup[]
     */
    public function getRadioGroupTabs()
    {
        return $this->radioGroupTabs;
    }

    /**
     * @param RadioGroup[] $radioGroupTabs
     *
     * @return self
     */
    public function setRadioGroupTabs(array $radioGroupTabs = null)
    {
        $this->radioGroupTabs = $radioGroupTabs;

        return $this;
    }

    /**
     * @return SignerAttachment[]
     */
    public function getSignerAttachmentTabs()
    {
        return $this->signerAttachmentTabs;
    }

    /**
     * @param SignerAttachment[] $signerAttachmentTabs
     *
     * @return self
     */
    public function setSignerAttachmentTabs(array $signerAttachmentTabs = null)
    {
        $this->signerAttachmentTabs = $signerAttachmentTabs;

        return $this;
    }

    /**
     * @return SignHere[]
     */
    public function getSignHereTabs()
    {
        return $this->signHereTabs;
    }

    /**
     * @param SignHere[] $signHereTabs
     *
     * @return self
     */
    public function setSignHereTabs(array $signHereTabs = null)
    {
        $this->signHereTabs = $signHereTabs;

        return $this;
    }

    /**
     * @return Ssn[]
     */
    public function getSsnTabs()
    {
        return $this->ssnTabs;
    }

    /**
     * @param Ssn[] $ssnTabs
     *
     * @return self
     */
    public function setSsnTabs(array $ssnTabs = null)
    {
        $this->ssnTabs = $ssnTabs;

        return $this;
    }

    /**
     * @return Text[]
     */
    public function getTextTabs()
    {
        return $this->textTabs;
    }

    /**
     * @param Text[] $textTabs
     *
     * @return self
     */
    public function setTextTabs(array $textTabs = null)
    {
        $this->textTabs = $textTabs;

        return $this;
    }

    /**
     * @return Title[]
     */
    public function getTitleTabs()
    {
        return $this->titleTabs;
    }

    /**
     * @param Title[] $titleTabs
     *
     * @return self
     */
    public function setTitleTabs(array $titleTabs = null)
    {
        $this->titleTabs = $titleTabs;

        return $this;
    }

    /**
     * @return View[]
     */
    public function getViewTabs()
    {
        return $this->viewTabs;
    }

    /**
     * @param View[] $viewTabs
     *
     * @return self
     */
    public function setViewTabs(array $viewTabs = null)
    {
        $this->viewTabs = $viewTabs;

        return $this;
    }

    /**
     * @return Zip[]
     */
    public function getZipTabs()
    {
        return $this->zipTabs;
    }

    /**
     * @param Zip[] $zipTabs
     *
     * @return self
     */
    public function setZipTabs(array $zipTabs = null)
    {
        $this->zipTabs = $zipTabs;

        return $this;
    }
}
