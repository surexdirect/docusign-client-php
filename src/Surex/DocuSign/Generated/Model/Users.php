<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Users
{
    /**
     * @var UserAccountManagementGranularInformation
     */
    protected $accountManagementGranular;
    /**
     * The activation code the new user must enter when activating their account.
     *
     * @var string
     */
    protected $activationAccessCode;
    /**
     * Indicates the date and time the item was created.
     *
     * @var string
     */
    protected $createdDateTime;
    /**
     * The name/value pair information for the user custom setting.
     *
     * @var NameValue[]
     */
    protected $customSettings;
    /**
     * @var string
     */
    protected $email;
    /**
     * Specifies whether the user is enabled for updates from DocuSign Connect. Valid values: true or false.
     *
     * @var string
     */
    protected $enableConnectForUser;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @var string
     */
    protected $firstName;
    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @var ForgottenPasswordInformation
     */
    protected $forgottenPasswordInfo;
    /**
     * A list of the group information for groups to add the user to. Group information can be found by calling [ML:GET group information]. The only required parameter is groupId.

     The parameters are:

     * groupId - The DocuSign group ID for the group.
     * groupName - The name of the group
     * permissionProfileId - The ID of the permission profile associated with the group.
     * groupType - The group type.

     *
     * @var Group[]
     */
    protected $groupList;
    /**
     * @var AddressInformationV2
     */
    protected $homeAddress;
    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @var string
     */
    protected $initialsImageUri;
    /**
     * Determines if the feature set is actively set as part of the plan.
     *
     * @var string
     */
    protected $isAdmin;
    /**
     * Shows the date-time when the user last logged on to the system.
     *
     * @var string
     */
    protected $lastLogin;
    /**
     * The user's last name.
     Maximum Length: 50 characters.
     *
     * @var string
     */
    protected $lastName;
    /**
     * Shows the current status of the user's password. Possible values are:.

     * password_reset
     * password_active
     * password_expired
     * password_locked
     * password_reset_failed

     *
     * @var string
     */
    protected $loginStatus;
    /**
     * The user's middle name.
     Maximum Length: 50 characters.
     *
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
     * When set to **true**, specifies that an additional activation email is sent to the user if they fail a log on before activating their account.
     *
     * @var string
     */
    protected $sendActivationOnInvalidLogin;
    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @var string
     */
    protected $signatureImageUri;
    /**
     * The suffix for the user's name.

     Maximum Length: 50 characters.
     *
     * @var string
     */
    protected $suffixName;
    /**
     * The title of the user.
     *
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $uri;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
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
     *  The name/value pair information for user settings. These determine the actions that a user can take in the account. The `[ML:userSettings]` are listed and described below.
     *
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
    public function getAccountManagementGranular(): ?UserAccountManagementGranularInformation
    {
        return $this->accountManagementGranular;
    }

    /**
     * @param UserAccountManagementGranularInformation $accountManagementGranular
     *
     * @return self
     */
    public function setAccountManagementGranular(?UserAccountManagementGranularInformation $accountManagementGranular): self
    {
        $this->accountManagementGranular = $accountManagementGranular;

        return $this;
    }

    /**
     * The activation code the new user must enter when activating their account.
     *
     * @return string
     */
    public function getActivationAccessCode(): ?string
    {
        return $this->activationAccessCode;
    }

    /**
     * The activation code the new user must enter when activating their account.
     *
     * @param string $activationAccessCode
     *
     * @return self
     */
    public function setActivationAccessCode(?string $activationAccessCode): self
    {
        $this->activationAccessCode = $activationAccessCode;

        return $this;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @return string
     */
    public function getCreatedDateTime(): ?string
    {
        return $this->createdDateTime;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime(?string $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * The name/value pair information for the user custom setting.
     *
     * @return NameValue[]
     */
    public function getCustomSettings(): ?array
    {
        return $this->customSettings;
    }

    /**
     * The name/value pair information for the user custom setting.
     *
     * @param NameValue[] $customSettings
     *
     * @return self
     */
    public function setCustomSettings(?array $customSettings): self
    {
        $this->customSettings = $customSettings;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Specifies whether the user is enabled for updates from DocuSign Connect. Valid values: true or false.
     *
     * @return string
     */
    public function getEnableConnectForUser(): ?string
    {
        return $this->enableConnectForUser;
    }

    /**
     * Specifies whether the user is enabled for updates from DocuSign Connect. Valid values: true or false.
     *
     * @param string $enableConnectForUser
     *
     * @return self
     */
    public function setEnableConnectForUser(?string $enableConnectForUser): self
    {
        $this->enableConnectForUser = $enableConnectForUser;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The user's first name.
     Maximum Length: 50 characters.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @return ForgottenPasswordInformation
     */
    public function getForgottenPasswordInfo(): ?ForgottenPasswordInformation
    {
        return $this->forgottenPasswordInfo;
    }

    /**
     * A complex element that has up to four Question/Answer pairs for forgotten password information.
     *
     * @param ForgottenPasswordInformation $forgottenPasswordInfo
     *
     * @return self
     */
    public function setForgottenPasswordInfo(?ForgottenPasswordInformation $forgottenPasswordInfo): self
    {
        $this->forgottenPasswordInfo = $forgottenPasswordInfo;

        return $this;
    }

    /**
     * A list of the group information for groups to add the user to. Group information can be found by calling [ML:GET group information]. The only required parameter is groupId.

     The parameters are:

     * groupId - The DocuSign group ID for the group.
     * groupName - The name of the group
     * permissionProfileId - The ID of the permission profile associated with the group.
     * groupType - The group type.

     *
     * @return Group[]
     */
    public function getGroupList(): ?array
    {
        return $this->groupList;
    }

    /**
     * A list of the group information for groups to add the user to. Group information can be found by calling [ML:GET group information]. The only required parameter is groupId.

     The parameters are:

     * groupId - The DocuSign group ID for the group.
     * groupName - The name of the group
     * permissionProfileId - The ID of the permission profile associated with the group.
     * groupType - The group type.

     *
     * @param Group[] $groupList
     *
     * @return self
     */
    public function setGroupList(?array $groupList): self
    {
        $this->groupList = $groupList;

        return $this;
    }

    /**
     * @return AddressInformationV2
     */
    public function getHomeAddress(): ?AddressInformationV2
    {
        return $this->homeAddress;
    }

    /**
     * @param AddressInformationV2 $homeAddress
     *
     * @return self
     */
    public function setHomeAddress(?AddressInformationV2 $homeAddress): self
    {
        $this->homeAddress = $homeAddress;

        return $this;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @return string
     */
    public function getInitialsImageUri(): ?string
    {
        return $this->initialsImageUri;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @param string $initialsImageUri
     *
     * @return self
     */
    public function setInitialsImageUri(?string $initialsImageUri): self
    {
        $this->initialsImageUri = $initialsImageUri;

        return $this;
    }

    /**
     * Determines if the feature set is actively set as part of the plan.
     *
     * @return string
     */
    public function getIsAdmin(): ?string
    {
        return $this->isAdmin;
    }

    /**
     * Determines if the feature set is actively set as part of the plan.
     *
     * @param string $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(?string $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Shows the date-time when the user last logged on to the system.
     *
     * @return string
     */
    public function getLastLogin(): ?string
    {
        return $this->lastLogin;
    }

    /**
     * Shows the date-time when the user last logged on to the system.
     *
     * @param string $lastLogin
     *
     * @return self
     */
    public function setLastLogin(?string $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * The user's last name.
     Maximum Length: 50 characters.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The user's last name.
     Maximum Length: 50 characters.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Shows the current status of the user's password. Possible values are:.

     * password_reset
     * password_active
     * password_expired
     * password_locked
     * password_reset_failed

     *
     * @return string
     */
    public function getLoginStatus(): ?string
    {
        return $this->loginStatus;
    }

    /**
     * Shows the current status of the user's password. Possible values are:.

     * password_reset
     * password_active
     * password_expired
     * password_locked
     * password_reset_failed

     *
     * @param string $loginStatus
     *
     * @return self
     */
    public function setLoginStatus(?string $loginStatus): self
    {
        $this->loginStatus = $loginStatus;

        return $this;
    }

    /**
     * The user's middle name.
     Maximum Length: 50 characters.
     *
     * @return string
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * The user's middle name.
     Maximum Length: 50 characters.
     *
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordExpiration(): ?string
    {
        return $this->passwordExpiration;
    }

    /**
     * @param string $passwordExpiration
     *
     * @return self
     */
    public function setPasswordExpiration(?string $passwordExpiration): self
    {
        $this->passwordExpiration = $passwordExpiration;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileId(): ?string
    {
        return $this->permissionProfileId;
    }

    /**
     * @param string $permissionProfileId
     *
     * @return self
     */
    public function setPermissionProfileId(?string $permissionProfileId): self
    {
        $this->permissionProfileId = $permissionProfileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionProfileName(): ?string
    {
        return $this->permissionProfileName;
    }

    /**
     * @param string $permissionProfileName
     *
     * @return self
     */
    public function setPermissionProfileName(?string $permissionProfileName): self
    {
        $this->permissionProfileName = $permissionProfileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileImageUri(): ?string
    {
        return $this->profileImageUri;
    }

    /**
     * @param string $profileImageUri
     *
     * @return self
     */
    public function setProfileImageUri(?string $profileImageUri): self
    {
        $this->profileImageUri = $profileImageUri;

        return $this;
    }

    /**
     * When set to **true**, specifies that an additional activation email is sent to the user if they fail a log on before activating their account.
     *
     * @return string
     */
    public function getSendActivationOnInvalidLogin(): ?string
    {
        return $this->sendActivationOnInvalidLogin;
    }

    /**
     * When set to **true**, specifies that an additional activation email is sent to the user if they fail a log on before activating their account.
     *
     * @param string $sendActivationOnInvalidLogin
     *
     * @return self
     */
    public function setSendActivationOnInvalidLogin(?string $sendActivationOnInvalidLogin): self
    {
        $this->sendActivationOnInvalidLogin = $sendActivationOnInvalidLogin;

        return $this;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @return string
     */
    public function getSignatureImageUri(): ?string
    {
        return $this->signatureImageUri;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @param string $signatureImageUri
     *
     * @return self
     */
    public function setSignatureImageUri(?string $signatureImageUri): self
    {
        $this->signatureImageUri = $signatureImageUri;

        return $this;
    }

    /**
     * The suffix for the user's name.

     Maximum Length: 50 characters.
     *
     * @return string
     */
    public function getSuffixName(): ?string
    {
        return $this->suffixName;
    }

    /**
     * The suffix for the user's name.

     Maximum Length: 50 characters.
     *
     * @param string $suffixName
     *
     * @return self
     */
    public function setSuffixName(?string $suffixName): self
    {
        $this->suffixName = $suffixName;

        return $this;
    }

    /**
     * The title of the user.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The title of the user.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserProfileLastModifiedDate(): ?string
    {
        return $this->userProfileLastModifiedDate;
    }

    /**
     * @param string $userProfileLastModifiedDate
     *
     * @return self
     */
    public function setUserProfileLastModifiedDate(?string $userProfileLastModifiedDate): self
    {
        $this->userProfileLastModifiedDate = $userProfileLastModifiedDate;

        return $this;
    }

    /**
     *  The name/value pair information for user settings. These determine the actions that a user can take in the account. The `[ML:userSettings]` are listed and described below.
     *
     * @return NameValue[]
     */
    public function getUserSettings(): ?array
    {
        return $this->userSettings;
    }

    /**
     *  The name/value pair information for user settings. These determine the actions that a user can take in the account. The `[ML:userSettings]` are listed and described below.
     *
     * @param NameValue[] $userSettings
     *
     * @return self
     */
    public function setUserSettings(?array $userSettings): self
    {
        $this->userSettings = $userSettings;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserStatus(): ?string
    {
        return $this->userStatus;
    }

    /**
     * @param string $userStatus
     *
     * @return self
     */
    public function setUserStatus(?string $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param string $userType
     *
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @return AddressInformationV2
     */
    public function getWorkAddress(): ?AddressInformationV2
    {
        return $this->workAddress;
    }

    /**
     * @param AddressInformationV2 $workAddress
     *
     * @return self
     */
    public function setWorkAddress(?AddressInformationV2 $workAddress): self
    {
        $this->workAddress = $workAddress;

        return $this;
    }
}
