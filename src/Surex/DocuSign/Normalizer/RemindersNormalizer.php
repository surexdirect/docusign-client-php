<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RemindersNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Reminders' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Reminders) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Reminders();
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
