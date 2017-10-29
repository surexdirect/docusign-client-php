<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountTabSettingsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountTabSettings' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountTabSettings) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountTabSettings();
        if (property_exists($data, 'allowTabOrder')) {
            $object->setAllowTabOrder($data->{'allowTabOrder'});
        }
        if (property_exists($data, 'allowTabOrderMetadata')) {
            $object->setAllowTabOrderMetadata($this->serializer->deserialize($data->{'allowTabOrderMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'approveDeclineTabsEnabled')) {
            $object->setApproveDeclineTabsEnabled($data->{'approveDeclineTabsEnabled'});
        }
        if (property_exists($data, 'approveDeclineTabsMetadata')) {
            $object->setApproveDeclineTabsMetadata($this->serializer->deserialize($data->{'approveDeclineTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'calculatedFieldsEnabled')) {
            $object->setCalculatedFieldsEnabled($data->{'calculatedFieldsEnabled'});
        }
        if (property_exists($data, 'calculatedFieldsMetadata')) {
            $object->setCalculatedFieldsMetadata($this->serializer->deserialize($data->{'calculatedFieldsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'checkboxTabsEnabled')) {
            $object->setCheckboxTabsEnabled($data->{'checkboxTabsEnabled'});
        }
        if (property_exists($data, 'checkboxTabsMetadata')) {
            $object->setCheckboxTabsMetadata($this->serializer->deserialize($data->{'checkboxTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'dataFieldRegexEnabled')) {
            $object->setDataFieldRegexEnabled($data->{'dataFieldRegexEnabled'});
        }
        if (property_exists($data, 'dataFieldRegexMetadata')) {
            $object->setDataFieldRegexMetadata($this->serializer->deserialize($data->{'dataFieldRegexMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'dataFieldSizeEnabled')) {
            $object->setDataFieldSizeEnabled($data->{'dataFieldSizeEnabled'});
        }
        if (property_exists($data, 'dataFieldSizeMetadata')) {
            $object->setDataFieldSizeMetadata($this->serializer->deserialize($data->{'dataFieldSizeMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'firstLastEmailTabsEnabled')) {
            $object->setFirstLastEmailTabsEnabled($data->{'firstLastEmailTabsEnabled'});
        }
        if (property_exists($data, 'firstLastEmailTabsMetadata')) {
            $object->setFirstLastEmailTabsMetadata($this->serializer->deserialize($data->{'firstLastEmailTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'listTabsEnabled')) {
            $object->setListTabsEnabled($data->{'listTabsEnabled'});
        }
        if (property_exists($data, 'listTabsMetadata')) {
            $object->setListTabsMetadata($this->serializer->deserialize($data->{'listTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'noteTabsEnabled')) {
            $object->setNoteTabsEnabled($data->{'noteTabsEnabled'});
        }
        if (property_exists($data, 'noteTabsMetadata')) {
            $object->setNoteTabsMetadata($this->serializer->deserialize($data->{'noteTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'radioTabsEnabled')) {
            $object->setRadioTabsEnabled($data->{'radioTabsEnabled'});
        }
        if (property_exists($data, 'radioTabsMetadata')) {
            $object->setRadioTabsMetadata($this->serializer->deserialize($data->{'radioTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'savingCustomTabsEnabled')) {
            $object->setSavingCustomTabsEnabled($data->{'savingCustomTabsEnabled'});
        }
        if (property_exists($data, 'savingCustomTabsMetadata')) {
            $object->setSavingCustomTabsMetadata($this->serializer->deserialize($data->{'savingCustomTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'senderToChangeTabAssignmentsEnabled')) {
            $object->setSenderToChangeTabAssignmentsEnabled($data->{'senderToChangeTabAssignmentsEnabled'});
        }
        if (property_exists($data, 'senderToChangeTabAssignmentsMetadata')) {
            $object->setSenderToChangeTabAssignmentsMetadata($this->serializer->deserialize($data->{'senderToChangeTabAssignmentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'sharedCustomTabsEnabled')) {
            $object->setSharedCustomTabsEnabled($data->{'sharedCustomTabsEnabled'});
        }
        if (property_exists($data, 'sharedCustomTabsMetadata')) {
            $object->setSharedCustomTabsMetadata($this->serializer->deserialize($data->{'sharedCustomTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'tabDataLabelEnabled')) {
            $object->setTabDataLabelEnabled($data->{'tabDataLabelEnabled'});
        }
        if (property_exists($data, 'tabDataLabelMetadata')) {
            $object->setTabDataLabelMetadata($this->serializer->deserialize($data->{'tabDataLabelMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'tabLocationEnabled')) {
            $object->setTabLocationEnabled($data->{'tabLocationEnabled'});
        }
        if (property_exists($data, 'tabLocationMetadata')) {
            $object->setTabLocationMetadata($this->serializer->deserialize($data->{'tabLocationMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'tabLockingEnabled')) {
            $object->setTabLockingEnabled($data->{'tabLockingEnabled'});
        }
        if (property_exists($data, 'tabLockingMetadata')) {
            $object->setTabLockingMetadata($this->serializer->deserialize($data->{'tabLockingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'tabScaleEnabled')) {
            $object->setTabScaleEnabled($data->{'tabScaleEnabled'});
        }
        if (property_exists($data, 'tabScaleMetadata')) {
            $object->setTabScaleMetadata($this->serializer->deserialize($data->{'tabScaleMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'tabTextFormattingEnabled')) {
            $object->setTabTextFormattingEnabled($data->{'tabTextFormattingEnabled'});
        }
        if (property_exists($data, 'tabTextFormattingMetadata')) {
            $object->setTabTextFormattingMetadata($this->serializer->deserialize($data->{'tabTextFormattingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'textTabsEnabled')) {
            $object->setTextTabsEnabled($data->{'textTabsEnabled'});
        }
        if (property_exists($data, 'textTabsMetadata')) {
            $object->setTextTabsMetadata($this->serializer->deserialize($data->{'textTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowTabOrder()) {
            $data->{'allowTabOrder'} = $object->getAllowTabOrder();
        }
        if (null !== $object->getAllowTabOrderMetadata()) {
            $data->{'allowTabOrderMetadata'} = $this->serializer->serialize($object->getAllowTabOrderMetadata(), 'raw', $context);
        }
        if (null !== $object->getApproveDeclineTabsEnabled()) {
            $data->{'approveDeclineTabsEnabled'} = $object->getApproveDeclineTabsEnabled();
        }
        if (null !== $object->getApproveDeclineTabsMetadata()) {
            $data->{'approveDeclineTabsMetadata'} = $this->serializer->serialize($object->getApproveDeclineTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getCalculatedFieldsEnabled()) {
            $data->{'calculatedFieldsEnabled'} = $object->getCalculatedFieldsEnabled();
        }
        if (null !== $object->getCalculatedFieldsMetadata()) {
            $data->{'calculatedFieldsMetadata'} = $this->serializer->serialize($object->getCalculatedFieldsMetadata(), 'raw', $context);
        }
        if (null !== $object->getCheckboxTabsEnabled()) {
            $data->{'checkboxTabsEnabled'} = $object->getCheckboxTabsEnabled();
        }
        if (null !== $object->getCheckboxTabsMetadata()) {
            $data->{'checkboxTabsMetadata'} = $this->serializer->serialize($object->getCheckboxTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getDataFieldRegexEnabled()) {
            $data->{'dataFieldRegexEnabled'} = $object->getDataFieldRegexEnabled();
        }
        if (null !== $object->getDataFieldRegexMetadata()) {
            $data->{'dataFieldRegexMetadata'} = $this->serializer->serialize($object->getDataFieldRegexMetadata(), 'raw', $context);
        }
        if (null !== $object->getDataFieldSizeEnabled()) {
            $data->{'dataFieldSizeEnabled'} = $object->getDataFieldSizeEnabled();
        }
        if (null !== $object->getDataFieldSizeMetadata()) {
            $data->{'dataFieldSizeMetadata'} = $this->serializer->serialize($object->getDataFieldSizeMetadata(), 'raw', $context);
        }
        if (null !== $object->getFirstLastEmailTabsEnabled()) {
            $data->{'firstLastEmailTabsEnabled'} = $object->getFirstLastEmailTabsEnabled();
        }
        if (null !== $object->getFirstLastEmailTabsMetadata()) {
            $data->{'firstLastEmailTabsMetadata'} = $this->serializer->serialize($object->getFirstLastEmailTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getListTabsEnabled()) {
            $data->{'listTabsEnabled'} = $object->getListTabsEnabled();
        }
        if (null !== $object->getListTabsMetadata()) {
            $data->{'listTabsMetadata'} = $this->serializer->serialize($object->getListTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getNoteTabsEnabled()) {
            $data->{'noteTabsEnabled'} = $object->getNoteTabsEnabled();
        }
        if (null !== $object->getNoteTabsMetadata()) {
            $data->{'noteTabsMetadata'} = $this->serializer->serialize($object->getNoteTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getRadioTabsEnabled()) {
            $data->{'radioTabsEnabled'} = $object->getRadioTabsEnabled();
        }
        if (null !== $object->getRadioTabsMetadata()) {
            $data->{'radioTabsMetadata'} = $this->serializer->serialize($object->getRadioTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getSavingCustomTabsEnabled()) {
            $data->{'savingCustomTabsEnabled'} = $object->getSavingCustomTabsEnabled();
        }
        if (null !== $object->getSavingCustomTabsMetadata()) {
            $data->{'savingCustomTabsMetadata'} = $this->serializer->serialize($object->getSavingCustomTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getSenderToChangeTabAssignmentsEnabled()) {
            $data->{'senderToChangeTabAssignmentsEnabled'} = $object->getSenderToChangeTabAssignmentsEnabled();
        }
        if (null !== $object->getSenderToChangeTabAssignmentsMetadata()) {
            $data->{'senderToChangeTabAssignmentsMetadata'} = $this->serializer->serialize($object->getSenderToChangeTabAssignmentsMetadata(), 'raw', $context);
        }
        if (null !== $object->getSharedCustomTabsEnabled()) {
            $data->{'sharedCustomTabsEnabled'} = $object->getSharedCustomTabsEnabled();
        }
        if (null !== $object->getSharedCustomTabsMetadata()) {
            $data->{'sharedCustomTabsMetadata'} = $this->serializer->serialize($object->getSharedCustomTabsMetadata(), 'raw', $context);
        }
        if (null !== $object->getTabDataLabelEnabled()) {
            $data->{'tabDataLabelEnabled'} = $object->getTabDataLabelEnabled();
        }
        if (null !== $object->getTabDataLabelMetadata()) {
            $data->{'tabDataLabelMetadata'} = $this->serializer->serialize($object->getTabDataLabelMetadata(), 'raw', $context);
        }
        if (null !== $object->getTabLocationEnabled()) {
            $data->{'tabLocationEnabled'} = $object->getTabLocationEnabled();
        }
        if (null !== $object->getTabLocationMetadata()) {
            $data->{'tabLocationMetadata'} = $this->serializer->serialize($object->getTabLocationMetadata(), 'raw', $context);
        }
        if (null !== $object->getTabLockingEnabled()) {
            $data->{'tabLockingEnabled'} = $object->getTabLockingEnabled();
        }
        if (null !== $object->getTabLockingMetadata()) {
            $data->{'tabLockingMetadata'} = $this->serializer->serialize($object->getTabLockingMetadata(), 'raw', $context);
        }
        if (null !== $object->getTabScaleEnabled()) {
            $data->{'tabScaleEnabled'} = $object->getTabScaleEnabled();
        }
        if (null !== $object->getTabScaleMetadata()) {
            $data->{'tabScaleMetadata'} = $this->serializer->serialize($object->getTabScaleMetadata(), 'raw', $context);
        }
        if (null !== $object->getTabTextFormattingEnabled()) {
            $data->{'tabTextFormattingEnabled'} = $object->getTabTextFormattingEnabled();
        }
        if (null !== $object->getTabTextFormattingMetadata()) {
            $data->{'tabTextFormattingMetadata'} = $this->serializer->serialize($object->getTabTextFormattingMetadata(), 'raw', $context);
        }
        if (null !== $object->getTextTabsEnabled()) {
            $data->{'textTabsEnabled'} = $object->getTextTabsEnabled();
        }
        if (null !== $object->getTextTabsMetadata()) {
            $data->{'textTabsMetadata'} = $this->serializer->serialize($object->getTextTabsMetadata(), 'raw', $context);
        }

        return $data;
    }
}
