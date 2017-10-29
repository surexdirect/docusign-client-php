<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeAttachmentsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeAttachments' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeAttachments) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeAttachments();
        if (property_exists($data, 'accessControl')) {
            $object->setAccessControl($data->{'accessControl'});
        }
        if (property_exists($data, 'attachmentId')) {
            $object->setAttachmentId($data->{'attachmentId'});
        }
        if (property_exists($data, 'attachmentType')) {
            $object->setAttachmentType($data->{'attachmentType'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'label')) {
            $object->setLabel($data->{'label'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessControl()) {
            $data->{'accessControl'} = $object->getAccessControl();
        }
        if (null !== $object->getAttachmentId()) {
            $data->{'attachmentId'} = $object->getAttachmentId();
        }
        if (null !== $object->getAttachmentType()) {
            $data->{'attachmentType'} = $object->getAttachmentType();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }

        return $data;
    }
}
