<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EnvelopeEmailSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeEmailSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeEmailSettings;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeEmailSettings();
        if (property_exists($data, 'bccEmailAddresses')) {
            $values = [];
            foreach ($data->{'bccEmailAddresses'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\BccEmailAddress', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
