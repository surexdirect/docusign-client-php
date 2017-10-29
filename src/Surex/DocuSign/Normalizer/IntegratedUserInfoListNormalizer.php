<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class IntegratedUserInfoListNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\IntegratedUserInfoList' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\IntegratedUserInfoList) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\IntegratedUserInfoList();
        if (property_exists($data, 'allUsersSelected')) {
            $object->setAllUsersSelected($data->{'allUsersSelected'});
        }
        if (property_exists($data, 'endPosition')) {
            $object->setEndPosition($data->{'endPosition'});
        }
        if (property_exists($data, 'nextUri')) {
            $object->setNextUri($data->{'nextUri'});
        }
        if (property_exists($data, 'previousUri')) {
            $object->setPreviousUri($data->{'previousUri'});
        }
        if (property_exists($data, 'resultSetSize')) {
            $object->setResultSetSize($data->{'resultSetSize'});
        }
        if (property_exists($data, 'startPosition')) {
            $object->setStartPosition($data->{'startPosition'});
        }
        if (property_exists($data, 'totalSetSize')) {
            $object->setTotalSetSize($data->{'totalSetSize'});
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
        if (null !== $object->getAllUsersSelected()) {
            $data->{'allUsersSelected'} = $object->getAllUsersSelected();
        }
        if (null !== $object->getEndPosition()) {
            $data->{'endPosition'} = $object->getEndPosition();
        }
        if (null !== $object->getNextUri()) {
            $data->{'nextUri'} = $object->getNextUri();
        }
        if (null !== $object->getPreviousUri()) {
            $data->{'previousUri'} = $object->getPreviousUri();
        }
        if (null !== $object->getResultSetSize()) {
            $data->{'resultSetSize'} = $object->getResultSetSize();
        }
        if (null !== $object->getStartPosition()) {
            $data->{'startPosition'} = $object->getStartPosition();
        }
        if (null !== $object->getTotalSetSize()) {
            $data->{'totalSetSize'} = $object->getTotalSetSize();
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
