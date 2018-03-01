<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class OauthAccess
{
    /**
     * Access token information.
     *
     * @var string
     */
    protected $accessToken;
    /**
     * @var NameValue[]
     */
    protected $data;
    /**
     * @var string
     */
    protected $expiresIn;
    /**
     * @var string
     */
    protected $refreshToken;
    /**
     * Must be set to "api".
     *
     * @var string
     */
    protected $scope;
    /**
     * @var string
     */
    protected $tokenType;

    /**
     * Access token information.
     *
     * @return string
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * Access token information.
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(?string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param NameValue[] $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresIn(): ?string
    {
        return $this->expiresIn;
    }

    /**
     * @param string $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(?string $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     *
     * @return self
     */
    public function setRefreshToken(?string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    /**
     * Must be set to "api".
     *
     * @return string
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Must be set to "api".
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return string
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(?string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
