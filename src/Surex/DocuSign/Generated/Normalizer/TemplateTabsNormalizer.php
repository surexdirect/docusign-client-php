<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TemplateTabsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\TemplateTabs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\TemplateTabs;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\TemplateTabs();
        if (property_exists($data, 'approveTabs')) {
            $values = [];
            foreach ($data->{'approveTabs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\Approve', 'json', $context);
            }
            $object->setApproveTabs($values);
        }
        if (property_exists($data, 'checkboxTabs')) {
            $values_1 = [];
            foreach ($data->{'checkboxTabs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\Checkbox', 'json', $context);
            }
            $object->setCheckboxTabs($values_1);
        }
        if (property_exists($data, 'companyTabs')) {
            $values_2 = [];
            foreach ($data->{'companyTabs'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Generated\\Model\\Company', 'json', $context);
            }
            $object->setCompanyTabs($values_2);
        }
        if (property_exists($data, 'dateSignedTabs')) {
            $values_3 = [];
            foreach ($data->{'dateSignedTabs'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Surex\\DocuSign\\Generated\\Model\\DateSigned', 'json', $context);
            }
            $object->setDateSignedTabs($values_3);
        }
        if (property_exists($data, 'dateTabs')) {
            $values_4 = [];
            foreach ($data->{'dateTabs'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Surex\\DocuSign\\Generated\\Model\\Date', 'json', $context);
            }
            $object->setDateTabs($values_4);
        }
        if (property_exists($data, 'declineTabs')) {
            $values_5 = [];
            foreach ($data->{'declineTabs'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Surex\\DocuSign\\Generated\\Model\\Decline', 'json', $context);
            }
            $object->setDeclineTabs($values_5);
        }
        if (property_exists($data, 'emailAddressTabs')) {
            $values_6 = [];
            foreach ($data->{'emailAddressTabs'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Surex\\DocuSign\\Generated\\Model\\EmailAddress', 'json', $context);
            }
            $object->setEmailAddressTabs($values_6);
        }
        if (property_exists($data, 'emailTabs')) {
            $values_7 = [];
            foreach ($data->{'emailTabs'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Surex\\DocuSign\\Generated\\Model\\Email', 'json', $context);
            }
            $object->setEmailTabs($values_7);
        }
        if (property_exists($data, 'envelopeIdTabs')) {
            $values_8 = [];
            foreach ($data->{'envelopeIdTabs'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeId', 'json', $context);
            }
            $object->setEnvelopeIdTabs($values_8);
        }
        if (property_exists($data, 'firstNameTabs')) {
            $values_9 = [];
            foreach ($data->{'firstNameTabs'} as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Surex\\DocuSign\\Generated\\Model\\FirstName', 'json', $context);
            }
            $object->setFirstNameTabs($values_9);
        }
        if (property_exists($data, 'formulaTabs')) {
            $values_10 = [];
            foreach ($data->{'formulaTabs'} as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Surex\\DocuSign\\Generated\\Model\\FormulaTab', 'json', $context);
            }
            $object->setFormulaTabs($values_10);
        }
        if (property_exists($data, 'fullNameTabs')) {
            $values_11 = [];
            foreach ($data->{'fullNameTabs'} as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Surex\\DocuSign\\Generated\\Model\\FullName', 'json', $context);
            }
            $object->setFullNameTabs($values_11);
        }
        if (property_exists($data, 'initialHereTabs')) {
            $values_12 = [];
            foreach ($data->{'initialHereTabs'} as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Surex\\DocuSign\\Generated\\Model\\InitialHere', 'json', $context);
            }
            $object->setInitialHereTabs($values_12);
        }
        if (property_exists($data, 'lastNameTabs')) {
            $values_13 = [];
            foreach ($data->{'lastNameTabs'} as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Surex\\DocuSign\\Generated\\Model\\LastName', 'json', $context);
            }
            $object->setLastNameTabs($values_13);
        }
        if (property_exists($data, 'listTabs')) {
            $values_14 = [];
            foreach ($data->{'listTabs'} as $value_14) {
                $values_14[] = $this->denormalizer->denormalize($value_14, 'Surex\\DocuSign\\Generated\\Model\\_List', 'json', $context);
            }
            $object->setListTabs($values_14);
        }
        if (property_exists($data, 'noteTabs')) {
            $values_15 = [];
            foreach ($data->{'noteTabs'} as $value_15) {
                $values_15[] = $this->denormalizer->denormalize($value_15, 'Surex\\DocuSign\\Generated\\Model\\Note', 'json', $context);
            }
            $object->setNoteTabs($values_15);
        }
        if (property_exists($data, 'numberTabs')) {
            $values_16 = [];
            foreach ($data->{'numberTabs'} as $value_16) {
                $values_16[] = $this->denormalizer->denormalize($value_16, 'Surex\\DocuSign\\Generated\\Model\\Number', 'json', $context);
            }
            $object->setNumberTabs($values_16);
        }
        if (property_exists($data, 'radioGroupTabs')) {
            $values_17 = [];
            foreach ($data->{'radioGroupTabs'} as $value_17) {
                $values_17[] = $this->denormalizer->denormalize($value_17, 'Surex\\DocuSign\\Generated\\Model\\RadioGroup', 'json', $context);
            }
            $object->setRadioGroupTabs($values_17);
        }
        if (property_exists($data, 'signerAttachmentTabs')) {
            $values_18 = [];
            foreach ($data->{'signerAttachmentTabs'} as $value_18) {
                $values_18[] = $this->denormalizer->denormalize($value_18, 'Surex\\DocuSign\\Generated\\Model\\SignerAttachment', 'json', $context);
            }
            $object->setSignerAttachmentTabs($values_18);
        }
        if (property_exists($data, 'signHereTabs')) {
            $values_19 = [];
            foreach ($data->{'signHereTabs'} as $value_19) {
                $values_19[] = $this->denormalizer->denormalize($value_19, 'Surex\\DocuSign\\Generated\\Model\\SignHere', 'json', $context);
            }
            $object->setSignHereTabs($values_19);
        }
        if (property_exists($data, 'ssnTabs')) {
            $values_20 = [];
            foreach ($data->{'ssnTabs'} as $value_20) {
                $values_20[] = $this->denormalizer->denormalize($value_20, 'Surex\\DocuSign\\Generated\\Model\\Ssn', 'json', $context);
            }
            $object->setSsnTabs($values_20);
        }
        if (property_exists($data, 'textTabs')) {
            $values_21 = [];
            foreach ($data->{'textTabs'} as $value_21) {
                $values_21[] = $this->denormalizer->denormalize($value_21, 'Surex\\DocuSign\\Generated\\Model\\Text', 'json', $context);
            }
            $object->setTextTabs($values_21);
        }
        if (property_exists($data, 'titleTabs')) {
            $values_22 = [];
            foreach ($data->{'titleTabs'} as $value_22) {
                $values_22[] = $this->denormalizer->denormalize($value_22, 'Surex\\DocuSign\\Generated\\Model\\Title', 'json', $context);
            }
            $object->setTitleTabs($values_22);
        }
        if (property_exists($data, 'viewTabs')) {
            $values_23 = [];
            foreach ($data->{'viewTabs'} as $value_23) {
                $values_23[] = $this->denormalizer->denormalize($value_23, 'Surex\\DocuSign\\Generated\\Model\\View', 'json', $context);
            }
            $object->setViewTabs($values_23);
        }
        if (property_exists($data, 'zipTabs')) {
            $values_24 = [];
            foreach ($data->{'zipTabs'} as $value_24) {
                $values_24[] = $this->denormalizer->denormalize($value_24, 'Surex\\DocuSign\\Generated\\Model\\Zip', 'json', $context);
            }
            $object->setZipTabs($values_24);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApproveTabs()) {
            $values = [];
            foreach ($object->getApproveTabs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'approveTabs'} = $values;
        }
        if (null !== $object->getCheckboxTabs()) {
            $values_1 = [];
            foreach ($object->getCheckboxTabs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'checkboxTabs'} = $values_1;
        }
        if (null !== $object->getCompanyTabs()) {
            $values_2 = [];
            foreach ($object->getCompanyTabs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'companyTabs'} = $values_2;
        }
        if (null !== $object->getDateSignedTabs()) {
            $values_3 = [];
            foreach ($object->getDateSignedTabs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'dateSignedTabs'} = $values_3;
        }
        if (null !== $object->getDateTabs()) {
            $values_4 = [];
            foreach ($object->getDateTabs() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'dateTabs'} = $values_4;
        }
        if (null !== $object->getDeclineTabs()) {
            $values_5 = [];
            foreach ($object->getDeclineTabs() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'declineTabs'} = $values_5;
        }
        if (null !== $object->getEmailAddressTabs()) {
            $values_6 = [];
            foreach ($object->getEmailAddressTabs() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'emailAddressTabs'} = $values_6;
        }
        if (null !== $object->getEmailTabs()) {
            $values_7 = [];
            foreach ($object->getEmailTabs() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'emailTabs'} = $values_7;
        }
        if (null !== $object->getEnvelopeIdTabs()) {
            $values_8 = [];
            foreach ($object->getEnvelopeIdTabs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'envelopeIdTabs'} = $values_8;
        }
        if (null !== $object->getFirstNameTabs()) {
            $values_9 = [];
            foreach ($object->getFirstNameTabs() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data->{'firstNameTabs'} = $values_9;
        }
        if (null !== $object->getFormulaTabs()) {
            $values_10 = [];
            foreach ($object->getFormulaTabs() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data->{'formulaTabs'} = $values_10;
        }
        if (null !== $object->getFullNameTabs()) {
            $values_11 = [];
            foreach ($object->getFullNameTabs() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $data->{'fullNameTabs'} = $values_11;
        }
        if (null !== $object->getInitialHereTabs()) {
            $values_12 = [];
            foreach ($object->getInitialHereTabs() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data->{'initialHereTabs'} = $values_12;
        }
        if (null !== $object->getLastNameTabs()) {
            $values_13 = [];
            foreach ($object->getLastNameTabs() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data->{'lastNameTabs'} = $values_13;
        }
        if (null !== $object->getListTabs()) {
            $values_14 = [];
            foreach ($object->getListTabs() as $value_14) {
                $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
            }
            $data->{'listTabs'} = $values_14;
        }
        if (null !== $object->getNoteTabs()) {
            $values_15 = [];
            foreach ($object->getNoteTabs() as $value_15) {
                $values_15[] = $this->normalizer->normalize($value_15, 'json', $context);
            }
            $data->{'noteTabs'} = $values_15;
        }
        if (null !== $object->getNumberTabs()) {
            $values_16 = [];
            foreach ($object->getNumberTabs() as $value_16) {
                $values_16[] = $this->normalizer->normalize($value_16, 'json', $context);
            }
            $data->{'numberTabs'} = $values_16;
        }
        if (null !== $object->getRadioGroupTabs()) {
            $values_17 = [];
            foreach ($object->getRadioGroupTabs() as $value_17) {
                $values_17[] = $this->normalizer->normalize($value_17, 'json', $context);
            }
            $data->{'radioGroupTabs'} = $values_17;
        }
        if (null !== $object->getSignerAttachmentTabs()) {
            $values_18 = [];
            foreach ($object->getSignerAttachmentTabs() as $value_18) {
                $values_18[] = $this->normalizer->normalize($value_18, 'json', $context);
            }
            $data->{'signerAttachmentTabs'} = $values_18;
        }
        if (null !== $object->getSignHereTabs()) {
            $values_19 = [];
            foreach ($object->getSignHereTabs() as $value_19) {
                $values_19[] = $this->normalizer->normalize($value_19, 'json', $context);
            }
            $data->{'signHereTabs'} = $values_19;
        }
        if (null !== $object->getSsnTabs()) {
            $values_20 = [];
            foreach ($object->getSsnTabs() as $value_20) {
                $values_20[] = $this->normalizer->normalize($value_20, 'json', $context);
            }
            $data->{'ssnTabs'} = $values_20;
        }
        if (null !== $object->getTextTabs()) {
            $values_21 = [];
            foreach ($object->getTextTabs() as $value_21) {
                $values_21[] = $this->normalizer->normalize($value_21, 'json', $context);
            }
            $data->{'textTabs'} = $values_21;
        }
        if (null !== $object->getTitleTabs()) {
            $values_22 = [];
            foreach ($object->getTitleTabs() as $value_22) {
                $values_22[] = $this->normalizer->normalize($value_22, 'json', $context);
            }
            $data->{'titleTabs'} = $values_22;
        }
        if (null !== $object->getViewTabs()) {
            $values_23 = [];
            foreach ($object->getViewTabs() as $value_23) {
                $values_23[] = $this->normalizer->normalize($value_23, 'json', $context);
            }
            $data->{'viewTabs'} = $values_23;
        }
        if (null !== $object->getZipTabs()) {
            $values_24 = [];
            foreach ($object->getZipTabs() as $value_24) {
                $values_24[] = $this->normalizer->normalize($value_24, 'json', $context);
            }
            $data->{'zipTabs'} = $values_24;
        }

        return $data;
    }
}
