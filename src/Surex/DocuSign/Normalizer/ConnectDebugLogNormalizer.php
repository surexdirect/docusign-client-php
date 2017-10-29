<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ConnectDebugLogNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ConnectDebugLog' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ConnectDebugLog) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ConnectDebugLog();
        if (property_exists($data, 'connectConfig')) {
            $object->setConnectConfig($data->{'connectConfig'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
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
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
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
