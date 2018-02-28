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

class InlineTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\InlineTemplate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\InlineTemplate;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\InlineTemplate();
        if (property_exists($data, 'customFields')) {
            $object->setCustomFields($this->denormalizer->denormalize($data->{'customFields'}, 'Surex\\DocuSign\\Model\\AccountCustomFields', 'json', $context));
        }
        if (property_exists($data, 'documents')) {
            $values = [];
            foreach ($data->{'documents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Document', 'json', $context);
            }
            $object->setDocuments($values);
        }
        if (property_exists($data, 'envelope')) {
            $object->setEnvelope($this->denormalizer->denormalize($data->{'envelope'}, 'Surex\\DocuSign\\Model\\Envelopes', 'json', $context));
        }
        if (property_exists($data, 'recipients')) {
            $object->setRecipients($this->denormalizer->denormalize($data->{'recipients'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json', $context));
        }
        if (property_exists($data, 'sequence')) {
            $object->setSequence($data->{'sequence'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCustomFields()) {
            $data->{'customFields'} = $this->normalizer->normalize($object->getCustomFields(), 'json', $context);
        }
        if (null !== $object->getDocuments()) {
            $values = [];
            foreach ($object->getDocuments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'documents'} = $values;
        }
        if (null !== $object->getEnvelope()) {
            $data->{'envelope'} = $this->normalizer->normalize($object->getEnvelope(), 'json', $context);
        }
        if (null !== $object->getRecipients()) {
            $data->{'recipients'} = $this->normalizer->normalize($object->getRecipients(), 'json', $context);
        }
        if (null !== $object->getSequence()) {
            $data->{'sequence'} = $object->getSequence();
        }

        return $data;
    }
}
