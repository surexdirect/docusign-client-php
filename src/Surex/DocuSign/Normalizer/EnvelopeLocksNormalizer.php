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

class EnvelopeLocksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeLocks' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeLocks;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeLocks();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'lockDurationInSeconds')) {
            $object->setLockDurationInSeconds($data->{'lockDurationInSeconds'});
        }
        if (property_exists($data, 'lockedByApp')) {
            $object->setLockedByApp($data->{'lockedByApp'});
        }
        if (property_exists($data, 'lockedByUser')) {
            $object->setLockedByUser($this->denormalizer->denormalize($data->{'lockedByUser'}, 'Surex\\DocuSign\\Model\\UserInfo', 'json', $context));
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getLockDurationInSeconds()) {
            $data->{'lockDurationInSeconds'} = $object->getLockDurationInSeconds();
        }
        if (null !== $object->getLockedByApp()) {
            $data->{'lockedByApp'} = $object->getLockedByApp();
        }
        if (null !== $object->getLockedByUser()) {
            $data->{'lockedByUser'} = $this->normalizer->normalize($object->getLockedByUser(), 'json', $context);
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
