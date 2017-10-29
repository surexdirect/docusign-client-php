<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientEventNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientEvent' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientEvent) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientEvent();
        if (property_exists($data, 'includeDocuments')) {
            $object->setIncludeDocuments($data->{'includeDocuments'});
        }
        if (property_exists($data, 'recipientEventStatusCode')) {
            $object->setRecipientEventStatusCode($data->{'recipientEventStatusCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIncludeDocuments()) {
            $data->{'includeDocuments'} = $object->getIncludeDocuments();
        }
        if (null !== $object->getRecipientEventStatusCode()) {
            $data->{'recipientEventStatusCode'} = $object->getRecipientEventStatusCode();
        }

        return $data;
    }
}
