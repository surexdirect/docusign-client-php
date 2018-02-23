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

class UserAccountManagementGranularInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\UserAccountManagementGranularInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\UserAccountManagementGranularInformation();
        if (property_exists($data, 'canManageAdmins')) {
            $object->setCanManageAdmins($data->{'canManageAdmins'});
        }
        if (property_exists($data, 'canManageAdminsMetadata')) {
            $object->setCanManageAdminsMetadata($this->denormalizer->denormalize($data->{'canManageAdminsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'canManageGroups')) {
            $object->setCanManageGroups($data->{'canManageGroups'});
        }
        if (property_exists($data, 'canManageGroupsMetadata')) {
            $object->setCanManageGroupsMetadata($this->denormalizer->denormalize($data->{'canManageGroupsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'canManageSharing')) {
            $object->setCanManageSharing($data->{'canManageSharing'});
        }
        if (property_exists($data, 'canManageSharingMetadata')) {
            $object->setCanManageSharingMetadata($this->denormalizer->denormalize($data->{'canManageSharingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'canManageUsers')) {
            $object->setCanManageUsers($data->{'canManageUsers'});
        }
        if (property_exists($data, 'canManageUsersMetadata')) {
            $object->setCanManageUsersMetadata($this->denormalizer->denormalize($data->{'canManageUsersMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCanManageAdmins()) {
            $data->{'canManageAdmins'} = $object->getCanManageAdmins();
        }
        if (null !== $object->getCanManageAdminsMetadata()) {
            $data->{'canManageAdminsMetadata'} = $this->normalizer->normalize($object->getCanManageAdminsMetadata(), 'json', $context);
        }
        if (null !== $object->getCanManageGroups()) {
            $data->{'canManageGroups'} = $object->getCanManageGroups();
        }
        if (null !== $object->getCanManageGroupsMetadata()) {
            $data->{'canManageGroupsMetadata'} = $this->normalizer->normalize($object->getCanManageGroupsMetadata(), 'json', $context);
        }
        if (null !== $object->getCanManageSharing()) {
            $data->{'canManageSharing'} = $object->getCanManageSharing();
        }
        if (null !== $object->getCanManageSharingMetadata()) {
            $data->{'canManageSharingMetadata'} = $this->normalizer->normalize($object->getCanManageSharingMetadata(), 'json', $context);
        }
        if (null !== $object->getCanManageUsers()) {
            $data->{'canManageUsers'} = $object->getCanManageUsers();
        }
        if (null !== $object->getCanManageUsersMetadata()) {
            $data->{'canManageUsersMetadata'} = $this->normalizer->normalize($object->getCanManageUsersMetadata(), 'json', $context);
        }

        return $data;
    }
}
