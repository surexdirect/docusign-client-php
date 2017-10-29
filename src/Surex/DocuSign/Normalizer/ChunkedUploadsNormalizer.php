<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ChunkedUploadsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ChunkedUploads' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ChunkedUploads) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ChunkedUploads();
        if (property_exists($data, 'checksum')) {
            $object->setChecksum($data->{'checksum'});
        }
        if (property_exists($data, 'chunkedUploadId')) {
            $object->setChunkedUploadId($data->{'chunkedUploadId'});
        }
        if (property_exists($data, 'chunkedUploadParts')) {
            $values = [];
            foreach ($data->{'chunkedUploadParts'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ChunkedUploadPart', 'raw', $context);
            }
            $object->setChunkedUploadParts($values);
        }
        if (property_exists($data, 'chunkedUploadUri')) {
            $object->setChunkedUploadUri($data->{'chunkedUploadUri'});
        }
        if (property_exists($data, 'committed')) {
            $object->setCommitted($data->{'committed'});
        }
        if (property_exists($data, 'expirationDateTime')) {
            $object->setExpirationDateTime($data->{'expirationDateTime'});
        }
        if (property_exists($data, 'maxChunkedUploadParts')) {
            $object->setMaxChunkedUploadParts($data->{'maxChunkedUploadParts'});
        }
        if (property_exists($data, 'maxTotalSize')) {
            $object->setMaxTotalSize($data->{'maxTotalSize'});
        }
        if (property_exists($data, 'totalSize')) {
            $object->setTotalSize($data->{'totalSize'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChecksum()) {
            $data->{'checksum'} = $object->getChecksum();
        }
        if (null !== $object->getChunkedUploadId()) {
            $data->{'chunkedUploadId'} = $object->getChunkedUploadId();
        }
        if (null !== $object->getChunkedUploadParts()) {
            $values = [];
            foreach ($object->getChunkedUploadParts() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'chunkedUploadParts'} = $values;
        }
        if (null !== $object->getChunkedUploadUri()) {
            $data->{'chunkedUploadUri'} = $object->getChunkedUploadUri();
        }
        if (null !== $object->getCommitted()) {
            $data->{'committed'} = $object->getCommitted();
        }
        if (null !== $object->getExpirationDateTime()) {
            $data->{'expirationDateTime'} = $object->getExpirationDateTime();
        }
        if (null !== $object->getMaxChunkedUploadParts()) {
            $data->{'maxChunkedUploadParts'} = $object->getMaxChunkedUploadParts();
        }
        if (null !== $object->getMaxTotalSize()) {
            $data->{'maxTotalSize'} = $object->getMaxTotalSize();
        }
        if (null !== $object->getTotalSize()) {
            $data->{'totalSize'} = $object->getTotalSize();
        }

        return $data;
    }
}
