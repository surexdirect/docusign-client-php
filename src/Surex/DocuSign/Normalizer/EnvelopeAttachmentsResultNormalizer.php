<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeAttachmentsResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeAttachmentsResult) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeAttachmentsResult();
        if (property_exists($data, 'attachments')) {
            $values = [];
            foreach ($data->{'attachments'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\EnvelopeAttachments', 'raw', $context);
            }
            $object->setAttachments($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'attachments'} = $values;
        }

        return $data;
    }
}