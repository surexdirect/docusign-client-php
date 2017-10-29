<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPriceNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPrice' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPrice) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
