<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingDiscountNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingDiscount' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingDiscount) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
