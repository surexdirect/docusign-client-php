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

class BillingPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingPrice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingPrice;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingPrice();
        if (property_exists($data, 'beginQuantity')) {
            $object->setBeginQuantity($data->{'beginQuantity'});
        }
        if (property_exists($data, 'endQuantity')) {
            $object->setEndQuantity($data->{'endQuantity'});
        }
        if (property_exists($data, 'unitPrice')) {
            $object->setUnitPrice($data->{'unitPrice'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBeginQuantity()) {
            $data->{'beginQuantity'} = $object->getBeginQuantity();
        }
        if (null !== $object->getEndQuantity()) {
            $data->{'endQuantity'} = $object->getEndQuantity();
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unitPrice'} = $object->getUnitPrice();
        }

        return $data;
    }
}
