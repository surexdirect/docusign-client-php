<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CustomFieldsEnvelopeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CustomFieldsEnvelope' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CustomFieldsEnvelope) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CustomFieldsEnvelope();
        if (property_exists($data, 'listCustomFields')) {
            $values = [];
            foreach ($data->{'listCustomFields'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ListCustomField', 'raw', $context);
            }
            $object->setListCustomFields($values);
        }
        if (property_exists($data, 'textCustomFields')) {
            $values_1 = [];
            foreach ($data->{'textCustomFields'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\TextCustomField', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'listCustomFields'} = $values;
        }
        if (null !== $object->getTextCustomFields()) {
            $values_1 = [];
            foreach ($object->getTextCustomFields() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'textCustomFields'} = $values_1;
        }

        return $data;
    }
}
