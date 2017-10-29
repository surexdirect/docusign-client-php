<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CustomFieldNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CustomField' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CustomField) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CustomField();
        if (property_exists($data, 'customFieldType')) {
            $object->setCustomFieldType($data->{'customFieldType'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'fieldId')) {
            $object->setFieldId($data->{'fieldId'});
        }
        if (property_exists($data, 'listItems')) {
            $values = [];
            foreach ($data->{'listItems'} as $value) {
                $values[] = $value;
            }
            $object->setListItems($values);
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        if (property_exists($data, 'show')) {
            $object->setShow($data->{'show'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCustomFieldType()) {
            $data->{'customFieldType'} = $object->getCustomFieldType();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getFieldId()) {
            $data->{'fieldId'} = $object->getFieldId();
        }
        if (null !== $object->getListItems()) {
            $values = [];
            foreach ($object->getListItems() as $value) {
                $values[] = $value;
            }
            $data->{'listItems'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        if (null !== $object->getShow()) {
            $data->{'show'} = $object->getShow();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }

        return $data;
    }
}
