<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PaymentsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Payments' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Payments) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Payments();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'paymentDate')) {
            $object->setPaymentDate($data->{'paymentDate'});
        }
        if (property_exists($data, 'paymentId')) {
            $object->setPaymentId($data->{'paymentId'});
        }
        if (property_exists($data, 'paymentNumber')) {
            $object->setPaymentNumber($data->{'paymentNumber'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getPaymentDate()) {
            $data->{'paymentDate'} = $object->getPaymentDate();
        }
        if (null !== $object->getPaymentId()) {
            $data->{'paymentId'} = $object->getPaymentId();
        }
        if (null !== $object->getPaymentNumber()) {
            $data->{'paymentNumber'} = $object->getPaymentNumber();
        }

        return $data;
    }
}
