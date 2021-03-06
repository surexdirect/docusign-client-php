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

class RecipientSignatureProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureProvider' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\RecipientSignatureProvider;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\RecipientSignatureProvider();
        if (property_exists($data, 'signatureProviderName')) {
            $object->setSignatureProviderName($data->{'signatureProviderName'});
        }
        if (property_exists($data, 'signatureProviderOptions')) {
            $object->setSignatureProviderOptions($this->denormalizer->denormalize($data->{'signatureProviderOptions'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureProviderOptions', 'json', $context));
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
            $data->{'signatureProviderOptions'} = $this->normalizer->normalize($object->getSignatureProviderOptions(), 'json', $context);
        }

        return $data;
    }
}
