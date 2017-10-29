<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class GroupNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Group' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Group) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Group();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'groupId')) {
            $object->setGroupId($data->{'groupId'});
        }
        if (property_exists($data, 'groupName')) {
            $object->setGroupName($data->{'groupName'});
        }
        if (property_exists($data, 'groupType')) {
            $object->setGroupType($data->{'groupType'});
        }
        if (property_exists($data, 'permissionProfileId')) {
            $object->setPermissionProfileId($data->{'permissionProfileId'});
        }
        if (property_exists($data, 'users')) {
            $values = [];
            foreach ($data->{'users'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context);
            }
            $object->setUsers($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getGroupId()) {
            $data->{'groupId'} = $object->getGroupId();
        }
        if (null !== $object->getGroupName()) {
            $data->{'groupName'} = $object->getGroupName();
        }
        if (null !== $object->getGroupType()) {
            $data->{'groupType'} = $object->getGroupType();
        }
        if (null !== $object->getPermissionProfileId()) {
            $data->{'permissionProfileId'} = $object->getPermissionProfileId();
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
