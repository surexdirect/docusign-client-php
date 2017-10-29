<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPermissionProfilesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPermissionProfiles' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPermissionProfiles) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPermissionProfiles();
        if (property_exists($data, 'modifiedByUsername')) {
            $object->setModifiedByUsername($data->{'modifiedByUsername'});
        }
        if (property_exists($data, 'modifiedDateTime')) {
            $object->setModifiedDateTime($data->{'modifiedDateTime'});
        }
        if (property_exists($data, 'permissionProfileId')) {
            $object->setPermissionProfileId($data->{'permissionProfileId'});
        }
        if (property_exists($data, 'permissionProfileName')) {
            $object->setPermissionProfileName($data->{'permissionProfileName'});
        }
        if (property_exists($data, 'settings')) {
            $object->setSettings($this->serializer->deserialize($data->{'settings'}, 'Surex\\DocuSign\\Model\\AccountRoleSettings', 'raw', $context));
        }
        if (property_exists($data, 'userCount')) {
            $object->setUserCount($data->{'userCount'});
        }
        if (property_exists($data, 'users')) {
            $values = [];
            foreach ($data->{'users'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Users', 'raw', $context);
            }
            $object->setUsers($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getModifiedByUsername()) {
            $data->{'modifiedByUsername'} = $object->getModifiedByUsername();
        }
        if (null !== $object->getModifiedDateTime()) {
            $data->{'modifiedDateTime'} = $object->getModifiedDateTime();
        }
        if (null !== $object->getPermissionProfileId()) {
            $data->{'permissionProfileId'} = $object->getPermissionProfileId();
        }
        if (null !== $object->getPermissionProfileName()) {
            $data->{'permissionProfileName'} = $object->getPermissionProfileName();
        }
        if (null !== $object->getSettings()) {
            $data->{'settings'} = $this->serializer->serialize($object->getSettings(), 'raw', $context);
        }
        if (null !== $object->getUserCount()) {
            $data->{'userCount'} = $object->getUserCount();
        }
        if (null !== $object->getUsers()) {
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'users'} = $values;
        }

        return $data;
    }
}
