<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeLocksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeLocks' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeLocks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeLocks();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'lockDurationInSeconds')) {
            $object->setLockDurationInSeconds($data->{'lockDurationInSeconds'});
        }
        if (property_exists($data, 'lockedByApp')) {
            $object->setLockedByApp($data->{'lockedByApp'});
        }
        if (property_exists($data, 'lockedByUser')) {
            $object->setLockedByUser($this->serializer->deserialize($data->{'lockedByUser'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'lockedUntilDateTime')) {
            $object->setLockedUntilDateTime($data->{'lockedUntilDateTime'});
        }
        if (property_exists($data, 'lockToken')) {
            $object->setLockToken($data->{'lockToken'});
        }
        if (property_exists($data, 'lockType')) {
            $object->setLockType($data->{'lockType'});
        }
        if (property_exists($data, 'useScratchPad')) {
            $object->setUseScratchPad($data->{'useScratchPad'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getLockDurationInSeconds()) {
            $data->{'lockDurationInSeconds'} = $object->getLockDurationInSeconds();
        }
        if (null !== $object->getLockedByApp()) {
            $data->{'lockedByApp'} = $object->getLockedByApp();
        }
        if (null !== $object->getLockedByUser()) {
            $data->{'lockedByUser'} = $this->serializer->serialize($object->getLockedByUser(), 'raw', $context);
        }
        if (null !== $object->getLockedUntilDateTime()) {
            $data->{'lockedUntilDateTime'} = $object->getLockedUntilDateTime();
        }
        if (null !== $object->getLockToken()) {
            $data->{'lockToken'} = $object->getLockToken();
        }
        if (null !== $object->getLockType()) {
            $data->{'lockType'} = $object->getLockType();
        }
        if (null !== $object->getUseScratchPad()) {
            $data->{'useScratchPad'} = $object->getUseScratchPad();
        }

        return $data;
    }
}
