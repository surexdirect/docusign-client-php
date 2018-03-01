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

class SignatureProviderRequiredOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\SignatureProviderRequiredOption' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\SignatureProviderRequiredOption;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\SignatureProviderRequiredOption();
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
