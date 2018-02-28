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

class EnvelopeFormDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeFormData' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeFormData;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeFormData();
        if (property_exists($data, 'emailSubject')) {
            $object->setEmailSubject($data->{'emailSubject'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'formData')) {
            $values = [];
            foreach ($data->{'formData'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setFormData($values);
        }
        if (property_exists($data, 'recipientFormData')) {
            $values_1 = [];
            foreach ($data->{'recipientFormData'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\RecipientFormData', 'json', $context);
            }
            $object->setRecipientFormData($values_1);
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmailSubject()) {
            $data->{'emailSubject'} = $object->getEmailSubject();
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getFormData()) {
            $values = [];
            foreach ($object->getFormData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'formData'} = $values;
        }
        if (null !== $object->getRecipientFormData()) {
            $values_1 = [];
            foreach ($object->getRecipientFormData() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'recipientFormData'} = $values_1;
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }

        return $data;
    }
}
