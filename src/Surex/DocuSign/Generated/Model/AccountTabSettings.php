<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AccountTabSettings
{
    /**
     * @var string
     */
    protected $allowTabOrder;
    /**
     * @var SettingsMetadata
     */
    protected $allowTabOrderMetadata;
    /**
     * @var string
     */
    protected $approveDeclineTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $approveDeclineTabsMetadata;
    /**
     * @var string
     */
    protected $calculatedFieldsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $calculatedFieldsMetadata;
    /**
     * @var string
     */
    protected $checkboxTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $checkboxTabsMetadata;
    /**
     * @var string
     */
    protected $dataFieldRegexEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $dataFieldRegexMetadata;
    /**
     * @var string
     */
    protected $dataFieldSizeEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $dataFieldSizeMetadata;
    /**
     * @var string
     */
    protected $firstLastEmailTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $firstLastEmailTabsMetadata;
    /**
     * @var string
     */
    protected $listTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $listTabsMetadata;
    /**
     * @var string
     */
    protected $noteTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $noteTabsMetadata;
    /**
     * @var string
     */
    protected $radioTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $radioTabsMetadata;
    /**
     * @var string
     */
    protected $savingCustomTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $savingCustomTabsMetadata;
    /**
     * @var string
     */
    protected $senderToChangeTabAssignmentsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $senderToChangeTabAssignmentsMetadata;
    /**
     * @var string
     */
    protected $sharedCustomTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $sharedCustomTabsMetadata;
    /**
     * @var string
     */
    protected $tabDataLabelEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $tabDataLabelMetadata;
    /**
     * @var string
     */
    protected $tabLocationEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $tabLocationMetadata;
    /**
     * @var string
     */
    protected $tabLockingEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $tabLockingMetadata;
    /**
     * @var string
     */
    protected $tabScaleEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $tabScaleMetadata;
    /**
     * @var string
     */
    protected $tabTextFormattingEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $tabTextFormattingMetadata;
    /**
     * @var string
     */
    protected $textTabsEnabled;
    /**
     * @var SettingsMetadata
     */
    protected $textTabsMetadata;

    /**
     * @return string
     */
    public function getAllowTabOrder(): ?string
    {
        return $this->allowTabOrder;
    }

    /**
     * @param string $allowTabOrder
     *
     * @return self
     */
    public function setAllowTabOrder(?string $allowTabOrder): self
    {
        $this->allowTabOrder = $allowTabOrder;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowTabOrderMetadata(): ?SettingsMetadata
    {
        return $this->allowTabOrderMetadata;
    }

    /**
     * @param SettingsMetadata $allowTabOrderMetadata
     *
     * @return self
     */
    public function setAllowTabOrderMetadata(?SettingsMetadata $allowTabOrderMetadata): self
    {
        $this->allowTabOrderMetadata = $allowTabOrderMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getApproveDeclineTabsEnabled(): ?string
    {
        return $this->approveDeclineTabsEnabled;
    }

    /**
     * @param string $approveDeclineTabsEnabled
     *
     * @return self
     */
    public function setApproveDeclineTabsEnabled(?string $approveDeclineTabsEnabled): self
    {
        $this->approveDeclineTabsEnabled = $approveDeclineTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getApproveDeclineTabsMetadata(): ?SettingsMetadata
    {
        return $this->approveDeclineTabsMetadata;
    }

    /**
     * @param SettingsMetadata $approveDeclineTabsMetadata
     *
     * @return self
     */
    public function setApproveDeclineTabsMetadata(?SettingsMetadata $approveDeclineTabsMetadata): self
    {
        $this->approveDeclineTabsMetadata = $approveDeclineTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedFieldsEnabled(): ?string
    {
        return $this->calculatedFieldsEnabled;
    }

    /**
     * @param string $calculatedFieldsEnabled
     *
     * @return self
     */
    public function setCalculatedFieldsEnabled(?string $calculatedFieldsEnabled): self
    {
        $this->calculatedFieldsEnabled = $calculatedFieldsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCalculatedFieldsMetadata(): ?SettingsMetadata
    {
        return $this->calculatedFieldsMetadata;
    }

    /**
     * @param SettingsMetadata $calculatedFieldsMetadata
     *
     * @return self
     */
    public function setCalculatedFieldsMetadata(?SettingsMetadata $calculatedFieldsMetadata): self
    {
        $this->calculatedFieldsMetadata = $calculatedFieldsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxTabsEnabled(): ?string
    {
        return $this->checkboxTabsEnabled;
    }

    /**
     * @param string $checkboxTabsEnabled
     *
     * @return self
     */
    public function setCheckboxTabsEnabled(?string $checkboxTabsEnabled): self
    {
        $this->checkboxTabsEnabled = $checkboxTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCheckboxTabsMetadata(): ?SettingsMetadata
    {
        return $this->checkboxTabsMetadata;
    }

    /**
     * @param SettingsMetadata $checkboxTabsMetadata
     *
     * @return self
     */
    public function setCheckboxTabsMetadata(?SettingsMetadata $checkboxTabsMetadata): self
    {
        $this->checkboxTabsMetadata = $checkboxTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataFieldRegexEnabled(): ?string
    {
        return $this->dataFieldRegexEnabled;
    }

    /**
     * @param string $dataFieldRegexEnabled
     *
     * @return self
     */
    public function setDataFieldRegexEnabled(?string $dataFieldRegexEnabled): self
    {
        $this->dataFieldRegexEnabled = $dataFieldRegexEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDataFieldRegexMetadata(): ?SettingsMetadata
    {
        return $this->dataFieldRegexMetadata;
    }

    /**
     * @param SettingsMetadata $dataFieldRegexMetadata
     *
     * @return self
     */
    public function setDataFieldRegexMetadata(?SettingsMetadata $dataFieldRegexMetadata): self
    {
        $this->dataFieldRegexMetadata = $dataFieldRegexMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataFieldSizeEnabled(): ?string
    {
        return $this->dataFieldSizeEnabled;
    }

    /**
     * @param string $dataFieldSizeEnabled
     *
     * @return self
     */
    public function setDataFieldSizeEnabled(?string $dataFieldSizeEnabled): self
    {
        $this->dataFieldSizeEnabled = $dataFieldSizeEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDataFieldSizeMetadata(): ?SettingsMetadata
    {
        return $this->dataFieldSizeMetadata;
    }

    /**
     * @param SettingsMetadata $dataFieldSizeMetadata
     *
     * @return self
     */
    public function setDataFieldSizeMetadata(?SettingsMetadata $dataFieldSizeMetadata): self
    {
        $this->dataFieldSizeMetadata = $dataFieldSizeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstLastEmailTabsEnabled(): ?string
    {
        return $this->firstLastEmailTabsEnabled;
    }

    /**
     * @param string $firstLastEmailTabsEnabled
     *
     * @return self
     */
    public function setFirstLastEmailTabsEnabled(?string $firstLastEmailTabsEnabled): self
    {
        $this->firstLastEmailTabsEnabled = $firstLastEmailTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getFirstLastEmailTabsMetadata(): ?SettingsMetadata
    {
        return $this->firstLastEmailTabsMetadata;
    }

    /**
     * @param SettingsMetadata $firstLastEmailTabsMetadata
     *
     * @return self
     */
    public function setFirstLastEmailTabsMetadata(?SettingsMetadata $firstLastEmailTabsMetadata): self
    {
        $this->firstLastEmailTabsMetadata = $firstLastEmailTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getListTabsEnabled(): ?string
    {
        return $this->listTabsEnabled;
    }

    /**
     * @param string $listTabsEnabled
     *
     * @return self
     */
    public function setListTabsEnabled(?string $listTabsEnabled): self
    {
        $this->listTabsEnabled = $listTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getListTabsMetadata(): ?SettingsMetadata
    {
        return $this->listTabsMetadata;
    }

    /**
     * @param SettingsMetadata $listTabsMetadata
     *
     * @return self
     */
    public function setListTabsMetadata(?SettingsMetadata $listTabsMetadata): self
    {
        $this->listTabsMetadata = $listTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoteTabsEnabled(): ?string
    {
        return $this->noteTabsEnabled;
    }

    /**
     * @param string $noteTabsEnabled
     *
     * @return self
     */
    public function setNoteTabsEnabled(?string $noteTabsEnabled): self
    {
        $this->noteTabsEnabled = $noteTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getNoteTabsMetadata(): ?SettingsMetadata
    {
        return $this->noteTabsMetadata;
    }

    /**
     * @param SettingsMetadata $noteTabsMetadata
     *
     * @return self
     */
    public function setNoteTabsMetadata(?SettingsMetadata $noteTabsMetadata): self
    {
        $this->noteTabsMetadata = $noteTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getRadioTabsEnabled(): ?string
    {
        return $this->radioTabsEnabled;
    }

    /**
     * @param string $radioTabsEnabled
     *
     * @return self
     */
    public function setRadioTabsEnabled(?string $radioTabsEnabled): self
    {
        $this->radioTabsEnabled = $radioTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getRadioTabsMetadata(): ?SettingsMetadata
    {
        return $this->radioTabsMetadata;
    }

    /**
     * @param SettingsMetadata $radioTabsMetadata
     *
     * @return self
     */
    public function setRadioTabsMetadata(?SettingsMetadata $radioTabsMetadata): self
    {
        $this->radioTabsMetadata = $radioTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSavingCustomTabsEnabled(): ?string
    {
        return $this->savingCustomTabsEnabled;
    }

    /**
     * @param string $savingCustomTabsEnabled
     *
     * @return self
     */
    public function setSavingCustomTabsEnabled(?string $savingCustomTabsEnabled): self
    {
        $this->savingCustomTabsEnabled = $savingCustomTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSavingCustomTabsMetadata(): ?SettingsMetadata
    {
        return $this->savingCustomTabsMetadata;
    }

    /**
     * @param SettingsMetadata $savingCustomTabsMetadata
     *
     * @return self
     */
    public function setSavingCustomTabsMetadata(?SettingsMetadata $savingCustomTabsMetadata): self
    {
        $this->savingCustomTabsMetadata = $savingCustomTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderToChangeTabAssignmentsEnabled(): ?string
    {
        return $this->senderToChangeTabAssignmentsEnabled;
    }

    /**
     * @param string $senderToChangeTabAssignmentsEnabled
     *
     * @return self
     */
    public function setSenderToChangeTabAssignmentsEnabled(?string $senderToChangeTabAssignmentsEnabled): self
    {
        $this->senderToChangeTabAssignmentsEnabled = $senderToChangeTabAssignmentsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSenderToChangeTabAssignmentsMetadata(): ?SettingsMetadata
    {
        return $this->senderToChangeTabAssignmentsMetadata;
    }

    /**
     * @param SettingsMetadata $senderToChangeTabAssignmentsMetadata
     *
     * @return self
     */
    public function setSenderToChangeTabAssignmentsMetadata(?SettingsMetadata $senderToChangeTabAssignmentsMetadata): self
    {
        $this->senderToChangeTabAssignmentsMetadata = $senderToChangeTabAssignmentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSharedCustomTabsEnabled(): ?string
    {
        return $this->sharedCustomTabsEnabled;
    }

    /**
     * @param string $sharedCustomTabsEnabled
     *
     * @return self
     */
    public function setSharedCustomTabsEnabled(?string $sharedCustomTabsEnabled): self
    {
        $this->sharedCustomTabsEnabled = $sharedCustomTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSharedCustomTabsMetadata(): ?SettingsMetadata
    {
        return $this->sharedCustomTabsMetadata;
    }

    /**
     * @param SettingsMetadata $sharedCustomTabsMetadata
     *
     * @return self
     */
    public function setSharedCustomTabsMetadata(?SettingsMetadata $sharedCustomTabsMetadata): self
    {
        $this->sharedCustomTabsMetadata = $sharedCustomTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabDataLabelEnabled(): ?string
    {
        return $this->tabDataLabelEnabled;
    }

    /**
     * @param string $tabDataLabelEnabled
     *
     * @return self
     */
    public function setTabDataLabelEnabled(?string $tabDataLabelEnabled): self
    {
        $this->tabDataLabelEnabled = $tabDataLabelEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabDataLabelMetadata(): ?SettingsMetadata
    {
        return $this->tabDataLabelMetadata;
    }

    /**
     * @param SettingsMetadata $tabDataLabelMetadata
     *
     * @return self
     */
    public function setTabDataLabelMetadata(?SettingsMetadata $tabDataLabelMetadata): self
    {
        $this->tabDataLabelMetadata = $tabDataLabelMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabLocationEnabled(): ?string
    {
        return $this->tabLocationEnabled;
    }

    /**
     * @param string $tabLocationEnabled
     *
     * @return self
     */
    public function setTabLocationEnabled(?string $tabLocationEnabled): self
    {
        $this->tabLocationEnabled = $tabLocationEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabLocationMetadata(): ?SettingsMetadata
    {
        return $this->tabLocationMetadata;
    }

    /**
     * @param SettingsMetadata $tabLocationMetadata
     *
     * @return self
     */
    public function setTabLocationMetadata(?SettingsMetadata $tabLocationMetadata): self
    {
        $this->tabLocationMetadata = $tabLocationMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabLockingEnabled(): ?string
    {
        return $this->tabLockingEnabled;
    }

    /**
     * @param string $tabLockingEnabled
     *
     * @return self
     */
    public function setTabLockingEnabled(?string $tabLockingEnabled): self
    {
        $this->tabLockingEnabled = $tabLockingEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabLockingMetadata(): ?SettingsMetadata
    {
        return $this->tabLockingMetadata;
    }

    /**
     * @param SettingsMetadata $tabLockingMetadata
     *
     * @return self
     */
    public function setTabLockingMetadata(?SettingsMetadata $tabLockingMetadata): self
    {
        $this->tabLockingMetadata = $tabLockingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabScaleEnabled(): ?string
    {
        return $this->tabScaleEnabled;
    }

    /**
     * @param string $tabScaleEnabled
     *
     * @return self
     */
    public function setTabScaleEnabled(?string $tabScaleEnabled): self
    {
        $this->tabScaleEnabled = $tabScaleEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabScaleMetadata(): ?SettingsMetadata
    {
        return $this->tabScaleMetadata;
    }

    /**
     * @param SettingsMetadata $tabScaleMetadata
     *
     * @return self
     */
    public function setTabScaleMetadata(?SettingsMetadata $tabScaleMetadata): self
    {
        $this->tabScaleMetadata = $tabScaleMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabTextFormattingEnabled(): ?string
    {
        return $this->tabTextFormattingEnabled;
    }

    /**
     * @param string $tabTextFormattingEnabled
     *
     * @return self
     */
    public function setTabTextFormattingEnabled(?string $tabTextFormattingEnabled): self
    {
        $this->tabTextFormattingEnabled = $tabTextFormattingEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabTextFormattingMetadata(): ?SettingsMetadata
    {
        return $this->tabTextFormattingMetadata;
    }

    /**
     * @param SettingsMetadata $tabTextFormattingMetadata
     *
     * @return self
     */
    public function setTabTextFormattingMetadata(?SettingsMetadata $tabTextFormattingMetadata): self
    {
        $this->tabTextFormattingMetadata = $tabTextFormattingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextTabsEnabled(): ?string
    {
        return $this->textTabsEnabled;
    }

    /**
     * @param string $textTabsEnabled
     *
     * @return self
     */
    public function setTextTabsEnabled(?string $textTabsEnabled): self
    {
        $this->textTabsEnabled = $textTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTextTabsMetadata(): ?SettingsMetadata
    {
        return $this->textTabsMetadata;
    }

    /**
     * @param SettingsMetadata $textTabsMetadata
     *
     * @return self
     */
    public function setTextTabsMetadata(?SettingsMetadata $textTabsMetadata): self
    {
        $this->textTabsMetadata = $textTabsMetadata;

        return $this;
    }
}
