<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserSignatureDefinitionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserSignatureDefinition' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserSignatureDefinition) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserSignatureDefinition();
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
