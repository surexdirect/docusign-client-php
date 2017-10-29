<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EventResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EventResult' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EventResult) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EventResult();
        if (property_exists($data, 'eventTimestamp')) {
            $object->setEventTimestamp($data->{'eventTimestamp'});
        }
        if (property_exists($data, 'failureDescription')) {
            $object->setFailureDescription($data->{'failureDescription'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'vendorFailureStatusCode')) {
            $object->setVendorFailureStatusCode($data->{'vendorFailureStatusCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEventTimestamp()) {
            $data->{'eventTimestamp'} = $object->getEventTimestamp();
        }
        if (null !== $object->getFailureDescription()) {
            $data->{'failureDescription'} = $object->getFailureDescription();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getVendorFailureStatusCode()) {
            $data->{'vendorFailureStatusCode'} = $object->getVendorFailureStatusCode();
        }

        return $data;
    }
}
