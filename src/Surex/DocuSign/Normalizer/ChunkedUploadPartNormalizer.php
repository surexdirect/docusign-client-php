<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ChunkedUploadPartNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ChunkedUploadPart' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ChunkedUploadPart) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ChunkedUploadPart();
        if (property_exists($data, 'sequence')) {
            $object->setSequence($data->{'sequence'});
        }
        if (property_exists($data, 'size')) {
            $object->setSize($data->{'size'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSequence()) {
            $data->{'sequence'} = $object->getSequence();
        }
        if (null !== $object->getSize()) {
            $data->{'size'} = $object->getSize();
        }

        return $data;
    }
}
