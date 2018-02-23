<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountSignatureProviderOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountSignatureProviderOption' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountSignatureProviderOption;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountSignatureProviderOption();
        if (property_exists($data, 'signatureProviderOptionDisplayName')) {
            $object->setSignatureProviderOptionDisplayName($data->{'signatureProviderOptionDisplayName'});
        }
        if (property_exists($data, 'signatureProviderOptionId')) {
            $object->setSignatureProviderOptionId($data->{'signatureProviderOptionId'});
        }
        if (property_exists($data, 'signatureProviderOptionName')) {
            $object->setSignatureProviderOptionName($data->{'signatureProviderOptionName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSignatureProviderOptionDisplayName()) {
            $data->{'signatureProviderOptionDisplayName'} = $object->getSignatureProviderOptionDisplayName();
        }
        if (null !== $object->getSignatureProviderOptionId()) {
            $data->{'signatureProviderOptionId'} = $object->getSignatureProviderOptionId();
        }
        if (null !== $object->getSignatureProviderOptionName()) {
            $data->{'signatureProviderOptionName'} = $object->getSignatureProviderOptionName();
        }

        return $data;
    }
}
