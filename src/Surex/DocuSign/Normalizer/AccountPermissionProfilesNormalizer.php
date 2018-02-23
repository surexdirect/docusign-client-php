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

class AccountPermissionProfilesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountPermissionProfiles' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountPermissionProfiles;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
            $object->setSettings($this->denormalizer->denormalize($data->{'settings'}, 'Surex\\DocuSign\\Model\\AccountRoleSettings', 'json', $context));
        }
        if (property_exists($data, 'userCount')) {
            $object->setUserCount($data->{'userCount'});
        }
        if (property_exists($data, 'users')) {
            $values = [];
            foreach ($data->{'users'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Users', 'json', $context);
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
            $data->{'settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getUserCount()) {
            $data->{'userCount'} = $object->getUserCount();
        }
        if (null !== $object->getUsers()) {
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'users'} = $values;
        }

        return $data;
    }
}
