<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PermissionProfileInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PermissionProfileInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PermissionProfileInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PermissionProfileInformation();
        if (property_exists($data, 'permissionProfiles')) {
            $values = [];
            foreach ($data->{'permissionProfiles'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\AccountPermissionProfiles', 'raw', $context);
            }
            $object->setPermissionProfiles($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPermissionProfiles()) {
            $values = [];
            foreach ($object->getPermissionProfiles() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'permissionProfiles'} = $values;
        }

        return $data;
    }
}