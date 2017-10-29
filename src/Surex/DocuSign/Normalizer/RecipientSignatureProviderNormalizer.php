<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientSignatureProviderNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientSignatureProvider' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientSignatureProvider) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientSignatureProvider();
        if (property_exists($data, 'signatureProviderName')) {
            $object->setSignatureProviderName($data->{'signatureProviderName'});
        }
        if (property_exists($data, 'signatureProviderOptions')) {
            $object->setSignatureProviderOptions($this->serializer->deserialize($data->{'signatureProviderOptions'}, 'Surex\\DocuSign\\Model\\RecipientSignatureProviderOptions', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSignatureProviderName()) {
            $data->{'signatureProviderName'} = $object->getSignatureProviderName();
        }
        if (null !== $object->getSignatureProviderOptions()) {
            $data->{'signatureProviderOptions'} = $this->serializer->serialize($object->getSignatureProviderOptions(), 'raw', $context);
        }

        return $data;
    }
}
