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

class BillingDiscountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingDiscount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingDiscount;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingDiscount();
        if (property_exists($data, 'beginQuantity')) {
            $object->setBeginQuantity($data->{'beginQuantity'});
        }
        if (property_exists($data, 'discount')) {
            $object->setDiscount($data->{'discount'});
        }
        if (property_exists($data, 'endQuantity')) {
            $object->setEndQuantity($data->{'endQuantity'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBeginQuantity()) {
            $data->{'beginQuantity'} = $object->getBeginQuantity();
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        if (null !== $object->getEndQuantity()) {
            $data->{'endQuantity'} = $object->getEndQuantity();
        }

        return $data;
    }
}
