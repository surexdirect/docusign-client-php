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

class EnvelopeDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeDocuments' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeDocuments;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeDocuments();
        if (property_exists($data, 'envelopeDocuments')) {
            $values = [];
            foreach ($data->{'envelopeDocuments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\EnvelopeDocument', 'json', $context);
            }
            $object->setEnvelopeDocuments($values);
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopeDocuments()) {
            $values = [];
            foreach ($object->getEnvelopeDocuments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'envelopeDocuments'} = $values;
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }

        return $data;
    }
}
