<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BccEmailAddressNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BccEmailAddress' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BccEmailAddress) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BccEmailAddress();
        if (property_exists($data, 'bccEmailAddressId')) {
            $object->setBccEmailAddressId($data->{'bccEmailAddressId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBccEmailAddressId()) {
            $data->{'bccEmailAddressId'} = $object->getBccEmailAddressId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }

        return $data;
    }
}
