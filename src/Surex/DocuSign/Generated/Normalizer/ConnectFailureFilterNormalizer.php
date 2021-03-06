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

class ConnectFailureFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\ConnectFailureFilter' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\ConnectFailureFilter;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\ConnectFailureFilter();
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
