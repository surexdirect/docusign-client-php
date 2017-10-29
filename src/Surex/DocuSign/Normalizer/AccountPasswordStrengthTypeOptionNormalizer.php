<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordStrengthTypeOptionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordStrengthTypeOption' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordStrengthTypeOption) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPasswordStrengthTypeOption();
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
