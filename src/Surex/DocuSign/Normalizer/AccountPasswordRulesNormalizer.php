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

class AccountPasswordRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountPasswordRules' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountPasswordRules;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountPasswordRules();
        if (property_exists($data, 'expirePassword')) {
            $object->setExpirePassword($data->{'expirePassword'});
        }
        if (property_exists($data, 'expirePasswordDays')) {
            $object->setExpirePasswordDays($data->{'expirePasswordDays'});
        }
        if (property_exists($data, 'expirePasswordDaysMetadata')) {
            $object->setExpirePasswordDaysMetadata($this->denormalizer->denormalize($data->{'expirePasswordDaysMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordExpirePasswordDays', 'json', $context));
        }
        if (property_exists($data, 'lockoutDurationMinutes')) {
            $object->setLockoutDurationMinutes($data->{'lockoutDurationMinutes'});
        }
        if (property_exists($data, 'lockoutDurationMinutesMetadata')) {
            $object->setLockoutDurationMinutesMetadata($this->denormalizer->denormalize($data->{'lockoutDurationMinutesMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordLockoutDurationMinutes', 'json', $context));
        }
        if (property_exists($data, 'lockoutDurationType')) {
            $object->setLockoutDurationType($data->{'lockoutDurationType'});
        }
        if (property_exists($data, 'lockoutDurationTypeMetadata')) {
            $object->setLockoutDurationTypeMetadata($this->denormalizer->denormalize($data->{'lockoutDurationTypeMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordLockoutDurationType', 'json', $context));
        }
        if (property_exists($data, 'minimumPasswordAgeDays')) {
            $object->setMinimumPasswordAgeDays($data->{'minimumPasswordAgeDays'});
        }
        if (property_exists($data, 'minimumPasswordAgeDaysMetadata')) {
            $object->setMinimumPasswordAgeDaysMetadata($this->denormalizer->denormalize($data->{'minimumPasswordAgeDaysMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordMinimumPasswordAgeDays', 'json', $context));
        }
        if (property_exists($data, 'minimumPasswordLength')) {
            $object->setMinimumPasswordLength($data->{'minimumPasswordLength'});
        }
        if (property_exists($data, 'minimumPasswordLengthMetadata')) {
            $object->setMinimumPasswordLengthMetadata($this->denormalizer->denormalize($data->{'minimumPasswordLengthMetadata'}, 'Surex\\DocuSign\\Model\\AccountMinimumPasswordLength', 'json', $context));
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
        if (property_exists($data, 'passwordStrengthType')) {
            $object->setPasswordStrengthType($data->{'passwordStrengthType'});
        }
        if (property_exists($data, 'passwordStrengthTypeMetadata')) {
            $object->setPasswordStrengthTypeMetadata($this->denormalizer->denormalize($data->{'passwordStrengthTypeMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordStrengthType', 'json', $context));
        }
        if (property_exists($data, 'questionsRequired')) {
            $object->setQuestionsRequired($data->{'questionsRequired'});
        }
        if (property_exists($data, 'questionsRequiredMetadata')) {
            $object->setQuestionsRequiredMetadata($this->denormalizer->denormalize($data->{'questionsRequiredMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordQuestionsRequired', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExpirePassword()) {
            $data->{'expirePassword'} = $object->getExpirePassword();
        }
        if (null !== $object->getExpirePasswordDays()) {
            $data->{'expirePasswordDays'} = $object->getExpirePasswordDays();
        }
        if (null !== $object->getExpirePasswordDaysMetadata()) {
            $data->{'expirePasswordDaysMetadata'} = $this->normalizer->normalize($object->getExpirePasswordDaysMetadata(), 'json', $context);
        }
        if (null !== $object->getLockoutDurationMinutes()) {
            $data->{'lockoutDurationMinutes'} = $object->getLockoutDurationMinutes();
        }
        if (null !== $object->getLockoutDurationMinutesMetadata()) {
            $data->{'lockoutDurationMinutesMetadata'} = $this->normalizer->normalize($object->getLockoutDurationMinutesMetadata(), 'json', $context);
        }
        if (null !== $object->getLockoutDurationType()) {
            $data->{'lockoutDurationType'} = $object->getLockoutDurationType();
        }
        if (null !== $object->getLockoutDurationTypeMetadata()) {
            $data->{'lockoutDurationTypeMetadata'} = $this->normalizer->normalize($object->getLockoutDurationTypeMetadata(), 'json', $context);
        }
        if (null !== $object->getMinimumPasswordAgeDays()) {
            $data->{'minimumPasswordAgeDays'} = $object->getMinimumPasswordAgeDays();
        }
        if (null !== $object->getMinimumPasswordAgeDaysMetadata()) {
            $data->{'minimumPasswordAgeDaysMetadata'} = $this->normalizer->normalize($object->getMinimumPasswordAgeDaysMetadata(), 'json', $context);
        }
        if (null !== $object->getMinimumPasswordLength()) {
            $data->{'minimumPasswordLength'} = $object->getMinimumPasswordLength();
        }
        if (null !== $object->getMinimumPasswordLengthMetadata()) {
            $data->{'minimumPasswordLengthMetadata'} = $this->normalizer->normalize($object->getMinimumPasswordLengthMetadata(), 'json', $context);
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
        if (null !== $object->getPasswordStrengthType()) {
            $data->{'passwordStrengthType'} = $object->getPasswordStrengthType();
        }
        if (null !== $object->getPasswordStrengthTypeMetadata()) {
            $data->{'passwordStrengthTypeMetadata'} = $this->normalizer->normalize($object->getPasswordStrengthTypeMetadata(), 'json', $context);
        }
        if (null !== $object->getQuestionsRequired()) {
            $data->{'questionsRequired'} = $object->getQuestionsRequired();
        }
        if (null !== $object->getQuestionsRequiredMetadata()) {
            $data->{'questionsRequiredMetadata'} = $this->normalizer->normalize($object->getQuestionsRequiredMetadata(), 'json', $context);
        }

        return $data;
    }
}
