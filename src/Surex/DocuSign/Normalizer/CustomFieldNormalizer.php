<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CustomFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CustomField' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CustomField;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\CustomField();
        if (property_exists($data, 'customFieldType')) {
            $object->setCustomFieldType($data->{'customFieldType'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
