<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class UserSocialAccountLogins
{
    /**
     * The users email address.
     *
     * @var string
     */
    protected $email;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The social account provider (Facebook, Yahoo, etc.).
     *
     * @var string
     */
    protected $provider;
    /**
     * The ID provided by the Socal Account.
     *
     * @var string
     */
    protected $socialId;
    /**
     * The full user name for the account.
     *
     * @var string
     */
    protected $userName;

    /**
     * The users email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The users email address.
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
     * The social account provider (Facebook, Yahoo, etc.).
     *
     * @return string
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * The social account provider (Facebook, Yahoo, etc.).
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * The ID provided by the Socal Account.
     *
     * @return string
     */
    public function getSocialId(): ?string
    {
        return $this->socialId;
    }

    /**
     * The ID provided by the Socal Account.
     *
     * @param string $socialId
     *
     * @return self
     */
    public function setSocialId(?string $socialId): self
    {
        $this->socialId = $socialId;

        return $this;
    }

    /**
     * The full user name for the account.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * The full user name for the account.
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
