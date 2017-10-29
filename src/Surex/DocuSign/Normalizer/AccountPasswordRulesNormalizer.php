<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordRulesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordRules' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordRules) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPasswordRules();
        if (property_exists($data, 'expirePassword')) {
            $object->setExpirePassword($data->{'expirePassword'});
        }
        if (property_exists($data, 'expirePasswordDays')) {
            $object->setExpirePasswordDays($data->{'expirePasswordDays'});
        }
        if (property_exists($data, 'expirePasswordDaysMetadata')) {
            $object->setExpirePasswordDaysMetadata($this->serializer->deserialize($data->{'expirePasswordDaysMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordExpirePasswordDays', 'raw', $context));
        }
        if (property_exists($data, 'lockoutDurationMinutes')) {
            $object->setLockoutDurationMinutes($data->{'lockoutDurationMinutes'});
        }
        if (property_exists($data, 'lockoutDurationMinutesMetadata')) {
            $object->setLockoutDurationMinutesMetadata($this->serializer->deserialize($data->{'lockoutDurationMinutesMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordLockoutDurationMinutes', 'raw', $context));
        }
        if (property_exists($data, 'lockoutDurationType')) {
            $object->setLockoutDurationType($data->{'lockoutDurationType'});
        }
        if (property_exists($data, 'lockoutDurationTypeMetadata')) {
            $object->setLockoutDurationTypeMetadata($this->serializer->deserialize($data->{'lockoutDurationTypeMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordLockoutDurationType', 'raw', $context));
        }
        if (property_exists($data, 'minimumPasswordAgeDays')) {
            $object->setMinimumPasswordAgeDays($data->{'minimumPasswordAgeDays'});
        }
        if (property_exists($data, 'minimumPasswordAgeDaysMetadata')) {
            $object->setMinimumPasswordAgeDaysMetadata($this->serializer->deserialize($data->{'minimumPasswordAgeDaysMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordMinimumPasswordAgeDays', 'raw', $context));
        }
        if (property_exists($data, 'minimumPasswordLength')) {
            $object->setMinimumPasswordLength($data->{'minimumPasswordLength'});
        }
        if (property_exists($data, 'minimumPasswordLengthMetadata')) {
            $object->setMinimumPasswordLengthMetadata($this->serializer->deserialize($data->{'minimumPasswordLengthMetadata'}, 'Surex\\DocuSign\\Model\\AccountMinimumPasswordLength', 'raw', $context));
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
            $object->setPasswordStrengthTypeMetadata($this->serializer->deserialize($data->{'passwordStrengthTypeMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordStrengthType', 'raw', $context));
        }
        if (property_exists($data, 'questionsRequired')) {
            $object->setQuestionsRequired($data->{'questionsRequired'});
        }
        if (property_exists($data, 'questionsRequiredMetadata')) {
            $object->setQuestionsRequiredMetadata($this->serializer->deserialize($data->{'questionsRequiredMetadata'}, 'Surex\\DocuSign\\Model\\AccountPasswordQuestionsRequired', 'raw', $context));
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
            $data->{'expirePasswordDaysMetadata'} = $this->serializer->serialize($object->getExpirePasswordDaysMetadata(), 'raw', $context);
        }
        if (null !== $object->getLockoutDurationMinutes()) {
            $data->{'lockoutDurationMinutes'} = $object->getLockoutDurationMinutes();
        }
        if (null !== $object->getLockoutDurationMinutesMetadata()) {
            $data->{'lockoutDurationMinutesMetadata'} = $this->serializer->serialize($object->getLockoutDurationMinutesMetadata(), 'raw', $context);
        }
        if (null !== $object->getLockoutDurationType()) {
            $data->{'lockoutDurationType'} = $object->getLockoutDurationType();
        }
        if (null !== $object->getLockoutDurationTypeMetadata()) {
            $data->{'lockoutDurationTypeMetadata'} = $this->serializer->serialize($object->getLockoutDurationTypeMetadata(), 'raw', $context);
        }
        if (null !== $object->getMinimumPasswordAgeDays()) {
            $data->{'minimumPasswordAgeDays'} = $object->getMinimumPasswordAgeDays();
        }
        if (null !== $object->getMinimumPasswordAgeDaysMetadata()) {
            $data->{'minimumPasswordAgeDaysMetadata'} = $this->serializer->serialize($object->getMinimumPasswordAgeDaysMetadata(), 'raw', $context);
        }
        if (null !== $object->getMinimumPasswordLength()) {
            $data->{'minimumPasswordLength'} = $object->getMinimumPasswordLength();
        }
        if (null !== $object->getMinimumPasswordLengthMetadata()) {
            $data->{'minimumPasswordLengthMetadata'} = $this->serializer->serialize($object->getMinimumPasswordLengthMetadata(), 'raw', $context);
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
            $data->{'passwordStrengthTypeMetadata'} = $this->serializer->serialize($object->getPasswordStrengthTypeMetadata(), 'raw', $context);
        }
        if (null !== $object->getQuestionsRequired()) {
            $data->{'questionsRequired'} = $object->getQuestionsRequired();
        }
        if (null !== $object->getQuestionsRequiredMetadata()) {
            $data->{'questionsRequiredMetadata'} = $this->serializer->serialize($object->getQuestionsRequiredMetadata(), 'raw', $context);
        }

        return $data;
    }
}
