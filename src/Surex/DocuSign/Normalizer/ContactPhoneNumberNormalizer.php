<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContactPhoneNumberNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ContactPhoneNumber' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ContactPhoneNumber) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ContactPhoneNumber();
        if (property_exists($data, 'phoneNumber')) {
            $object->setPhoneNumber($data->{'phoneNumber'});
        }
        if (property_exists($data, 'phoneType')) {
            $object->setPhoneType($data->{'phoneType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPhoneNumber()) {
            $data->{'phoneNumber'} = $object->getPhoneNumber();
        }
        if (null !== $object->getPhoneType()) {
            $data->{'phoneType'} = $object->getPhoneType();
        }

        return $data;
    }
}
