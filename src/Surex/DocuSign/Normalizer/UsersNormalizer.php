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

class UsersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Users' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Users;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Users();
        if (property_exists($data, 'accountManagementGranular')) {
            $object->setAccountManagementGranular($this->denormalizer->denormalize($data->{'accountManagementGranular'}, 'Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation', 'json', $context));
        }
        if (property_exists($data, 'activationAccessCode')) {
            $object->setActivationAccessCode($data->{'activationAccessCode'});
        }
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'customSettings')) {
            $values = [];
            foreach ($data->{'customSettings'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setCustomSettings($values);
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'enableConnectForUser')) {
            $object->setEnableConnectForUser($data->{'enableConnectForUser'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'forgottenPasswordInfo')) {
            $object->setForgottenPasswordInfo($this->denormalizer->denormalize($data->{'forgottenPasswordInfo'}, 'Surex\\DocuSign\\Model\\ForgottenPasswordInformation', 'json', $context));
        }
        if (property_exists($data, 'groupList')) {
            $values_1 = [];
            foreach ($data->{'groupList'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\Group', 'json', $context);
            }
            $object->setGroupList($values_1);
        }
        if (property_exists($data, 'homeAddress')) {
            $object->setHomeAddress($this->denormalizer->denormalize($data->{'homeAddress'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'json', $context));
        }
        if (property_exists($data, 'initialsImageUri')) {
            $object->setInitialsImageUri($data->{'initialsImageUri'});
        }
        if (property_exists($data, 'isAdmin')) {
            $object->setIsAdmin($data->{'isAdmin'});
        }
        if (property_exists($data, 'lastLogin')) {
            $object->setLastLogin($data->{'lastLogin'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'loginStatus')) {
            $object->setLoginStatus($data->{'loginStatus'});
        }
        if (property_exists($data, 'middleName')) {
            $object->setMiddleName($data->{'middleName'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'passwordExpiration')) {
            $object->setPasswordExpiration($data->{'passwordExpiration'});
        }
        if (property_exists($data, 'permissionProfileId')) {
            $object->setPermissionProfileId($data->{'permissionProfileId'});
        }
        if (property_exists($data, 'permissionProfileName')) {
            $object->setPermissionProfileName($data->{'permissionProfileName'});
        }
        if (property_exists($data, 'profileImageUri')) {
            $object->setProfileImageUri($data->{'profileImageUri'});
        }
        if (property_exists($data, 'sendActivationOnInvalidLogin')) {
            $object->setSendActivationOnInvalidLogin($data->{'sendActivationOnInvalidLogin'});
        }
        if (property_exists($data, 'signatureImageUri')) {
            $object->setSignatureImageUri($data->{'signatureImageUri'});
        }
        if (property_exists($data, 'suffixName')) {
            $object->setSuffixName($data->{'suffixName'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }
        if (property_exists($data, 'userProfileLastModifiedDate')) {
            $object->setUserProfileLastModifiedDate($data->{'userProfileLastModifiedDate'});
        }
        if (property_exists($data, 'userSettings')) {
            $values_2 = [];
            foreach ($data->{'userSettings'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setUserSettings($values_2);
        }
        if (property_exists($data, 'userStatus')) {
            $object->setUserStatus($data->{'userStatus'});
        }
        if (property_exists($data, 'userType')) {
            $object->setUserType($data->{'userType'});
        }
        if (property_exists($data, 'workAddress')) {
            $object->setWorkAddress($this->denormalizer->denormalize($data->{'workAddress'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountManagementGranular()) {
            $data->{'accountManagementGranular'} = $this->normalizer->normalize($object->getAccountManagementGranular(), 'json', $context);
        }
        if (null !== $object->getActivationAccessCode()) {
            $data->{'activationAccessCode'} = $object->getActivationAccessCode();
        }
        if (null !== $object->getCreatedDateTime()) {
            $data->{'createdDateTime'} = $object->getCreatedDateTime();
        }
        if (null !== $object->getCustomSettings()) {
            $values = [];
            foreach ($object->getCustomSettings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'customSettings'} = $values;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEnableConnectForUser()) {
            $data->{'enableConnectForUser'} = $object->getEnableConnectForUser();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getForgottenPasswordInfo()) {
            $data->{'forgottenPasswordInfo'} = $this->normalizer->normalize($object->getForgottenPasswordInfo(), 'json', $context);
        }
        if (null !== $object->getGroupList()) {
            $values_1 = [];
            foreach ($object->getGroupList() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'groupList'} = $values_1;
        }
        if (null !== $object->getHomeAddress()) {
            $data->{'homeAddress'} = $this->normalizer->normalize($object->getHomeAddress(), 'json', $context);
        }
        if (null !== $object->getInitialsImageUri()) {
            $data->{'initialsImageUri'} = $object->getInitialsImageUri();
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'isAdmin'} = $object->getIsAdmin();
        }
        if (null !== $object->getLastLogin()) {
            $data->{'lastLogin'} = $object->getLastLogin();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getLoginStatus()) {
            $data->{'loginStatus'} = $object->getLoginStatus();
        }
        if (null !== $object->getMiddleName()) {
            $data->{'middleName'} = $object->getMiddleName();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getPasswordExpiration()) {
            $data->{'passwordExpiration'} = $object->getPasswordExpiration();
        }
        if (null !== $object->getPermissionProfileId()) {
            $data->{'permissionProfileId'} = $object->getPermissionProfileId();
        }
        if (null !== $object->getPermissionProfileName()) {
            $data->{'permissionProfileName'} = $object->getPermissionProfileName();
        }
        if (null !== $object->getProfileImageUri()) {
            $data->{'profileImageUri'} = $object->getProfileImageUri();
        }
        if (null !== $object->getSendActivationOnInvalidLogin()) {
            $data->{'sendActivationOnInvalidLogin'} = $object->getSendActivationOnInvalidLogin();
        }
        if (null !== $object->getSignatureImageUri()) {
            $data->{'signatureImageUri'} = $object->getSignatureImageUri();
        }
        if (null !== $object->getSuffixName()) {
            $data->{'suffixName'} = $object->getSuffixName();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }
        if (null !== $object->getUserProfileLastModifiedDate()) {
            $data->{'userProfileLastModifiedDate'} = $object->getUserProfileLastModifiedDate();
        }
        if (null !== $object->getUserSettings()) {
            $values_2 = [];
            foreach ($object->getUserSettings() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'userSettings'} = $values_2;
        }
        if (null !== $object->getUserStatus()) {
            $data->{'userStatus'} = $object->getUserStatus();
        }
        if (null !== $object->getUserType()) {
            $data->{'userType'} = $object->getUserType();
        }
        if (null !== $object->getWorkAddress()) {
            $data->{'workAddress'} = $this->normalizer->normalize($object->getWorkAddress(), 'json', $context);
        }

        return $data;
    }
}
