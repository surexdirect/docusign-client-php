<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountTabSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountTabSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountTabSettings;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountTabSettings();
        if (property_exists($data, 'allowTabOrder')) {
            $object->setAllowTabOrder($data->{'allowTabOrder'});
        }
        if (property_exists($data, 'allowTabOrderMetadata')) {
            $object->setAllowTabOrderMetadata($this->denormalizer->denormalize($data->{'allowTabOrderMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'approveDeclineTabsEnabled')) {
            $object->setApproveDeclineTabsEnabled($data->{'approveDeclineTabsEnabled'});
        }
        if (property_exists($data, 'approveDeclineTabsMetadata')) {
            $object->setApproveDeclineTabsMetadata($this->denormalizer->denormalize($data->{'approveDeclineTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'calculatedFieldsEnabled')) {
            $object->setCalculatedFieldsEnabled($data->{'calculatedFieldsEnabled'});
        }
        if (property_exists($data, 'calculatedFieldsMetadata')) {
            $object->setCalculatedFieldsMetadata($this->denormalizer->denormalize($data->{'calculatedFieldsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'checkboxTabsEnabled')) {
            $object->setCheckboxTabsEnabled($data->{'checkboxTabsEnabled'});
        }
        if (property_exists($data, 'checkboxTabsMetadata')) {
            $object->setCheckboxTabsMetadata($this->denormalizer->denormalize($data->{'checkboxTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'dataFieldRegexEnabled')) {
            $object->setDataFieldRegexEnabled($data->{'dataFieldRegexEnabled'});
        }
        if (property_exists($data, 'dataFieldRegexMetadata')) {
            $object->setDataFieldRegexMetadata($this->denormalizer->denormalize($data->{'dataFieldRegexMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'dataFieldSizeEnabled')) {
            $object->setDataFieldSizeEnabled($data->{'dataFieldSizeEnabled'});
        }
        if (property_exists($data, 'dataFieldSizeMetadata')) {
            $object->setDataFieldSizeMetadata($this->denormalizer->denormalize($data->{'dataFieldSizeMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'firstLastEmailTabsEnabled')) {
            $object->setFirstLastEmailTabsEnabled($data->{'firstLastEmailTabsEnabled'});
        }
        if (property_exists($data, 'firstLastEmailTabsMetadata')) {
            $object->setFirstLastEmailTabsMetadata($this->denormalizer->denormalize($data->{'firstLastEmailTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'listTabsEnabled')) {
            $object->setListTabsEnabled($data->{'listTabsEnabled'});
        }
        if (property_exists($data, 'listTabsMetadata')) {
            $object->setListTabsMetadata($this->denormalizer->denormalize($data->{'listTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'noteTabsEnabled')) {
            $object->setNoteTabsEnabled($data->{'noteTabsEnabled'});
        }
        if (property_exists($data, 'noteTabsMetadata')) {
            $object->setNoteTabsMetadata($this->denormalizer->denormalize($data->{'noteTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'radioTabsEnabled')) {
            $object->setRadioTabsEnabled($data->{'radioTabsEnabled'});
        }
        if (property_exists($data, 'radioTabsMetadata')) {
            $object->setRadioTabsMetadata($this->denormalizer->denormalize($data->{'radioTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'savingCustomTabsEnabled')) {
            $object->setSavingCustomTabsEnabled($data->{'savingCustomTabsEnabled'});
        }
        if (property_exists($data, 'savingCustomTabsMetadata')) {
            $object->setSavingCustomTabsMetadata($this->denormalizer->denormalize($data->{'savingCustomTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'senderToChangeTabAssignmentsEnabled')) {
            $object->setSenderToChangeTabAssignmentsEnabled($data->{'senderToChangeTabAssignmentsEnabled'});
        }
        if (property_exists($data, 'senderToChangeTabAssignmentsMetadata')) {
            $object->setSenderToChangeTabAssignmentsMetadata($this->denormalizer->denormalize($data->{'senderToChangeTabAssignmentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'sharedCustomTabsEnabled')) {
            $object->setSharedCustomTabsEnabled($data->{'sharedCustomTabsEnabled'});
        }
        if (property_exists($data, 'sharedCustomTabsMetadata')) {
            $object->setSharedCustomTabsMetadata($this->denormalizer->denormalize($data->{'sharedCustomTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabDataLabelEnabled')) {
            $object->setTabDataLabelEnabled($data->{'tabDataLabelEnabled'});
        }
        if (property_exists($data, 'tabDataLabelMetadata')) {
            $object->setTabDataLabelMetadata($this->denormalizer->denormalize($data->{'tabDataLabelMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabLocationEnabled')) {
            $object->setTabLocationEnabled($data->{'tabLocationEnabled'});
        }
        if (property_exists($data, 'tabLocationMetadata')) {
            $object->setTabLocationMetadata($this->denormalizer->denormalize($data->{'tabLocationMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabLockingEnabled')) {
            $object->setTabLockingEnabled($data->{'tabLockingEnabled'});
        }
        if (property_exists($data, 'tabLockingMetadata')) {
            $object->setTabLockingMetadata($this->denormalizer->denormalize($data->{'tabLockingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabScaleEnabled')) {
            $object->setTabScaleEnabled($data->{'tabScaleEnabled'});
        }
        if (property_exists($data, 'tabScaleMetadata')) {
            $object->setTabScaleMetadata($this->denormalizer->denormalize($data->{'tabScaleMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabTextFormattingEnabled')) {
            $object->setTabTextFormattingEnabled($data->{'tabTextFormattingEnabled'});
        }
        if (property_exists($data, 'tabTextFormattingMetadata')) {
            $object->setTabTextFormattingMetadata($this->denormalizer->denormalize($data->{'tabTextFormattingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'textTabsEnabled')) {
            $object->setTextTabsEnabled($data->{'textTabsEnabled'});
        }
        if (property_exists($data, 'textTabsMetadata')) {
            $object->setTextTabsMetadata($this->denormalizer->denormalize($data->{'textTabsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
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
            $data->{'allowTabOrderMetadata'} = $this->normalizer->normalize($object->getAllowTabOrderMetadata(), 'json', $context);
        }
        if (null !== $object->getApproveDeclineTabsEnabled()) {
            $data->{'approveDeclineTabsEnabled'} = $object->getApproveDeclineTabsEnabled();
        }
        if (null !== $object->getApproveDeclineTabsMetadata()) {
            $data->{'approveDeclineTabsMetadata'} = $this->normalizer->normalize($object->getApproveDeclineTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getCalculatedFieldsEnabled()) {
            $data->{'calculatedFieldsEnabled'} = $object->getCalculatedFieldsEnabled();
        }
        if (null !== $object->getCalculatedFieldsMetadata()) {
            $data->{'calculatedFieldsMetadata'} = $this->normalizer->normalize($object->getCalculatedFieldsMetadata(), 'json', $context);
        }
        if (null !== $object->getCheckboxTabsEnabled()) {
            $data->{'checkboxTabsEnabled'} = $object->getCheckboxTabsEnabled();
        }
        if (null !== $object->getCheckboxTabsMetadata()) {
            $data->{'checkboxTabsMetadata'} = $this->normalizer->normalize($object->getCheckboxTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getDataFieldRegexEnabled()) {
            $data->{'dataFieldRegexEnabled'} = $object->getDataFieldRegexEnabled();
        }
        if (null !== $object->getDataFieldRegexMetadata()) {
            $data->{'dataFieldRegexMetadata'} = $this->normalizer->normalize($object->getDataFieldRegexMetadata(), 'json', $context);
        }
        if (null !== $object->getDataFieldSizeEnabled()) {
            $data->{'dataFieldSizeEnabled'} = $object->getDataFieldSizeEnabled();
        }
        if (null !== $object->getDataFieldSizeMetadata()) {
            $data->{'dataFieldSizeMetadata'} = $this->normalizer->normalize($object->getDataFieldSizeMetadata(), 'json', $context);
        }
        if (null !== $object->getFirstLastEmailTabsEnabled()) {
            $data->{'firstLastEmailTabsEnabled'} = $object->getFirstLastEmailTabsEnabled();
        }
        if (null !== $object->getFirstLastEmailTabsMetadata()) {
            $data->{'firstLastEmailTabsMetadata'} = $this->normalizer->normalize($object->getFirstLastEmailTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getListTabsEnabled()) {
            $data->{'listTabsEnabled'} = $object->getListTabsEnabled();
        }
        if (null !== $object->getListTabsMetadata()) {
            $data->{'listTabsMetadata'} = $this->normalizer->normalize($object->getListTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getNoteTabsEnabled()) {
            $data->{'noteTabsEnabled'} = $object->getNoteTabsEnabled();
        }
        if (null !== $object->getNoteTabsMetadata()) {
            $data->{'noteTabsMetadata'} = $this->normalizer->normalize($object->getNoteTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getRadioTabsEnabled()) {
            $data->{'radioTabsEnabled'} = $object->getRadioTabsEnabled();
        }
        if (null !== $object->getRadioTabsMetadata()) {
            $data->{'radioTabsMetadata'} = $this->normalizer->normalize($object->getRadioTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getSavingCustomTabsEnabled()) {
            $data->{'savingCustomTabsEnabled'} = $object->getSavingCustomTabsEnabled();
        }
        if (null !== $object->getSavingCustomTabsMetadata()) {
            $data->{'savingCustomTabsMetadata'} = $this->normalizer->normalize($object->getSavingCustomTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getSenderToChangeTabAssignmentsEnabled()) {
            $data->{'senderToChangeTabAssignmentsEnabled'} = $object->getSenderToChangeTabAssignmentsEnabled();
        }
        if (null !== $object->getSenderToChangeTabAssignmentsMetadata()) {
            $data->{'senderToChangeTabAssignmentsMetadata'} = $this->normalizer->normalize($object->getSenderToChangeTabAssignmentsMetadata(), 'json', $context);
        }
        if (null !== $object->getSharedCustomTabsEnabled()) {
            $data->{'sharedCustomTabsEnabled'} = $object->getSharedCustomTabsEnabled();
        }
        if (null !== $object->getSharedCustomTabsMetadata()) {
            $data->{'sharedCustomTabsMetadata'} = $this->normalizer->normalize($object->getSharedCustomTabsMetadata(), 'json', $context);
        }
        if (null !== $object->getTabDataLabelEnabled()) {
            $data->{'tabDataLabelEnabled'} = $object->getTabDataLabelEnabled();
        }
        if (null !== $object->getTabDataLabelMetadata()) {
            $data->{'tabDataLabelMetadata'} = $this->normalizer->normalize($object->getTabDataLabelMetadata(), 'json', $context);
        }
        if (null !== $object->getTabLocationEnabled()) {
            $data->{'tabLocationEnabled'} = $object->getTabLocationEnabled();
        }
        if (null !== $object->getTabLocationMetadata()) {
            $data->{'tabLocationMetadata'} = $this->normalizer->normalize($object->getTabLocationMetadata(), 'json', $context);
        }
        if (null !== $object->getTabLockingEnabled()) {
            $data->{'tabLockingEnabled'} = $object->getTabLockingEnabled();
        }
        if (null !== $object->getTabLockingMetadata()) {
            $data->{'tabLockingMetadata'} = $this->normalizer->normalize($object->getTabLockingMetadata(), 'json', $context);
        }
        if (null !== $object->getTabScaleEnabled()) {
            $data->{'tabScaleEnabled'} = $object->getTabScaleEnabled();
        }
        if (null !== $object->getTabScaleMetadata()) {
            $data->{'tabScaleMetadata'} = $this->normalizer->normalize($object->getTabScaleMetadata(), 'json', $context);
        }
        if (null !== $object->getTabTextFormattingEnabled()) {
            $data->{'tabTextFormattingEnabled'} = $object->getTabTextFormattingEnabled();
        }
        if (null !== $object->getTabTextFormattingMetadata()) {
            $data->{'tabTextFormattingMetadata'} = $this->normalizer->normalize($object->getTabTextFormattingMetadata(), 'json', $context);
        }
        if (null !== $object->getTextTabsEnabled()) {
            $data->{'textTabsEnabled'} = $object->getTextTabsEnabled();
        }
        if (null !== $object->getTextTabsMetadata()) {
            $data->{'textTabsMetadata'} = $this->normalizer->normalize($object->getTextTabsMetadata(), 'json', $context);
        }

        return $data;
    }
}
