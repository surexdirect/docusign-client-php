<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserAccountManagementGranularInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserAccountManagementGranularInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserAccountManagementGranularInformation();
        if (property_exists($data, 'canManageAdmins')) {
            $object->setCanManageAdmins($data->{'canManageAdmins'});
        }
        if (property_exists($data, 'canManageAdminsMetadata')) {
            $object->setCanManageAdminsMetadata($this->serializer->deserialize($data->{'canManageAdminsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'canManageGroups')) {
            $object->setCanManageGroups($data->{'canManageGroups'});
        }
        if (property_exists($data, 'canManageGroupsMetadata')) {
            $object->setCanManageGroupsMetadata($this->serializer->deserialize($data->{'canManageGroupsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'canManageSharing')) {
            $object->setCanManageSharing($data->{'canManageSharing'});
        }
        if (property_exists($data, 'canManageSharingMetadata')) {
            $object->setCanManageSharingMetadata($this->serializer->deserialize($data->{'canManageSharingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'canManageUsers')) {
            $object->setCanManageUsers($data->{'canManageUsers'});
        }
        if (property_exists($data, 'canManageUsersMetadata')) {
            $object->setCanManageUsersMetadata($this->serializer->deserialize($data->{'canManageUsersMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
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
            $data->{'canManageAdminsMetadata'} = $this->serializer->serialize($object->getCanManageAdminsMetadata(), 'raw', $context);
        }
        if (null !== $object->getCanManageGroups()) {
            $data->{'canManageGroups'} = $object->getCanManageGroups();
        }
        if (null !== $object->getCanManageGroupsMetadata()) {
            $data->{'canManageGroupsMetadata'} = $this->serializer->serialize($object->getCanManageGroupsMetadata(), 'raw', $context);
        }
        if (null !== $object->getCanManageSharing()) {
            $data->{'canManageSharing'} = $object->getCanManageSharing();
        }
        if (null !== $object->getCanManageSharingMetadata()) {
            $data->{'canManageSharingMetadata'} = $this->serializer->serialize($object->getCanManageSharingMetadata(), 'raw', $context);
        }
        if (null !== $object->getCanManageUsers()) {
            $data->{'canManageUsers'} = $object->getCanManageUsers();
        }
        if (null !== $object->getCanManageUsersMetadata()) {
            $data->{'canManageUsersMetadata'} = $this->serializer->serialize($object->getCanManageUsersMetadata(), 'raw', $context);
        }

        return $data;
    }
}
