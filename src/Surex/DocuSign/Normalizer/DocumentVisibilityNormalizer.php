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

class DocumentVisibilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\DocumentVisibility' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\DocumentVisibility;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\DocumentVisibility();
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
