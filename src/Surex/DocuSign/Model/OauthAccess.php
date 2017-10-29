<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class OauthAccess
{
    /**
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
     * @var string
     */
    protected $scope;
    /**
     * @var string
     */
    protected $tokenType;

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken($accessToken = null)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param NameValue[] $data
     *
     * @return self
     */
    public function setData(array $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param string $expiresIn
     *
     * @return self
     */
    public function setExpiresIn($expiresIn = null)
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     *
     * @return self
     */
    public function setRefreshToken($refreshToken = null)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     *
     * @return self
     */
    public function setScope($scope = null)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType($tokenType = null)
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
