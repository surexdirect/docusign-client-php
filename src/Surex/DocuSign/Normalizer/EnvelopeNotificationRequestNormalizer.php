<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeNotificationRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeNotificationRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeNotificationRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeNotificationRequest();
        if (property_exists($data, 'expirations')) {
            $object->setExpirations($this->serializer->deserialize($data->{'expirations'}, 'Surex\\DocuSign\\Model\\Expirations', 'raw', $context));
        }
        if (property_exists($data, 'reminders')) {
            $object->setReminders($this->serializer->deserialize($data->{'reminders'}, 'Surex\\DocuSign\\Model\\Reminders', 'raw', $context));
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
            $data->{'expirations'} = $this->serializer->serialize($object->getExpirations(), 'raw', $context);
        }
        if (null !== $object->getReminders()) {
            $data->{'reminders'} = $this->serializer->serialize($object->getReminders(), 'raw', $context);
        }
        if (null !== $object->getUseAccountDefaults()) {
            $data->{'useAccountDefaults'} = $object->getUseAccountDefaults();
        }

        return $data;
    }
}
