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

class RecipientNamesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\RecipientNamesResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\RecipientNamesResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
