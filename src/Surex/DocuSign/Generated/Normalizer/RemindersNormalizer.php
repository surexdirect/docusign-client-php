<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RemindersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Reminders' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Reminders;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Reminders();
        if (property_exists($data, 'reminderDelay')) {
            $object->setReminderDelay($data->{'reminderDelay'});
        }
        if (property_exists($data, 'reminderEnabled')) {
            $object->setReminderEnabled($data->{'reminderEnabled'});
        }
        if (property_exists($data, 'reminderFrequency')) {
            $object->setReminderFrequency($data->{'reminderFrequency'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReminderDelay()) {
            $data->{'reminderDelay'} = $object->getReminderDelay();
        }
        if (null !== $object->getReminderEnabled()) {
            $data->{'reminderEnabled'} = $object->getReminderEnabled();
        }
        if (null !== $object->getReminderFrequency()) {
            $data->{'reminderFrequency'} = $object->getReminderFrequency();
        }

        return $data;
    }
}
