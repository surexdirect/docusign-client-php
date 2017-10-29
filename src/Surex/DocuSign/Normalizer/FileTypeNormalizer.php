<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class FileTypeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\FileType' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\FileType) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\FileType();
        if (property_exists($data, 'fileExtension')) {
            $object->setFileExtension($data->{'fileExtension'});
        }
        if (property_exists($data, 'mimeType')) {
            $object->setMimeType($data->{'mimeType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFileExtension()) {
            $data->{'fileExtension'} = $object->getFileExtension();
        }
        if (null !== $object->getMimeType()) {
            $data->{'mimeType'} = $object->getMimeType();
        }

        return $data;
    }
}
