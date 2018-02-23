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

class SeatDiscountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\SeatDiscount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\SeatDiscount;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\SeatDiscount();
        if (property_exists($data, 'beginSeatCount')) {
            $object->setBeginSeatCount($data->{'beginSeatCount'});
        }
        if (property_exists($data, 'discountPercent')) {
            $object->setDiscountPercent($data->{'discountPercent'});
        }
        if (property_exists($data, 'endSeatCount')) {
            $object->setEndSeatCount($data->{'endSeatCount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBeginSeatCount()) {
            $data->{'beginSeatCount'} = $object->getBeginSeatCount();
        }
        if (null !== $object->getDiscountPercent()) {
            $data->{'discountPercent'} = $object->getDiscountPercent();
        }
        if (null !== $object->getEndSeatCount()) {
            $data->{'endSeatCount'} = $object->getEndSeatCount();
        }

        return $data;
    }
}
