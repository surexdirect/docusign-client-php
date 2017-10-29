<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ConnectFailureFilterNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ConnectFailureFilter' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ConnectFailureFilter) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ConnectFailureFilter();
        if (property_exists($data, 'envelopeIds')) {
            $values = [];
            foreach ($data->{'envelopeIds'} as $value) {
                $values[] = $value;
            }
            $object->setEnvelopeIds($values);
        }
        if (property_exists($data, 'synchronous')) {
            $object->setSynchronous($data->{'synchronous'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopeIds()) {
            $values = [];
            foreach ($object->getEnvelopeIds() as $value) {
                $values[] = $value;
            }
            $data->{'envelopeIds'} = $values;
        }
        if (null !== $object->getSynchronous()) {
            $data->{'synchronous'} = $object->getSynchronous();
        }

        return $data;
    }
}
