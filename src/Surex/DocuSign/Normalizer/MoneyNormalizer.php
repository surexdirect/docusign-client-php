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

class MoneyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Money' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Money;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Money();
        if (property_exists($data, 'amountInBaseUnit')) {
            $object->setAmountInBaseUnit($data->{'amountInBaseUnit'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'displayAmount')) {
            $object->setDisplayAmount($data->{'displayAmount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmountInBaseUnit()) {
            $data->{'amountInBaseUnit'} = $object->getAmountInBaseUnit();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDisplayAmount()) {
            $data->{'displayAmount'} = $object->getDisplayAmount();
        }

        return $data;
    }
}
