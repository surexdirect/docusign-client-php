<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountSignatureProviderOptionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountSignatureProviderOption' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountSignatureProviderOption) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
