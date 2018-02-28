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

class AccountCustomFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountCustomFields' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountCustomFields;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountCustomFields();
        if (property_exists($data, 'listCustomFields')) {
            $values = [];
            foreach ($data->{'listCustomFields'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\ListCustomField', 'json', $context);
            }
            $object->setListCustomFields($values);
        }
        if (property_exists($data, 'textCustomFields')) {
            $values_1 = [];
            foreach ($data->{'textCustomFields'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\TextCustomField', 'json', $context);
            }
            $object->setTextCustomFields($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getListCustomFields()) {
            $values = [];
            foreach ($object->getListCustomFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'listCustomFields'} = $values;
        }
        if (null !== $object->getTextCustomFields()) {
            $values_1 = [];
            foreach ($object->getTextCustomFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'textCustomFields'} = $values_1;
        }

        return $data;
    }
}
