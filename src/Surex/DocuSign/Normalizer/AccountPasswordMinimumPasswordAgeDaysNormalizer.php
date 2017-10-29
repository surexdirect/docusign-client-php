<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordMinimumPasswordAgeDaysNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordMinimumPasswordAgeDays' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordMinimumPasswordAgeDays) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
