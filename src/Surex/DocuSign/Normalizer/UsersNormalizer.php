<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UsersNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Users' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Users) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Users();
        if (property_exists($data, 'accountManagementGranular')) {
            $object->setAccountManagementGranular($this->serializer->deserialize($data->{'accountManagementGranular'}, 'Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation', 'raw', $context));
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
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
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
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'forgottenPasswordInfo')) {
            $object->setForgottenPasswordInfo($this->serializer->deserialize($data->{'forgottenPasswordInfo'}, 'Surex\\DocuSign\\Model\\ForgottenPasswordInformation', 'raw', $context));
        }
        if (property_exists($data, 'groupList')) {
            $values_1 = [];
            foreach ($data->{'groupList'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\Group', 'raw', $context);
            }
            $object->setGroupList($values_1);
        }
        if (property_exists($data, 'homeAddress')) {
            $object->setHomeAddress($this->serializer->deserialize($data->{'homeAddress'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'raw', $context));
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
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
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
            $object->setWorkAddress($this->serializer->deserialize($data->{'workAddress'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountManagementGranular()) {
            $data->{'accountManagementGranular'} = $this->serializer->serialize($object->getAccountManagementGranular(), 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getForgottenPasswordInfo()) {
            $data->{'forgottenPasswordInfo'} = $this->serializer->serialize($object->getForgottenPasswordInfo(), 'raw', $context);
        }
        if (null !== $object->getGroupList()) {
            $values_1 = [];
            foreach ($object->getGroupList() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'groupList'} = $values_1;
        }
        if (null !== $object->getHomeAddress()) {
            $data->{'homeAddress'} = $this->serializer->serialize($object->getHomeAddress(), 'raw', $context);
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
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
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
            $data->{'workAddress'} = $this->serializer->serialize($object->getWorkAddress(), 'raw', $context);
        }

        return $data;
    }
}
