<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SignatureProviderRequiredOptionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\SignatureProviderRequiredOption' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\SignatureProviderRequiredOption) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\SignatureProviderRequiredOption();
        if (property_exists($data, 'requiredSignatureProviderOptionIds')) {
            $values = [];
            foreach ($data->{'requiredSignatureProviderOptionIds'} as $value) {
                $values[] = $value;
            }
            $object->setRequiredSignatureProviderOptionIds($values);
        }
        if (property_exists($data, 'signerType')) {
            $object->setSignerType($data->{'signerType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRequiredSignatureProviderOptionIds()) {
            $values = [];
            foreach ($object->getRequiredSignatureProviderOptionIds() as $value) {
                $values[] = $value;
            }
            $data->{'requiredSignatureProviderOptionIds'} = $values;
        }
        if (null !== $object->getSignerType()) {
            $data->{'signerType'} = $object->getSignerType();
        }

        return $data;
    }
}
