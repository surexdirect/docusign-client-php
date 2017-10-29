<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DocumentVisibilityNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\DocumentVisibility' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\DocumentVisibility) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\DocumentVisibility();
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'rights')) {
            $object->setRights($data->{'rights'});
        }
        if (property_exists($data, 'visible')) {
            $object->setVisible($data->{'visible'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getRights()) {
            $data->{'rights'} = $object->getRights();
        }
        if (null !== $object->getVisible()) {
            $data->{'visible'} = $object->getVisible();
        }

        return $data;
    }
}
