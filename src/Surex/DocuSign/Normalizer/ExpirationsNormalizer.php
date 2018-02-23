<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExpirationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Expirations' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Expirations;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
