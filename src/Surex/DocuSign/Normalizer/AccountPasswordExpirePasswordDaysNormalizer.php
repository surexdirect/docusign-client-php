<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordExpirePasswordDaysNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordExpirePasswordDays' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordExpirePasswordDays) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPasswordExpirePasswordDays();
        if (property_exists($data, 'maximumDays')) {
            $object->setMaximumDays($data->{'maximumDays'});
        }
        if (property_exists($data, 'minimumDays')) {
            $object->setMinimumDays($data->{'minimumDays'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaximumDays()) {
            $data->{'maximumDays'} = $object->getMaximumDays();
        }
        if (null !== $object->getMinimumDays()) {
            $data->{'minimumDays'} = $object->getMinimumDays();
        }

        return $data;
    }
}
