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

class NotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Notification' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Notification;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Notification();
        if (property_exists($data, 'expirations')) {
            $object->setExpirations($this->denormalizer->denormalize($data->{'expirations'}, 'Surex\\DocuSign\\Model\\Expirations', 'json', $context));
        }
        if (property_exists($data, 'reminders')) {
            $object->setReminders($this->denormalizer->denormalize($data->{'reminders'}, 'Surex\\DocuSign\\Model\\Reminders', 'json', $context));
        }
        if (property_exists($data, 'useAccountDefaults')) {
            $object->setUseAccountDefaults($data->{'useAccountDefaults'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExpirations()) {
            $data->{'expirations'} = $this->normalizer->normalize($object->getExpirations(), 'json', $context);
        }
        if (null !== $object->getReminders()) {
            $data->{'reminders'} = $this->normalizer->normalize($object->getReminders(), 'json', $context);
        }
        if (null !== $object->getUseAccountDefaults()) {
            $data->{'useAccountDefaults'} = $object->getUseAccountDefaults();
        }

        return $data;
    }
}
