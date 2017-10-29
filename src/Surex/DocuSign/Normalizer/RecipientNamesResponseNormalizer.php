<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientNamesResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientNamesResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientNamesResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientNamesResponse();
        if (property_exists($data, 'multipleUsers')) {
            $object->setMultipleUsers($data->{'multipleUsers'});
        }
        if (property_exists($data, 'recipientNames')) {
            $values = [];
            foreach ($data->{'recipientNames'} as $value) {
                $values[] = $value;
            }
            $object->setRecipientNames($values);
        }
        if (property_exists($data, 'reservedRecipientEmail')) {
            $object->setReservedRecipientEmail($data->{'reservedRecipientEmail'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMultipleUsers()) {
            $data->{'multipleUsers'} = $object->getMultipleUsers();
        }
        if (null !== $object->getRecipientNames()) {
            $values = [];
            foreach ($object->getRecipientNames() as $value) {
                $values[] = $value;
            }
            $data->{'recipientNames'} = $values;
        }
        if (null !== $object->getReservedRecipientEmail()) {
            $data->{'reservedRecipientEmail'} = $object->getReservedRecipientEmail();
        }

        return $data;
    }
}
