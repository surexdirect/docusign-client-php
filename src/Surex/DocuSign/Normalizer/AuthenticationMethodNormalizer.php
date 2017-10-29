<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AuthenticationMethodNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AuthenticationMethod' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AuthenticationMethod) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AuthenticationMethod();
        if (property_exists($data, 'authenticationType')) {
            $object->setAuthenticationType($data->{'authenticationType'});
        }
        if (property_exists($data, 'lastProvider')) {
            $object->setLastProvider($data->{'lastProvider'});
        }
        if (property_exists($data, 'lastTimestamp')) {
            $object->setLastTimestamp($data->{'lastTimestamp'});
        }
        if (property_exists($data, 'totalCount')) {
            $object->setTotalCount($data->{'totalCount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAuthenticationType()) {
            $data->{'authenticationType'} = $object->getAuthenticationType();
        }
        if (null !== $object->getLastProvider()) {
            $data->{'lastProvider'} = $object->getLastProvider();
        }
        if (null !== $object->getLastTimestamp()) {
            $data->{'lastTimestamp'} = $object->getLastTimestamp();
        }
        if (null !== $object->getTotalCount()) {
            $data->{'totalCount'} = $object->getTotalCount();
        }

        return $data;
    }
}
