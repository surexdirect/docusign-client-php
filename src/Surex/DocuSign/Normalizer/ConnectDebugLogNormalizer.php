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

class ConnectDebugLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ConnectDebugLog' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ConnectDebugLog;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ConnectDebugLog();
        if (property_exists($data, 'connectConfig')) {
            $object->setConnectConfig($data->{'connectConfig'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'eventDateTime')) {
            $object->setEventDateTime($data->{'eventDateTime'});
        }
        if (property_exists($data, 'eventDescription')) {
            $object->setEventDescription($data->{'eventDescription'});
        }
        if (property_exists($data, 'payload')) {
            $object->setPayload($data->{'payload'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConnectConfig()) {
            $data->{'connectConfig'} = $object->getConnectConfig();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getEventDateTime()) {
            $data->{'eventDateTime'} = $object->getEventDateTime();
        }
        if (null !== $object->getEventDescription()) {
            $data->{'eventDescription'} = $object->getEventDescription();
        }
        if (null !== $object->getPayload()) {
            $data->{'payload'} = $object->getPayload();
        }

        return $data;
    }
}
