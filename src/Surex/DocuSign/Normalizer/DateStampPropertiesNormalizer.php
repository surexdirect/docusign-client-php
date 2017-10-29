<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DateStampPropertiesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\DateStampProperties' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\DateStampProperties) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\DateStampProperties();
        if (property_exists($data, 'dateAreaHeight')) {
            $object->setDateAreaHeight($data->{'dateAreaHeight'});
        }
        if (property_exists($data, 'dateAreaWidth')) {
            $object->setDateAreaWidth($data->{'dateAreaWidth'});
        }
        if (property_exists($data, 'dateAreaX')) {
            $object->setDateAreaX($data->{'dateAreaX'});
        }
        if (property_exists($data, 'dateAreaY')) {
            $object->setDateAreaY($data->{'dateAreaY'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDateAreaHeight()) {
            $data->{'dateAreaHeight'} = $object->getDateAreaHeight();
        }
        if (null !== $object->getDateAreaWidth()) {
            $data->{'dateAreaWidth'} = $object->getDateAreaWidth();
        }
        if (null !== $object->getDateAreaX()) {
            $data->{'dateAreaX'} = $object->getDateAreaX();
        }
        if (null !== $object->getDateAreaY()) {
            $data->{'dateAreaY'} = $object->getDateAreaY();
        }

        return $data;
    }
}
