<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserProfiles
{
    /**
     * @var AddressInformationV2
     */
    protected $address;
    /**
     * These properties cannot be modified in the PUT.

     Indicates the authentication methods used by the user.
     *
     * @var AuthenticationMethod[]
     */
    protected $authenticationMethods;
    /**
     * The name of the user's Company.
     *
     * @var string
     */
    protected $companyName;
    /**
     *  When set to **true**, the user's company and title information are shown on the ID card.
     *
     * @var string
     */
    protected $displayOrganizationInfo;
    /**
     * When set to **true**, the user's Address and Phone number are shown on the ID card.
     *
     * @var string
     */
    protected $displayPersonalInfo;
    /**
     * When set to **true**, the user's ID card can be viewed from signed documents and envelope history.
     *
     * @var string
     */
    protected $displayProfile;
    /**
     * When set to **true**, the user's usage information is shown on the ID card.
     *
     * @var string
     */
    protected $displayUsageHistory;
    /**
     * @var string
     */
    protected $profileImageUri;
    /**
     * The title of the user.
     *
     * @var string
     */
    protected $title;
    /**
     * A complex element consisting of:.

     * lastSentDateTime - the date and time the user last sent an envelope.
     * lastSignedDateTime - the date and time the user last signed an envelope.
     * sentCount - the number of envelopes the user has sent.
     * signedCount - the number of envelopes the user has signed.
     *
     * @var UsageHistory
     */
    protected $usageHistory;
    /**
     * User management.
     *
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
    public function getAddress(): ?AddressInformationV2
    {
        return $this->address;
    }

    /**
     * @param AddressInformationV2 $address
     *
     * @return self
     */
    public function setAddress(?AddressInformationV2 $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * These properties cannot be modified in the PUT.

     Indicates the authentication methods used by the user.
     *
     * @return AuthenticationMethod[]
     */
    public function getAuthenticationMethods(): ?array
    {
        return $this->authenticationMethods;
    }

    /**
     * These properties cannot be modified in the PUT.

     Indicates the authentication methods used by the user.
     *
     * @param AuthenticationMethod[] $authenticationMethods
     *
     * @return self
     */
    public function setAuthenticationMethods(?array $authenticationMethods): self
    {
        $this->authenticationMethods = $authenticationMethods;

        return $this;
    }

    /**
     * The name of the user's Company.
     *
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * The name of the user's Company.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     *  When set to **true**, the user's company and title information are shown on the ID card.
     *
     * @return string
     */
    public function getDisplayOrganizationInfo(): ?string
    {
        return $this->displayOrganizationInfo;
    }

    /**
     *  When set to **true**, the user's company and title information are shown on the ID card.
     *
     * @param string $displayOrganizationInfo
     *
     * @return self
     */
    public function setDisplayOrganizationInfo(?string $displayOrganizationInfo): self
    {
        $this->displayOrganizationInfo = $displayOrganizationInfo;

        return $this;
    }

    /**
     * When set to **true**, the user's Address and Phone number are shown on the ID card.
     *
     * @return string
     */
    public function getDisplayPersonalInfo(): ?string
    {
        return $this->displayPersonalInfo;
    }

    /**
     * When set to **true**, the user's Address and Phone number are shown on the ID card.
     *
     * @param string $displayPersonalInfo
     *
     * @return self
     */
    public function setDisplayPersonalInfo(?string $displayPersonalInfo): self
    {
        $this->displayPersonalInfo = $displayPersonalInfo;

        return $this;
    }

    /**
     * When set to **true**, the user's ID card can be viewed from signed documents and envelope history.
     *
     * @return string
     */
    public function getDisplayProfile(): ?string
    {
        return $this->displayProfile;
    }

    /**
     * When set to **true**, the user's ID card can be viewed from signed documents and envelope history.
     *
     * @param string $displayProfile
     *
     * @return self
     */
    public function setDisplayProfile(?string $displayProfile): self
    {
        $this->displayProfile = $displayProfile;

        return $this;
    }

    /**
     * When set to **true**, the user's usage information is shown on the ID card.
     *
     * @return string
     */
    public function getDisplayUsageHistory(): ?string
    {
        return $this->displayUsageHistory;
    }

    /**
     * When set to **true**, the user's usage information is shown on the ID card.
     *
     * @param string $displayUsageHistory
     *
     * @return self
     */
    public function setDisplayUsageHistory(?string $displayUsageHistory): self
    {
        $this->displayUsageHistory = $displayUsageHistory;

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
     * A complex element consisting of:.

     * lastSentDateTime - the date and time the user last sent an envelope.
     * lastSignedDateTime - the date and time the user last signed an envelope.
     * sentCount - the number of envelopes the user has sent.
     * signedCount - the number of envelopes the user has signed.
     *
     * @return UsageHistory
     */
    public function getUsageHistory(): ?UsageHistory
    {
        return $this->usageHistory;
    }

    /**
     * A complex element consisting of:.

     * lastSentDateTime - the date and time the user last sent an envelope.
     * lastSignedDateTime - the date and time the user last signed an envelope.
     * sentCount - the number of envelopes the user has sent.
     * signedCount - the number of envelopes the user has signed.
     *
     * @param UsageHistory $usageHistory
     *
     * @return self
     */
    public function setUsageHistory(?UsageHistory $usageHistory): self
    {
        $this->usageHistory = $usageHistory;

        return $this;
    }

    /**
     * User management.
     *
     * @return Users
     */
    public function getUserDetails(): ?Users
    {
        return $this->userDetails;
    }

    /**
     * User management.
     *
     * @param Users $userDetails
     *
     * @return self
     */
    public function setUserDetails(?Users $userDetails): self
    {
        $this->userDetails = $userDetails;

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
}
