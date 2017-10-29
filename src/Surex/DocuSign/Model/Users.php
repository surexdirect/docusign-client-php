<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Users
{
    /**
     * @var UserAccountManagementGranularInformation
     */
    protected $accountManagementGranular;
    /**
     * @var string
     */
    protected $activationAccessCode;
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var NameValue[]
     */
    protected $customSettings;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $enableConnectForUser;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var ForgottenPasswordInformation
     */
    protected $forgottenPasswordInfo;
    /**
     * @var Group[]
     */
    protected $groupList;
    /**
     * @var AddressInformationV2
     */
    protected $homeAddress;
    /**
     * @var string
     */
    protected $initialsImageUri;
    /**
     * @var string
     */
    protected $isAdmin;
    /**
     * @var string
     */
    protected $lastLogin;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $loginStatus;
    /**
     * @var string
     */
    protected $middleName;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $passwordExpiration;
    /**
     * @var string
     */
    protected $permissionProfileId;
    /**
     * @var string
     */
    protected $permissionProfileName;
    /**
     * @var string
     */
    protected $profileImageUri;
    /**
     * @var string
     */
    protected $sendActivationOnInvalidLogin;
    /**
     * @var string
     */
    protected $signatureImageUri;
    /**
     * @var string
     */
    protected $suffixName;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $userProfileLastModifiedDate;
    /**
     * @var NameValue[]
     */
    protected $userSettings;
    /**
     * @var string
     */
    protected $userStatus;
    /**
     * @var string
     */
    protected $userType;
    /**
     * @var AddressInformationV2
     */
    protected $workAddress;

    /**
     * @return UserAccountManagementGranularInformation
     */
    public function getAccountManagementGranular()
    {
        return $this->accountManagementGranular;
    }

    /**
     * @param UserAccountManagementGranularInformation $accountManagementGranular
     *
     * @return self
     */
    public function setAccountManagementGranular(UserAccountManagementGranularInformation $accountManagementGranular = null)
    {
        $this->accountManagementGranular = $accountManagementGranular;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivationAccessCode()
    {
        return $this->activationAccessCode;
    }

    /**
     * @param string $activationAccessCode
     *
     * @return self
     */
    public function setActivationAccessCode($activationAccessCode = null)
    {
        $this->activationAccessCode = $activationAccessCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime($createdDateTime = null)
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getCustomSettings()
    {
        return $this->customSettings;
    }

    /**
     * @param NameValue[] $customSettings
     *
     * @return self
     */
    public function setCustomSettings(array $customSettings = null)
    {
        $this->customSettings = $customSettings;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableConnectForUser()
    {
        return $this->enableConnectForUser;
    }

    /**
     * @param string $enableConnectForUser
     *
     * @return self
     */
    public function setEnableConnectForUser($enableConnectForUser = null)
    {
        $this->enableConnectForUser = $enableConnectForUser;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo()
    {
        return $this->forgottenPasswordInfo;
    }

    /**
     * @param ForgottenPasswordInformation $forgottenPasswordInfo
     *
     * @return self
     */
    public function setForgottenPasswordInfo(ForgottenPasswordInformation $forgottenPasswordInfo = null)
    {
        $this->forgottenPasswordInfo = $forgottenPasswordInfo;

        return $this;
    }

    /**
     * @return Group[]
     */
    public function getGroupList()
    {
        return $this->groupList;
    }

    /**
     * @param Group[] $groupList
     *
     * @return self
     */
    public function setGroupList(array $groupList = null)
    {
        $this->groupList = $groupList;

        return $this;
    }

    /**
     * @return AddressInformationV2
     */
    public function getHomeAddress()
    {
        return $this->homeAddress;
    }

    /**
     * @param AddressInformationV2 $homeAddress
     *
     * @return self
     */
    public function setHomeAddress(AddressInformationV2 $homeAddress = null)
    {
        $this->homeAddress = $homeAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitialsImageUri()
    {
        return $this->initialsImageUri;
    }

    /**
     * @param string $initialsImageUri
     *
     * @return self
     */
    public function setInitialsImageUri($initialsImageUri = null)
    {
        $this->initialsImageUri = $initialsImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param string $isAdmin
     *
     * @return self
     */
    public function setIsAdmin($isAdmin = null)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @param string $lastLogin
     *
     * @return self
     */
    public function setLastLogin($lastLogin = null)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLoginStatus()
    {
        return $this->loginStatus;
    }

    /**
     * @param string $loginStatus
     *
     * @return self
     */
    public function setLoginStatus($loginStatus = null)
    {
        $this->loginStatus = $loginStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName($middleName = null)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordExpiration()
    {
        return $this->passwordExpiration;
    }

    /**
     * @param string $passwordExpiration
     *
     * @return self
     */
    public function setPasswordExpiration($passwordExpiration = null)
    {
        $this->passwordExpiration = $passwordExpiration;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileId()
    {
        return $this->permissionProfileId;
    }

    /**
     * @param string $permissionProfileId
     *
     * @return self
     */
    public function setPermissionProfileId($permissionProfileId = null)
    {
        $this->permissionProfileId = $permissionProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileName()
    {
        return $this->permissionProfileName;
    }

    /**
     * @param string $permissionProfileName
     *
     * @return self
     */
    public function setPermissionProfileName($permissionProfileName = null)
    {
        $this->permissionProfileName = $permissionProfileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileImageUri()
    {
        return $this->profileImageUri;
    }

    /**
     * @param string $profileImageUri
     *
     * @return self
     */
    public function setProfileImageUri($profileImageUri = null)
    {
        $this->profileImageUri = $profileImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendActivationOnInvalidLogin()
    {
        return $this->sendActivationOnInvalidLogin;
    }

    /**
     * @param string $sendActivationOnInvalidLogin
     *
     * @return self
     */
    public function setSendActivationOnInvalidLogin($sendActivationOnInvalidLogin = null)
    {
        $this->sendActivationOnInvalidLogin = $sendActivationOnInvalidLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureImageUri()
    {
        return $this->signatureImageUri;
    }

    /**
     * @param string $signatureImageUri
     *
     * @return self
     */
    public function setSignatureImageUri($signatureImageUri = null)
    {
        $this->signatureImageUri = $signatureImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuffixName()
    {
        return $this->suffixName;
    }

    /**
     * @param string $suffixName
     *
     * @return self
     */
    public function setSuffixName($suffixName = null)
    {
        $this->suffixName = $suffixName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName = null)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserProfileLastModifiedDate()
    {
        return $this->userProfileLastModifiedDate;
    }

    /**
     * @param string $userProfileLastModifiedDate
     *
     * @return self
     */
    public function setUserProfileLastModifiedDate($userProfileLastModifiedDate = null)
    {
        $this->userProfileLastModifiedDate = $userProfileLastModifiedDate;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getUserSettings()
    {
        return $this->userSettings;
    }

    /**
     * @param NameValue[] $userSettings
     *
     * @return self
     */
    public function setUserSettings(array $userSettings = null)
    {
        $this->userSettings = $userSettings;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @param string $userStatus
     *
     * @return self
     */
    public function setUserStatus($userStatus = null)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param string $userType
     *
     * @return self
     */
    public function setUserType($userType = null)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @return AddressInformationV2
     */
    public function getWorkAddress()
    {
        return $this->workAddress;
    }

    /**
     * @param AddressInformationV2 $workAddress
     *
     * @return self
     */
    public function setWorkAddress(AddressInformationV2 $workAddress = null)
    {
        $this->workAddress = $workAddress;

        return $this;
    }
}
