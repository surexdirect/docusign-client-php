<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeEmailSettingsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeEmailSettings' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeEmailSettings) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeEmailSettings();
        if (property_exists($data, 'bccEmailAddresses')) {
            $values = [];
            foreach ($data->{'bccEmailAddresses'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BccEmailAddress', 'raw', $context);
            }
            $object->setBccEmailAddresses($values);
        }
        if (property_exists($data, 'replyEmailAddressOverride')) {
            $object->setReplyEmailAddressOverride($data->{'replyEmailAddressOverride'});
        }
        if (property_exists($data, 'replyEmailNameOverride')) {
            $object->setReplyEmailNameOverride($data->{'replyEmailNameOverride'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBccEmailAddresses()) {
            $values = [];
            foreach ($object->getBccEmailAddresses() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'bccEmailAddresses'} = $values;
        }
        if (null !== $object->getReplyEmailAddressOverride()) {
            $data->{'replyEmailAddressOverride'} = $object->getReplyEmailAddressOverride();
        }
        if (null !== $object->getReplyEmailNameOverride()) {
            $data->{'replyEmailNameOverride'} = $object->getReplyEmailNameOverride();
        }

        return $data;
    }
}
