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

class PowerFormFormDataRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PowerFormFormDataRecipient' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PowerFormFormDataRecipient;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\PowerFormFormDataRecipient();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'formData')) {
            $values = [];
            foreach ($data->{'formData'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setFormData($values);
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getFormData()) {
            $values = [];
            foreach ($object->getFormData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'formData'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }

        return $data;
    }
}
