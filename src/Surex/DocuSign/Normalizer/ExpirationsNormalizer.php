<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ExpirationsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Expirations' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Expirations) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Expirations();
        if (property_exists($data, 'expireAfter')) {
            $object->setExpireAfter($data->{'expireAfter'});
        }
        if (property_exists($data, 'expireEnabled')) {
            $object->setExpireEnabled($data->{'expireEnabled'});
        }
        if (property_exists($data, 'expireWarn')) {
            $object->setExpireWarn($data->{'expireWarn'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExpireAfter()) {
            $data->{'expireAfter'} = $object->getExpireAfter();
        }
        if (null !== $object->getExpireEnabled()) {
            $data->{'expireEnabled'} = $object->getExpireEnabled();
        }
        if (null !== $object->getExpireWarn()) {
            $data->{'expireWarn'} = $object->getExpireWarn();
        }

        return $data;
    }
}
