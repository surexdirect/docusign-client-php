<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ChunkedUploadRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ChunkedUploadRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ChunkedUploadRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ChunkedUploadRequest();
        if (property_exists($data, 'chunkedUploadId')) {
            $object->setChunkedUploadId($data->{'chunkedUploadId'});
        }
        if (property_exists($data, 'data')) {
            $object->setData($data->{'data'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChunkedUploadId()) {
            $data->{'chunkedUploadId'} = $object->getChunkedUploadId();
        }
        if (null !== $object->getData()) {
            $data->{'data'} = $object->getData();
        }

        return $data;
    }
}
