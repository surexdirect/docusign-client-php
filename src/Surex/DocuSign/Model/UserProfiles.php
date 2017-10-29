<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserProfiles
{
    /**
     * @var AddressInformationV2
     */
    protected $address;
    /**
     * @var AuthenticationMethod[]
     */
    protected $authenticationMethods;
    /**
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $displayOrganizationInfo;
    /**
     * @var string
     */
    protected $displayPersonalInfo;
    /**
     * @var string
     */
    protected $displayProfile;
    /**
     * @var string
     */
    protected $displayUsageHistory;
    /**
     * @var string
     */
    protected $profileImageUri;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var UsageHistory
     */
    protected $usageHistory;
    /**
     * @var Users
     */
    protected $userDetails;
    /**
     * @var string
     */
    protected $userProfileLastModifiedDate;

    /**
     * @return AddressInformationV2
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressInformationV2 $address
     *
     * @return self
     */
    public function setAddress(AddressInformationV2 $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return AuthenticationMethod[]
     */
    public function getAuthenticationMethods()
    {
        return $this->authenticationMethods;
    }

    /**
     * @param AuthenticationMethod[] $authenticationMethods
     *
     * @return self
     */
    public function setAuthenticationMethods(array $authenticationMethods = null)
    {
        $this->authenticationMethods = $authenticationMethods;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayOrganizationInfo()
    {
        return $this->displayOrganizationInfo;
    }

    /**
     * @param string $displayOrganizationInfo
     *
     * @return self
     */
    public function setDisplayOrganizationInfo($displayOrganizationInfo = null)
    {
        $this->displayOrganizationInfo = $displayOrganizationInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayPersonalInfo()
    {
        return $this->displayPersonalInfo;
    }

    /**
     * @param string $displayPersonalInfo
     *
     * @return self
     */
    public function setDisplayPersonalInfo($displayPersonalInfo = null)
    {
        $this->displayPersonalInfo = $displayPersonalInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayProfile()
    {
        return $this->displayProfile;
    }

    /**
     * @param string $displayProfile
     *
     * @return self
     */
    public function setDisplayProfile($displayProfile = null)
    {
        $this->displayProfile = $displayProfile;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUsageHistory()
    {
        return $this->displayUsageHistory;
    }

    /**
     * @param string $displayUsageHistory
     *
     * @return self
     */
    public function setDisplayUsageHistory($displayUsageHistory = null)
    {
        $this->displayUsageHistory = $displayUsageHistory;

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
     * @return UsageHistory
     */
    public function getUsageHistory()
    {
        return $this->usageHistory;
    }

    /**
     * @param UsageHistory $usageHistory
     *
     * @return self
     */
    public function setUsageHistory(UsageHistory $usageHistory = null)
    {
        $this->usageHistory = $usageHistory;

        return $this;
    }

    /**
     * @return Users
     */
    public function getUserDetails()
    {
        return $this->userDetails;
    }

    /**
     * @param Users $userDetails
     *
     * @return self
     */
    public function setUserDetails(Users $userDetails = null)
    {
        $this->userDetails = $userDetails;

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
}
