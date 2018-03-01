<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Page' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Page;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Page();
        if (property_exists($data, 'dpi')) {
            $object->setDpi($data->{'dpi'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
