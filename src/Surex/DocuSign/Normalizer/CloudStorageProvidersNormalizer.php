<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CloudStorageProvidersNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CloudStorageProviders' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CloudStorageProviders) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CloudStorageProviders();
        if (property_exists($data, 'storageProviders')) {
            $values = [];
            foreach ($data->{'storageProviders'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\CloudStorageProvider', 'raw', $context);
            }
            $object->setStorageProviders($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStorageProviders()) {
            $values = [];
            foreach ($object->getStorageProviders() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'storageProviders'} = $values;
        }

        return $data;
    }
}
