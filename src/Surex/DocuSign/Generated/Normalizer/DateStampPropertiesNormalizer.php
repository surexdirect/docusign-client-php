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

class DateStampPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\DateStampProperties' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\DateStampProperties;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\DateStampProperties();
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
