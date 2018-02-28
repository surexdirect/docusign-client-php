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

class AccountPasswordMinimumPasswordAgeDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountPasswordMinimumPasswordAgeDays' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountPasswordMinimumPasswordAgeDays;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountPasswordMinimumPasswordAgeDays();
        if (property_exists($data, 'maximumAge')) {
            $object->setMaximumAge($data->{'maximumAge'});
        }
        if (property_exists($data, 'minimumAge')) {
            $object->setMinimumAge($data->{'minimumAge'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaximumAge()) {
            $data->{'maximumAge'} = $object->getMaximumAge();
        }
        if (null !== $object->getMinimumAge()) {
            $data->{'minimumAge'} = $object->getMinimumAge();
        }

        return $data;
    }
}
