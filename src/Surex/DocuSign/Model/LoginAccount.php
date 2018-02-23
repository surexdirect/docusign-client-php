<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class LoginAccount
{
    /**
     * The account ID associated with the envelope.
     *
     * @var string
     */
    protected $accountId;
    /**
     * The GUID associated with the account ID.
     *
     * @var string
     */
    protected $accountIdGuid;
    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @var string
     */
    protected $baseUrl;
    /**
     * The email address for the user.
     *
     * @var string
     */
    protected $email;
    /**
     * This value is true if this is the default account for the user, otherwise false is returned.
     *
     * @var string
     */
    protected $isDefault;
    /**
     * A list of settings on the acccount that indicate what features are available.
     *
     * @var NameValue[]
     */
    protected $loginAccountSettings;
    /**
     * A list of user-level settings that indicate what user-specific features are available.
     *
     * @var NameValue[]
     */
    protected $loginUserSettings;
    /**
     * The name associated with the account.
     *
     * @var string
     */
    protected $name;
    /**
     * An optional descirption of the site that hosts the account.
     *
     * @var string
     */
    protected $siteDescription;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;
    /**
     * The name of this user as defined by the account.
     *
     * @var string
     */
    protected $userName;

    /**
     * The account ID associated with the envelope.
     *
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * The account ID associated with the envelope.
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The GUID associated with the account ID.
     *
     * @return string
     */
    public function getAccountIdGuid(): ?string
    {
        return $this->accountIdGuid;
    }

    /**
     * The GUID associated with the account ID.
     *
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid(?string $accountIdGuid): self
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @return string
     */
    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }

    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(?string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * The email address for the user.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email address for the user.
     *
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
     * This value is true if this is the default account for the user, otherwise false is returned.
     *
     * @return string
     */
    public function getIsDefault(): ?string
    {
        return $this->isDefault;
    }

    /**
     * This value is true if this is the default account for the user, otherwise false is returned.
     *
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault(?string $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * A list of settings on the acccount that indicate what features are available.
     *
     * @return NameValue[]
     */
    public function getLoginAccountSettings(): ?array
    {
        return $this->loginAccountSettings;
    }

    /**
     * A list of settings on the acccount that indicate what features are available.
     *
     * @param NameValue[] $loginAccountSettings
     *
     * @return self
     */
    public function setLoginAccountSettings(?array $loginAccountSettings): self
    {
        $this->loginAccountSettings = $loginAccountSettings;

        return $this;
    }

    /**
     * A list of user-level settings that indicate what user-specific features are available.
     *
     * @return NameValue[]
     */
    public function getLoginUserSettings(): ?array
    {
        return $this->loginUserSettings;
    }

    /**
     * A list of user-level settings that indicate what user-specific features are available.
     *
     * @param NameValue[] $loginUserSettings
     *
     * @return self
     */
    public function setLoginUserSettings(?array $loginUserSettings): self
    {
        $this->loginUserSettings = $loginUserSettings;

        return $this;
    }

    /**
     * The name associated with the account.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name associated with the account.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * An optional descirption of the site that hosts the account.
     *
     * @return string
     */
    public function getSiteDescription(): ?string
    {
        return $this->siteDescription;
    }

    /**
     * An optional descirption of the site that hosts the account.
     *
     * @param string $siteDescription
     *
     * @return self
     */
    public function setSiteDescription(?string $siteDescription): self
    {
        $this->siteDescription = $siteDescription;

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
     * The name of this user as defined by the account.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * The name of this user as defined by the account.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
