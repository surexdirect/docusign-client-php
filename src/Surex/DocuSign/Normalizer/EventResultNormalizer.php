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

class EventResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EventResult' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EventResult;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
