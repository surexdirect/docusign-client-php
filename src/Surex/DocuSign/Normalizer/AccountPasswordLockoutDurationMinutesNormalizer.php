<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordLockoutDurationMinutesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordLockoutDurationMinutes' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordLockoutDurationMinutes) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPasswordLockoutDurationMinutes();
        if (property_exists($data, 'maximumMinutes')) {
            $object->setMaximumMinutes($data->{'maximumMinutes'});
        }
        if (property_exists($data, 'minimumMinutes')) {
            $object->setMinimumMinutes($data->{'minimumMinutes'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaximumMinutes()) {
            $data->{'maximumMinutes'} = $object->getMaximumMinutes();
        }
        if (null !== $object->getMinimumMinutes()) {
            $data->{'minimumMinutes'} = $object->getMinimumMinutes();
        }

        return $data;
    }
}
