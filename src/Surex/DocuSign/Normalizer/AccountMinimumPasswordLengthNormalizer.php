<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountMinimumPasswordLengthNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountMinimumPasswordLength' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountMinimumPasswordLength) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountMinimumPasswordLength();
        if (property_exists($data, 'maximumLength')) {
            $object->setMaximumLength($data->{'maximumLength'});
        }
        if (property_exists($data, 'minimumLength')) {
            $object->setMinimumLength($data->{'minimumLength'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaximumLength()) {
            $data->{'maximumLength'} = $object->getMaximumLength();
        }
        if (null !== $object->getMinimumLength()) {
            $data->{'minimumLength'} = $object->getMinimumLength();
        }

        return $data;
    }
}
