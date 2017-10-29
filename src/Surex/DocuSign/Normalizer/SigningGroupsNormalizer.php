<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SigningGroupsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\SigningGroups' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\SigningGroups) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\SigningGroups();
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdBy')) {
            $object->setCreatedBy($data->{'createdBy'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'groupEmail')) {
            $object->setGroupEmail($data->{'groupEmail'});
        }
        if (property_exists($data, 'groupName')) {
            $object->setGroupName($data->{'groupName'});
        }
        if (property_exists($data, 'groupType')) {
            $object->setGroupType($data->{'groupType'});
        }
        if (property_exists($data, 'modified')) {
            $object->setModified($data->{'modified'});
        }
        if (property_exists($data, 'modifiedBy')) {
            $object->setModifiedBy($data->{'modifiedBy'});
        }
        if (property_exists($data, 'signingGroupId')) {
            $object->setSigningGroupId($data->{'signingGroupId'});
        }
        if (property_exists($data, 'users')) {
            $values = [];
            foreach ($data->{'users'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\SigningGroupUser', 'raw', $context);
            }
            $object->setUsers($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreatedBy()) {
            $data->{'createdBy'} = $object->getCreatedBy();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getGroupEmail()) {
            $data->{'groupEmail'} = $object->getGroupEmail();
        }
        if (null !== $object->getGroupName()) {
            $data->{'groupName'} = $object->getGroupName();
        }
        if (null !== $object->getGroupType()) {
            $data->{'groupType'} = $object->getGroupType();
        }
        if (null !== $object->getModified()) {
            $data->{'modified'} = $object->getModified();
        }
        if (null !== $object->getModifiedBy()) {
            $data->{'modifiedBy'} = $object->getModifiedBy();
        }
        if (null !== $object->getSigningGroupId()) {
            $data->{'signingGroupId'} = $object->getSigningGroupId();
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
