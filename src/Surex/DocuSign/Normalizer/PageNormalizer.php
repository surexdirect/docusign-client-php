<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PageNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Page' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Page) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Page();
        if (property_exists($data, 'dpi')) {
            $object->setDpi($data->{'dpi'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'height')) {
            $object->setHeight($data->{'height'});
        }
        if (property_exists($data, 'imageBytes')) {
            $object->setImageBytes($data->{'imageBytes'});
        }
        if (property_exists($data, 'mimeType')) {
            $object->setMimeType($data->{'mimeType'});
        }
        if (property_exists($data, 'pageId')) {
            $object->setPageId($data->{'pageId'});
        }
        if (property_exists($data, 'sequence')) {
            $object->setSequence($data->{'sequence'});
        }
        if (property_exists($data, 'width')) {
            $object->setWidth($data->{'width'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDpi()) {
            $data->{'dpi'} = $object->getDpi();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getHeight()) {
            $data->{'height'} = $object->getHeight();
        }
        if (null !== $object->getImageBytes()) {
            $data->{'imageBytes'} = $object->getImageBytes();
        }
        if (null !== $object->getMimeType()) {
            $data->{'mimeType'} = $object->getMimeType();
        }
        if (null !== $object->getPageId()) {
            $data->{'pageId'} = $object->getPageId();
        }
        if (null !== $object->getSequence()) {
            $data->{'sequence'} = $object->getSequence();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
        }

        return $data;
    }
}
