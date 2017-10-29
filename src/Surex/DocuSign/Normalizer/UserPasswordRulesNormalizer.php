<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserPasswordRulesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserPasswordRules' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserPasswordRules) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserPasswordRules();
        if (property_exists($data, 'passwordRules')) {
            $object->setPasswordRules($this->serializer->deserialize($data->{'passwordRules'}, 'Surex\\DocuSign\\Model\\AccountPasswordRules', 'raw', $context));
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPasswordRules()) {
            $data->{'passwordRules'} = $this->serializer->serialize($object->getPasswordRules(), 'raw', $context);
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
