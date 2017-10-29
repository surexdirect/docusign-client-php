<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeDocumentFieldsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeDocumentFields' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeDocumentFields) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeDocumentFields();
        if (property_exists($data, 'documentFields')) {
            $values = [];
            foreach ($data->{'documentFields'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setDocumentFields($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentFields()) {
            $values = [];
            foreach ($object->getDocumentFields() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'documentFields'} = $values;
        }

        return $data;
    }
}
