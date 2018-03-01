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

class UserSignatureDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\UserSignatureDefinition' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\UserSignatureDefinition;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\UserSignatureDefinition();
        if (property_exists($data, 'signatureFont')) {
            $object->setSignatureFont($data->{'signatureFont'});
        }
        if (property_exists($data, 'signatureId')) {
            $object->setSignatureId($data->{'signatureId'});
        }
        if (property_exists($data, 'signatureInitials')) {
            $object->setSignatureInitials($data->{'signatureInitials'});
        }
        if (property_exists($data, 'signatureName')) {
            $object->setSignatureName($data->{'signatureName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSignatureFont()) {
            $data->{'signatureFont'} = $object->getSignatureFont();
        }
        if (null !== $object->getSignatureId()) {
            $data->{'signatureId'} = $object->getSignatureId();
        }
        if (null !== $object->getSignatureInitials()) {
            $data->{'signatureInitials'} = $object->getSignatureInitials();
        }
        if (null !== $object->getSignatureName()) {
            $data->{'signatureName'} = $object->getSignatureName();
        }

        return $data;
    }
}
