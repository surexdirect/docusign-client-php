<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getAllowTabOrder()
    {
        return $this->allowTabOrder;
    }

    /**
     * @param string $allowTabOrder
     *
     * @return self
     */
    public function setAllowTabOrder($allowTabOrder = null)
    {
        $this->allowTabOrder = $allowTabOrder;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowTabOrderMetadata()
    {
        return $this->allowTabOrderMetadata;
    }

    /**
     * @param SettingsMetadata $allowTabOrderMetadata
     *
     * @return self
     */
    public function setAllowTabOrderMetadata(SettingsMetadata $allowTabOrderMetadata = null)
    {
        $this->allowTabOrderMetadata = $allowTabOrderMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getApproveDeclineTabsEnabled()
    {
        return $this->approveDeclineTabsEnabled;
    }

    /**
     * @param string $approveDeclineTabsEnabled
     *
     * @return self
     */
    public function setApproveDeclineTabsEnabled($approveDeclineTabsEnabled = null)
    {
        $this->approveDeclineTabsEnabled = $approveDeclineTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getApproveDeclineTabsMetadata()
    {
        return $this->approveDeclineTabsMetadata;
    }

    /**
     * @param SettingsMetadata $approveDeclineTabsMetadata
     *
     * @return self
     */
    public function setApproveDeclineTabsMetadata(SettingsMetadata $approveDeclineTabsMetadata = null)
    {
        $this->approveDeclineTabsMetadata = $approveDeclineTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedFieldsEnabled()
    {
        return $this->calculatedFieldsEnabled;
    }

    /**
     * @param string $calculatedFieldsEnabled
     *
     * @return self
     */
    public function setCalculatedFieldsEnabled($calculatedFieldsEnabled = null)
    {
        $this->calculatedFieldsEnabled = $calculatedFieldsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCalculatedFieldsMetadata()
    {
        return $this->calculatedFieldsMetadata;
    }

    /**
     * @param SettingsMetadata $calculatedFieldsMetadata
     *
     * @return self
     */
    public function setCalculatedFieldsMetadata(SettingsMetadata $calculatedFieldsMetadata = null)
    {
        $this->calculatedFieldsMetadata = $calculatedFieldsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxTabsEnabled()
    {
        return $this->checkboxTabsEnabled;
    }

    /**
     * @param string $checkboxTabsEnabled
     *
     * @return self
     */
    public function setCheckboxTabsEnabled($checkboxTabsEnabled = null)
    {
        $this->checkboxTabsEnabled = $checkboxTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCheckboxTabsMetadata()
    {
        return $this->checkboxTabsMetadata;
    }

    /**
     * @param SettingsMetadata $checkboxTabsMetadata
     *
     * @return self
     */
    public function setCheckboxTabsMetadata(SettingsMetadata $checkboxTabsMetadata = null)
    {
        $this->checkboxTabsMetadata = $checkboxTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataFieldRegexEnabled()
    {
        return $this->dataFieldRegexEnabled;
    }

    /**
     * @param string $dataFieldRegexEnabled
     *
     * @return self
     */
    public function setDataFieldRegexEnabled($dataFieldRegexEnabled = null)
    {
        $this->dataFieldRegexEnabled = $dataFieldRegexEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDataFieldRegexMetadata()
    {
        return $this->dataFieldRegexMetadata;
    }

    /**
     * @param SettingsMetadata $dataFieldRegexMetadata
     *
     * @return self
     */
    public function setDataFieldRegexMetadata(SettingsMetadata $dataFieldRegexMetadata = null)
    {
        $this->dataFieldRegexMetadata = $dataFieldRegexMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataFieldSizeEnabled()
    {
        return $this->dataFieldSizeEnabled;
    }

    /**
     * @param string $dataFieldSizeEnabled
     *
     * @return self
     */
    public function setDataFieldSizeEnabled($dataFieldSizeEnabled = null)
    {
        $this->dataFieldSizeEnabled = $dataFieldSizeEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDataFieldSizeMetadata()
    {
        return $this->dataFieldSizeMetadata;
    }

    /**
     * @param SettingsMetadata $dataFieldSizeMetadata
     *
     * @return self
     */
    public function setDataFieldSizeMetadata(SettingsMetadata $dataFieldSizeMetadata = null)
    {
        $this->dataFieldSizeMetadata = $dataFieldSizeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstLastEmailTabsEnabled()
    {
        return $this->firstLastEmailTabsEnabled;
    }

    /**
     * @param string $firstLastEmailTabsEnabled
     *
     * @return self
     */
    public function setFirstLastEmailTabsEnabled($firstLastEmailTabsEnabled = null)
    {
        $this->firstLastEmailTabsEnabled = $firstLastEmailTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getFirstLastEmailTabsMetadata()
    {
        return $this->firstLastEmailTabsMetadata;
    }

    /**
     * @param SettingsMetadata $firstLastEmailTabsMetadata
     *
     * @return self
     */
    public function setFirstLastEmailTabsMetadata(SettingsMetadata $firstLastEmailTabsMetadata = null)
    {
        $this->firstLastEmailTabsMetadata = $firstLastEmailTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getListTabsEnabled()
    {
        return $this->listTabsEnabled;
    }

    /**
     * @param string $listTabsEnabled
     *
     * @return self
     */
    public function setListTabsEnabled($listTabsEnabled = null)
    {
        $this->listTabsEnabled = $listTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getListTabsMetadata()
    {
        return $this->listTabsMetadata;
    }

    /**
     * @param SettingsMetadata $listTabsMetadata
     *
     * @return self
     */
    public function setListTabsMetadata(SettingsMetadata $listTabsMetadata = null)
    {
        $this->listTabsMetadata = $listTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoteTabsEnabled()
    {
        return $this->noteTabsEnabled;
    }

    /**
     * @param string $noteTabsEnabled
     *
     * @return self
     */
    public function setNoteTabsEnabled($noteTabsEnabled = null)
    {
        $this->noteTabsEnabled = $noteTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getNoteTabsMetadata()
    {
        return $this->noteTabsMetadata;
    }

    /**
     * @param SettingsMetadata $noteTabsMetadata
     *
     * @return self
     */
    public function setNoteTabsMetadata(SettingsMetadata $noteTabsMetadata = null)
    {
        $this->noteTabsMetadata = $noteTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getRadioTabsEnabled()
    {
        return $this->radioTabsEnabled;
    }

    /**
     * @param string $radioTabsEnabled
     *
     * @return self
     */
    public function setRadioTabsEnabled($radioTabsEnabled = null)
    {
        $this->radioTabsEnabled = $radioTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getRadioTabsMetadata()
    {
        return $this->radioTabsMetadata;
    }

    /**
     * @param SettingsMetadata $radioTabsMetadata
     *
     * @return self
     */
    public function setRadioTabsMetadata(SettingsMetadata $radioTabsMetadata = null)
    {
        $this->radioTabsMetadata = $radioTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSavingCustomTabsEnabled()
    {
        return $this->savingCustomTabsEnabled;
    }

    /**
     * @param string $savingCustomTabsEnabled
     *
     * @return self
     */
    public function setSavingCustomTabsEnabled($savingCustomTabsEnabled = null)
    {
        $this->savingCustomTabsEnabled = $savingCustomTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSavingCustomTabsMetadata()
    {
        return $this->savingCustomTabsMetadata;
    }

    /**
     * @param SettingsMetadata $savingCustomTabsMetadata
     *
     * @return self
     */
    public function setSavingCustomTabsMetadata(SettingsMetadata $savingCustomTabsMetadata = null)
    {
        $this->savingCustomTabsMetadata = $savingCustomTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderToChangeTabAssignmentsEnabled()
    {
        return $this->senderToChangeTabAssignmentsEnabled;
    }

    /**
     * @param string $senderToChangeTabAssignmentsEnabled
     *
     * @return self
     */
    public function setSenderToChangeTabAssignmentsEnabled($senderToChangeTabAssignmentsEnabled = null)
    {
        $this->senderToChangeTabAssignmentsEnabled = $senderToChangeTabAssignmentsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSenderToChangeTabAssignmentsMetadata()
    {
        return $this->senderToChangeTabAssignmentsMetadata;
    }

    /**
     * @param SettingsMetadata $senderToChangeTabAssignmentsMetadata
     *
     * @return self
     */
    public function setSenderToChangeTabAssignmentsMetadata(SettingsMetadata $senderToChangeTabAssignmentsMetadata = null)
    {
        $this->senderToChangeTabAssignmentsMetadata = $senderToChangeTabAssignmentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSharedCustomTabsEnabled()
    {
        return $this->sharedCustomTabsEnabled;
    }

    /**
     * @param string $sharedCustomTabsEnabled
     *
     * @return self
     */
    public function setSharedCustomTabsEnabled($sharedCustomTabsEnabled = null)
    {
        $this->sharedCustomTabsEnabled = $sharedCustomTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSharedCustomTabsMetadata()
    {
        return $this->sharedCustomTabsMetadata;
    }

    /**
     * @param SettingsMetadata $sharedCustomTabsMetadata
     *
     * @return self
     */
    public function setSharedCustomTabsMetadata(SettingsMetadata $sharedCustomTabsMetadata = null)
    {
        $this->sharedCustomTabsMetadata = $sharedCustomTabsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabDataLabelEnabled()
    {
        return $this->tabDataLabelEnabled;
    }

    /**
     * @param string $tabDataLabelEnabled
     *
     * @return self
     */
    public function setTabDataLabelEnabled($tabDataLabelEnabled = null)
    {
        $this->tabDataLabelEnabled = $tabDataLabelEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabDataLabelMetadata()
    {
        return $this->tabDataLabelMetadata;
    }

    /**
     * @param SettingsMetadata $tabDataLabelMetadata
     *
     * @return self
     */
    public function setTabDataLabelMetadata(SettingsMetadata $tabDataLabelMetadata = null)
    {
        $this->tabDataLabelMetadata = $tabDataLabelMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabLocationEnabled()
    {
        return $this->tabLocationEnabled;
    }

    /**
     * @param string $tabLocationEnabled
     *
     * @return self
     */
    public function setTabLocationEnabled($tabLocationEnabled = null)
    {
        $this->tabLocationEnabled = $tabLocationEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabLocationMetadata()
    {
        return $this->tabLocationMetadata;
    }

    /**
     * @param SettingsMetadata $tabLocationMetadata
     *
     * @return self
     */
    public function setTabLocationMetadata(SettingsMetadata $tabLocationMetadata = null)
    {
        $this->tabLocationMetadata = $tabLocationMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabLockingEnabled()
    {
        return $this->tabLockingEnabled;
    }

    /**
     * @param string $tabLockingEnabled
     *
     * @return self
     */
    public function setTabLockingEnabled($tabLockingEnabled = null)
    {
        $this->tabLockingEnabled = $tabLockingEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabLockingMetadata()
    {
        return $this->tabLockingMetadata;
    }

    /**
     * @param SettingsMetadata $tabLockingMetadata
     *
     * @return self
     */
    public function setTabLockingMetadata(SettingsMetadata $tabLockingMetadata = null)
    {
        $this->tabLockingMetadata = $tabLockingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabScaleEnabled()
    {
        return $this->tabScaleEnabled;
    }

    /**
     * @param string $tabScaleEnabled
     *
     * @return self
     */
    public function setTabScaleEnabled($tabScaleEnabled = null)
    {
        $this->tabScaleEnabled = $tabScaleEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabScaleMetadata()
    {
        return $this->tabScaleMetadata;
    }

    /**
     * @param SettingsMetadata $tabScaleMetadata
     *
     * @return self
     */
    public function setTabScaleMetadata(SettingsMetadata $tabScaleMetadata = null)
    {
        $this->tabScaleMetadata = $tabScaleMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabTextFormattingEnabled()
    {
        return $this->tabTextFormattingEnabled;
    }

    /**
     * @param string $tabTextFormattingEnabled
     *
     * @return self
     */
    public function setTabTextFormattingEnabled($tabTextFormattingEnabled = null)
    {
        $this->tabTextFormattingEnabled = $tabTextFormattingEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTabTextFormattingMetadata()
    {
        return $this->tabTextFormattingMetadata;
    }

    /**
     * @param SettingsMetadata $tabTextFormattingMetadata
     *
     * @return self
     */
    public function setTabTextFormattingMetadata(SettingsMetadata $tabTextFormattingMetadata = null)
    {
        $this->tabTextFormattingMetadata = $tabTextFormattingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getTextTabsEnabled()
    {
        return $this->textTabsEnabled;
    }

    /**
     * @param string $textTabsEnabled
     *
     * @return self
     */
    public function setTextTabsEnabled($textTabsEnabled = null)
    {
        $this->textTabsEnabled = $textTabsEnabled;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getTextTabsMetadata()
    {
        return $this->textTabsMetadata;
    }

    /**
     * @param SettingsMetadata $textTabsMetadata
     *
     * @return self
     */
    public function setTextTabsMetadata(SettingsMetadata $textTabsMetadata = null)
    {
        $this->textTabsMetadata = $textTabsMetadata;

        return $this;
    }
}
