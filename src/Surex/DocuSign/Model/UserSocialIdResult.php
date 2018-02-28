<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSocialIdResult
{
    /**
     * Contains properties that map a DocuSign user to a social account (Facebook, Yahoo, etc.).
     *
     * @var UserSocialAccountLogins[]
     */
    protected $socialAccountInformation;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;

    /**
     * Contains properties that map a DocuSign user to a social account (Facebook, Yahoo, etc.).
     *
     * @return UserSocialAccountLogins[]
     */
    public function getSocialAccountInformation(): ?array
    {
        return $this->socialAccountInformation;
    }

    /**
     * Contains properties that map a DocuSign user to a social account (Facebook, Yahoo, etc.).
     *
     * @param UserSocialAccountLogins[] $socialAccountInformation
     *
     * @return self
     */
    public function setSocialAccountInformation(?array $socialAccountInformation): self
    {
        $this->socialAccountInformation = $socialAccountInformation;

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
}
