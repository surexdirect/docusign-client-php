<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CaptiveRecipientInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CaptiveRecipientInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CaptiveRecipientInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CaptiveRecipientInformation();
        if (property_exists($data, 'captiveRecipients')) {
            $values = [];
            foreach ($data->{'captiveRecipients'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\CaptiveRecipient', 'raw', $context);
            }
            $object->setCaptiveRecipients($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCaptiveRecipients()) {
            $values = [];
            foreach ($object->getCaptiveRecipients() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'captiveRecipients'} = $values;
        }

        return $data;
    }
}
