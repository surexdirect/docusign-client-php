<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserPasswordRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\UserPasswordRules' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\UserPasswordRules;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\UserPasswordRules();
        if (property_exists($data, 'passwordRules')) {
            $object->setPasswordRules($this->denormalizer->denormalize($data->{'passwordRules'}, 'Surex\\DocuSign\\Model\\AccountPasswordRules', 'json', $context));
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
            $data->{'passwordRules'} = $this->normalizer->normalize($object->getPasswordRules(), 'json', $context);
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
