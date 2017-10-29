<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientFormDataNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientFormData' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientFormData) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientFormData();
        if (property_exists($data, 'declinedTime')) {
            $object->setDeclinedTime($data->{'declinedTime'});
        }
        if (property_exists($data, 'deliveredTime')) {
            $object->setDeliveredTime($data->{'deliveredTime'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'formData')) {
            $values = [];
            foreach ($data->{'formData'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setFormData($values);
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'sentTime')) {
            $object->setSentTime($data->{'sentTime'});
        }
        if (property_exists($data, 'signedTime')) {
            $object->setSignedTime($data->{'signedTime'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDeclinedTime()) {
            $data->{'declinedTime'} = $object->getDeclinedTime();
        }
        if (null !== $object->getDeliveredTime()) {
            $data->{'deliveredTime'} = $object->getDeliveredTime();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getFormData()) {
            $values = [];
            foreach ($object->getFormData() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'formData'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getSentTime()) {
            $data->{'sentTime'} = $object->getSentTime();
        }
        if (null !== $object->getSignedTime()) {
            $data->{'signedTime'} = $object->getSignedTime();
        }

        return $data;
    }
}
