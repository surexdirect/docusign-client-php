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

class AccountPasswordStrengthTypeOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\AccountPasswordStrengthTypeOption' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\AccountPasswordStrengthTypeOption;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\AccountPasswordStrengthTypeOption();
        if (property_exists($data, 'minimumLength')) {
            $object->setMinimumLength($data->{'minimumLength'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'passwordIncludeDigit')) {
            $object->setPasswordIncludeDigit($data->{'passwordIncludeDigit'});
        }
        if (property_exists($data, 'passwordIncludeDigitOrSpecialCharacter')) {
            $object->setPasswordIncludeDigitOrSpecialCharacter($data->{'passwordIncludeDigitOrSpecialCharacter'});
        }
        if (property_exists($data, 'passwordIncludeLowerCase')) {
            $object->setPasswordIncludeLowerCase($data->{'passwordIncludeLowerCase'});
        }
        if (property_exists($data, 'passwordIncludeSpecialCharacter')) {
            $object->setPasswordIncludeSpecialCharacter($data->{'passwordIncludeSpecialCharacter'});
        }
        if (property_exists($data, 'passwordIncludeUpperCase')) {
            $object->setPasswordIncludeUpperCase($data->{'passwordIncludeUpperCase'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMinimumLength()) {
            $data->{'minimumLength'} = $object->getMinimumLength();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPasswordIncludeDigit()) {
            $data->{'passwordIncludeDigit'} = $object->getPasswordIncludeDigit();
        }
        if (null !== $object->getPasswordIncludeDigitOrSpecialCharacter()) {
            $data->{'passwordIncludeDigitOrSpecialCharacter'} = $object->getPasswordIncludeDigitOrSpecialCharacter();
        }
        if (null !== $object->getPasswordIncludeLowerCase()) {
            $data->{'passwordIncludeLowerCase'} = $object->getPasswordIncludeLowerCase();
        }
        if (null !== $object->getPasswordIncludeSpecialCharacter()) {
            $data->{'passwordIncludeSpecialCharacter'} = $object->getPasswordIncludeSpecialCharacter();
        }
        if (null !== $object->getPasswordIncludeUpperCase()) {
            $data->{'passwordIncludeUpperCase'} = $object->getPasswordIncludeUpperCase();
        }

        return $data;
    }
}
