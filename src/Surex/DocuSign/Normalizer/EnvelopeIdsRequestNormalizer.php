<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeIdsRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeIdsRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeIdsRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeIdsRequest();
        if (property_exists($data, 'envelopeIds')) {
            $values = [];
            foreach ($data->{'envelopeIds'} as $value) {
                $values[] = $value;
            }
            $object->setEnvelopeIds($values);
        }
        if (property_exists($data, 'transactionIds')) {
            $values_1 = [];
            foreach ($data->{'transactionIds'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTransactionIds($values_1);
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
        if (null !== $object->getTransactionIds()) {
            $values_1 = [];
            foreach ($object->getTransactionIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'transactionIds'} = $values_1;
        }

        return $data;
    }
}
