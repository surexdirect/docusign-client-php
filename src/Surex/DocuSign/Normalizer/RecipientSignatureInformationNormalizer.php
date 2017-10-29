<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientSignatureInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientSignatureInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientSignatureInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientSignatureInformation();
        if (property_exists($data, 'fontStyle')) {
            $object->setFontStyle($data->{'fontStyle'});
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
        if (null !== $object->getFontStyle()) {
            $data->{'fontStyle'} = $object->getFontStyle();
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
