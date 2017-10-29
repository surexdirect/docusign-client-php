<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class InlineTemplateNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\InlineTemplate' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\InlineTemplate) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\InlineTemplate();
        if (property_exists($data, 'customFields')) {
            $object->setCustomFields($this->serializer->deserialize($data->{'customFields'}, 'Surex\\DocuSign\\Model\\AccountCustomFields', 'raw', $context));
        }
        if (property_exists($data, 'documents')) {
            $values = [];
            foreach ($data->{'documents'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Document', 'raw', $context);
            }
            $object->setDocuments($values);
        }
        if (property_exists($data, 'envelope')) {
            $object->setEnvelope($this->serializer->deserialize($data->{'envelope'}, 'Surex\\DocuSign\\Model\\Envelopes', 'raw', $context));
        }
        if (property_exists($data, 'recipients')) {
            $object->setRecipients($this->serializer->deserialize($data->{'recipients'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'raw', $context));
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
            $data->{'customFields'} = $this->serializer->serialize($object->getCustomFields(), 'raw', $context);
        }
        if (null !== $object->getDocuments()) {
            $values = [];
            foreach ($object->getDocuments() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'documents'} = $values;
        }
        if (null !== $object->getEnvelope()) {
            $data->{'envelope'} = $this->serializer->serialize($object->getEnvelope(), 'raw', $context);
        }
        if (null !== $object->getRecipients()) {
            $data->{'recipients'} = $this->serializer->serialize($object->getRecipients(), 'raw', $context);
        }
        if (null !== $object->getSequence()) {
            $data->{'sequence'} = $object->getSequence();
        }

        return $data;
    }
}
