<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeEventNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeEvent' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeEvent) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeEvent();
        if (property_exists($data, 'envelopeEventStatusCode')) {
            $object->setEnvelopeEventStatusCode($data->{'envelopeEventStatusCode'});
        }
        if (property_exists($data, 'includeDocuments')) {
            $object->setIncludeDocuments($data->{'includeDocuments'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopeEventStatusCode()) {
            $data->{'envelopeEventStatusCode'} = $object->getEnvelopeEventStatusCode();
        }
        if (null !== $object->getIncludeDocuments()) {
            $data->{'includeDocuments'} = $object->getIncludeDocuments();
        }

        return $data;
    }
}
