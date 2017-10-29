<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SeatDiscountNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\SeatDiscount' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\SeatDiscount) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
