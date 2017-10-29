<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateDocumentTabsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateDocumentTabs' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateDocumentTabs) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateDocumentTabs();
        if (property_exists($data, 'approveTabs')) {
            $values = [];
            foreach ($data->{'approveTabs'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Approve', 'raw', $context);
            }
            $object->setApproveTabs($values);
        }
        if (property_exists($data, 'checkboxTabs')) {
            $values_1 = [];
            foreach ($data->{'checkboxTabs'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\Checkbox', 'raw', $context);
            }
            $object->setCheckboxTabs($values_1);
        }
        if (property_exists($data, 'companyTabs')) {
            $values_2 = [];
            foreach ($data->{'companyTabs'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\Company', 'raw', $context);
            }
            $object->setCompanyTabs($values_2);
        }
        if (property_exists($data, 'dateSignedTabs')) {
            $values_3 = [];
            foreach ($data->{'dateSignedTabs'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Surex\\DocuSign\\Model\\DateSigned', 'raw', $context);
            }
            $object->setDateSignedTabs($values_3);
        }
        if (property_exists($data, 'dateTabs')) {
            $values_4 = [];
            foreach ($data->{'dateTabs'} as $value_4) {
                $values_4[] = $this->serializer->deserialize($value_4, 'Surex\\DocuSign\\Model\\Date', 'raw', $context);
            }
            $object->setDateTabs($values_4);
        }
        if (property_exists($data, 'declineTabs')) {
            $values_5 = [];
            foreach ($data->{'declineTabs'} as $value_5) {
                $values_5[] = $this->serializer->deserialize($value_5, 'Surex\\DocuSign\\Model\\Decline', 'raw', $context);
            }
            $object->setDeclineTabs($values_5);
        }
        if (property_exists($data, 'emailAddressTabs')) {
            $values_6 = [];
            foreach ($data->{'emailAddressTabs'} as $value_6) {
                $values_6[] = $this->serializer->deserialize($value_6, 'Surex\\DocuSign\\Model\\EmailAddress', 'raw', $context);
            }
            $object->setEmailAddressTabs($values_6);
        }
        if (property_exists($data, 'emailTabs')) {
            $values_7 = [];
            foreach ($data->{'emailTabs'} as $value_7) {
                $values_7[] = $this->serializer->deserialize($value_7, 'Surex\\DocuSign\\Model\\Email', 'raw', $context);
            }
            $object->setEmailTabs($values_7);
        }
        if (property_exists($data, 'envelopeIdTabs')) {
            $values_8 = [];
            foreach ($data->{'envelopeIdTabs'} as $value_8) {
                $values_8[] = $this->serializer->deserialize($value_8, 'Surex\\DocuSign\\Model\\EnvelopeId', 'raw', $context);
            }
            $object->setEnvelopeIdTabs($values_8);
        }
        if (property_exists($data, 'firstNameTabs')) {
            $values_9 = [];
            foreach ($data->{'firstNameTabs'} as $value_9) {
                $values_9[] = $this->serializer->deserialize($value_9, 'Surex\\DocuSign\\Model\\FirstName', 'raw', $context);
            }
            $object->setFirstNameTabs($values_9);
        }
        if (property_exists($data, 'formulaTabs')) {
            $values_10 = [];
            foreach ($data->{'formulaTabs'} as $value_10) {
                $values_10[] = $this->serializer->deserialize($value_10, 'Surex\\DocuSign\\Model\\FormulaTab', 'raw', $context);
            }
            $object->setFormulaTabs($values_10);
        }
        if (property_exists($data, 'fullNameTabs')) {
            $values_11 = [];
            foreach ($data->{'fullNameTabs'} as $value_11) {
                $values_11[] = $this->serializer->deserialize($value_11, 'Surex\\DocuSign\\Model\\FullName', 'raw', $context);
            }
            $object->setFullNameTabs($values_11);
        }
        if (property_exists($data, 'initialHereTabs')) {
            $values_12 = [];
            foreach ($data->{'initialHereTabs'} as $value_12) {
                $values_12[] = $this->serializer->deserialize($value_12, 'Surex\\DocuSign\\Model\\InitialHere', 'raw', $context);
            }
            $object->setInitialHereTabs($values_12);
        }
        if (property_exists($data, 'lastNameTabs')) {
            $values_13 = [];
            foreach ($data->{'lastNameTabs'} as $value_13) {
                $values_13[] = $this->serializer->deserialize($value_13, 'Surex\\DocuSign\\Model\\LastName', 'raw', $context);
            }
            $object->setLastNameTabs($values_13);
        }
        if (property_exists($data, 'listTabs')) {
            $values_14 = [];
            foreach ($data->{'listTabs'} as $value_14) {
                $values_14[] = $this->serializer->deserialize($value_14, 'Surex\\DocuSign\\Model\\_List', 'raw', $context);
            }
            $object->setListTabs($values_14);
        }
        if (property_exists($data, 'noteTabs')) {
            $values_15 = [];
            foreach ($data->{'noteTabs'} as $value_15) {
                $values_15[] = $this->serializer->deserialize($value_15, 'Surex\\DocuSign\\Model\\Note', 'raw', $context);
            }
            $object->setNoteTabs($values_15);
        }
        if (property_exists($data, 'numberTabs')) {
            $values_16 = [];
            foreach ($data->{'numberTabs'} as $value_16) {
                $values_16[] = $this->serializer->deserialize($value_16, 'Surex\\DocuSign\\Model\\Number', 'raw', $context);
            }
            $object->setNumberTabs($values_16);
        }
        if (property_exists($data, 'radioGroupTabs')) {
            $values_17 = [];
            foreach ($data->{'radioGroupTabs'} as $value_17) {
                $values_17[] = $this->serializer->deserialize($value_17, 'Surex\\DocuSign\\Model\\RadioGroup', 'raw', $context);
            }
            $object->setRadioGroupTabs($values_17);
        }
        if (property_exists($data, 'signerAttachmentTabs')) {
            $values_18 = [];
            foreach ($data->{'signerAttachmentTabs'} as $value_18) {
                $values_18[] = $this->serializer->deserialize($value_18, 'Surex\\DocuSign\\Model\\SignerAttachment', 'raw', $context);
            }
            $object->setSignerAttachmentTabs($values_18);
        }
        if (property_exists($data, 'signHereTabs')) {
            $values_19 = [];
            foreach ($data->{'signHereTabs'} as $value_19) {
                $values_19[] = $this->serializer->deserialize($value_19, 'Surex\\DocuSign\\Model\\SignHere', 'raw', $context);
            }
            $object->setSignHereTabs($values_19);
        }
        if (property_exists($data, 'ssnTabs')) {
            $values_20 = [];
            foreach ($data->{'ssnTabs'} as $value_20) {
                $values_20[] = $this->serializer->deserialize($value_20, 'Surex\\DocuSign\\Model\\Ssn', 'raw', $context);
            }
            $object->setSsnTabs($values_20);
        }
        if (property_exists($data, 'textTabs')) {
            $values_21 = [];
            foreach ($data->{'textTabs'} as $value_21) {
                $values_21[] = $this->serializer->deserialize($value_21, 'Surex\\DocuSign\\Model\\Text', 'raw', $context);
            }
            $object->setTextTabs($values_21);
        }
        if (property_exists($data, 'titleTabs')) {
            $values_22 = [];
            foreach ($data->{'titleTabs'} as $value_22) {
                $values_22[] = $this->serializer->deserialize($value_22, 'Surex\\DocuSign\\Model\\Title', 'raw', $context);
            }
            $object->setTitleTabs($values_22);
        }
        if (property_exists($data, 'viewTabs')) {
            $values_23 = [];
            foreach ($data->{'viewTabs'} as $value_23) {
                $values_23[] = $this->serializer->deserialize($value_23, 'Surex\\DocuSign\\Model\\View', 'raw', $context);
            }
            $object->setViewTabs($values_23);
        }
        if (property_exists($data, 'zipTabs')) {
            $values_24 = [];
            foreach ($data->{'zipTabs'} as $value_24) {
                $values_24[] = $this->serializer->deserialize($value_24, 'Surex\\DocuSign\\Model\\Zip', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'approveTabs'} = $values;
        }
        if (null !== $object->getCheckboxTabs()) {
            $values_1 = [];
            foreach ($object->getCheckboxTabs() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'checkboxTabs'} = $values_1;
        }
        if (null !== $object->getCompanyTabs()) {
            $values_2 = [];
            foreach ($object->getCompanyTabs() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'companyTabs'} = $values_2;
        }
        if (null !== $object->getDateSignedTabs()) {
            $values_3 = [];
            foreach ($object->getDateSignedTabs() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'dateSignedTabs'} = $values_3;
        }
        if (null !== $object->getDateTabs()) {
            $values_4 = [];
            foreach ($object->getDateTabs() as $value_4) {
                $values_4[] = $this->serializer->serialize($value_4, 'raw', $context);
            }
            $data->{'dateTabs'} = $values_4;
        }
        if (null !== $object->getDeclineTabs()) {
            $values_5 = [];
            foreach ($object->getDeclineTabs() as $value_5) {
                $values_5[] = $this->serializer->serialize($value_5, 'raw', $context);
            }
            $data->{'declineTabs'} = $values_5;
        }
        if (null !== $object->getEmailAddressTabs()) {
            $values_6 = [];
            foreach ($object->getEmailAddressTabs() as $value_6) {
                $values_6[] = $this->serializer->serialize($value_6, 'raw', $context);
            }
            $data->{'emailAddressTabs'} = $values_6;
        }
        if (null !== $object->getEmailTabs()) {
            $values_7 = [];
            foreach ($object->getEmailTabs() as $value_7) {
                $values_7[] = $this->serializer->serialize($value_7, 'raw', $context);
            }
            $data->{'emailTabs'} = $values_7;
        }
        if (null !== $object->getEnvelopeIdTabs()) {
            $values_8 = [];
            foreach ($object->getEnvelopeIdTabs() as $value_8) {
                $values_8[] = $this->serializer->serialize($value_8, 'raw', $context);
            }
            $data->{'envelopeIdTabs'} = $values_8;
        }
        if (null !== $object->getFirstNameTabs()) {
            $values_9 = [];
            foreach ($object->getFirstNameTabs() as $value_9) {
                $values_9[] = $this->serializer->serialize($value_9, 'raw', $context);
            }
            $data->{'firstNameTabs'} = $values_9;
        }
        if (null !== $object->getFormulaTabs()) {
            $values_10 = [];
            foreach ($object->getFormulaTabs() as $value_10) {
                $values_10[] = $this->serializer->serialize($value_10, 'raw', $context);
            }
            $data->{'formulaTabs'} = $values_10;
        }
        if (null !== $object->getFullNameTabs()) {
            $values_11 = [];
            foreach ($object->getFullNameTabs() as $value_11) {
                $values_11[] = $this->serializer->serialize($value_11, 'raw', $context);
            }
            $data->{'fullNameTabs'} = $values_11;
        }
        if (null !== $object->getInitialHereTabs()) {
            $values_12 = [];
            foreach ($object->getInitialHereTabs() as $value_12) {
                $values_12[] = $this->serializer->serialize($value_12, 'raw', $context);
            }
            $data->{'initialHereTabs'} = $values_12;
        }
        if (null !== $object->getLastNameTabs()) {
            $values_13 = [];
            foreach ($object->getLastNameTabs() as $value_13) {
                $values_13[] = $this->serializer->serialize($value_13, 'raw', $context);
            }
            $data->{'lastNameTabs'} = $values_13;
        }
        if (null !== $object->getListTabs()) {
            $values_14 = [];
            foreach ($object->getListTabs() as $value_14) {
                $values_14[] = $this->serializer->serialize($value_14, 'raw', $context);
            }
            $data->{'listTabs'} = $values_14;
        }
        if (null !== $object->getNoteTabs()) {
            $values_15 = [];
            foreach ($object->getNoteTabs() as $value_15) {
                $values_15[] = $this->serializer->serialize($value_15, 'raw', $context);
            }
            $data->{'noteTabs'} = $values_15;
        }
        if (null !== $object->getNumberTabs()) {
            $values_16 = [];
            foreach ($object->getNumberTabs() as $value_16) {
                $values_16[] = $this->serializer->serialize($value_16, 'raw', $context);
            }
            $data->{'numberTabs'} = $values_16;
        }
        if (null !== $object->getRadioGroupTabs()) {
            $values_17 = [];
            foreach ($object->getRadioGroupTabs() as $value_17) {
                $values_17[] = $this->serializer->serialize($value_17, 'raw', $context);
            }
            $data->{'radioGroupTabs'} = $values_17;
        }
        if (null !== $object->getSignerAttachmentTabs()) {
            $values_18 = [];
            foreach ($object->getSignerAttachmentTabs() as $value_18) {
                $values_18[] = $this->serializer->serialize($value_18, 'raw', $context);
            }
            $data->{'signerAttachmentTabs'} = $values_18;
        }
        if (null !== $object->getSignHereTabs()) {
            $values_19 = [];
            foreach ($object->getSignHereTabs() as $value_19) {
                $values_19[] = $this->serializer->serialize($value_19, 'raw', $context);
            }
            $data->{'signHereTabs'} = $values_19;
        }
        if (null !== $object->getSsnTabs()) {
            $values_20 = [];
            foreach ($object->getSsnTabs() as $value_20) {
                $values_20[] = $this->serializer->serialize($value_20, 'raw', $context);
            }
            $data->{'ssnTabs'} = $values_20;
        }
        if (null !== $object->getTextTabs()) {
            $values_21 = [];
            foreach ($object->getTextTabs() as $value_21) {
                $values_21[] = $this->serializer->serialize($value_21, 'raw', $context);
            }
            $data->{'textTabs'} = $values_21;
        }
        if (null !== $object->getTitleTabs()) {
            $values_22 = [];
            foreach ($object->getTitleTabs() as $value_22) {
                $values_22[] = $this->serializer->serialize($value_22, 'raw', $context);
            }
            $data->{'titleTabs'} = $values_22;
        }
        if (null !== $object->getViewTabs()) {
            $values_23 = [];
            foreach ($object->getViewTabs() as $value_23) {
                $values_23[] = $this->serializer->serialize($value_23, 'raw', $context);
            }
            $data->{'viewTabs'} = $values_23;
        }
        if (null !== $object->getZipTabs()) {
            $values_24 = [];
            foreach ($object->getZipTabs() as $value_24) {
                $values_24[] = $this->serializer->serialize($value_24, 'raw', $context);
            }
            $data->{'zipTabs'} = $values_24;
        }

        return $data;
    }
}
