<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class LockRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\LockRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\LockRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\LockRequest();
        if (property_exists($data, 'lockDurationInSeconds')) {
            $object->setLockDurationInSeconds($data->{'lockDurationInSeconds'});
        }
        if (property_exists($data, 'lockedByApp')) {
            $object->setLockedByApp($data->{'lockedByApp'});
        }
        if (property_exists($data, 'lockType')) {
            $object->setLockType($data->{'lockType'});
        }
        if (property_exists($data, 'templatePassword')) {
            $object->setTemplatePassword($data->{'templatePassword'});
        }
        if (property_exists($data, 'useScratchPad')) {
            $object->setUseScratchPad($data->{'useScratchPad'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLockDurationInSeconds()) {
            $data->{'lockDurationInSeconds'} = $object->getLockDurationInSeconds();
        }
        if (null !== $object->getLockedByApp()) {
            $data->{'lockedByApp'} = $object->getLockedByApp();
        }
        if (null !== $object->getLockType()) {
            $data->{'lockType'} = $object->getLockType();
        }
        if (null !== $object->getTemplatePassword()) {
            $data->{'templatePassword'} = $object->getTemplatePassword();
        }
        if (null !== $object->getUseScratchPad()) {
            $data->{'useScratchPad'} = $object->getUseScratchPad();
        }

        return $data;
    }
}
