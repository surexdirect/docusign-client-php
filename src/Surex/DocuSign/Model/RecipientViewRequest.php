<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientViewRequest
{
    /**
     * @var string
     */
    protected $assertionId;
    /**
     * @var string
     */
    protected $authenticationInstant;
    /**
     * @var string
     */
    protected $authenticationMethod;
    /**
     * @var string
     */
    protected $clientUserId;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $pingFrequency;
    /**
     * @var string
     */
    protected $pingUrl;
    /**
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $returnUrl;
    /**
     * @var string
     */
    protected $securityDomain;
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
    protected $xFrameOptions;
    /**
     * @var string
     */
    protected $xFrameOptionsAllowFromUrl;

    /**
     * @return string
     */
    public function getAssertionId()
    {
        return $this->assertionId;
    }

    /**
     * @param string $assertionId
     *
     * @return self
     */
    public function setAssertionId($assertionId = null)
    {
        $this->assertionId = $assertionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationInstant()
    {
        return $this->authenticationInstant;
    }

    /**
     * @param string $authenticationInstant
     *
     * @return self
     */
    public function setAuthenticationInstant($authenticationInstant = null)
    {
        $this->authenticationInstant = $authenticationInstant;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->authenticationMethod;
    }

    /**
     * @param string $authenticationMethod
     *
     * @return self
     */
    public function setAuthenticationMethod($authenticationMethod = null)
    {
        $this->authenticationMethod = $authenticationMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param string $clientUserId
     *
     * @return self
     */
    public function setClientUserId($clientUserId = null)
    {
        $this->clientUserId = $clientUserId;

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
    public function getPingFrequency()
    {
        return $this->pingFrequency;
    }

    /**
     * @param string $pingFrequency
     *
     * @return self
     */
    public function setPingFrequency($pingFrequency = null)
    {
        $this->pingFrequency = $pingFrequency;

        return $this;
    }

    /**
     * @return string
     */
    public function getPingUrl()
    {
        return $this->pingUrl;
    }

    /**
     * @param string $pingUrl
     *
     * @return self
     */
    public function setPingUrl($pingUrl = null)
    {
        $this->pingUrl = $pingUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl($returnUrl = null)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityDomain()
    {
        return $this->securityDomain;
    }

    /**
     * @param string $securityDomain
     *
     * @return self
     */
    public function setSecurityDomain($securityDomain = null)
    {
        $this->securityDomain = $securityDomain;

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
    public function getXFrameOptions()
    {
        return $this->xFrameOptions;
    }

    /**
     * @param string $xFrameOptions
     *
     * @return self
     */
    public function setXFrameOptions($xFrameOptions = null)
    {
        $this->xFrameOptions = $xFrameOptions;

        return $this;
    }

    /**
     * @return string
     */
    public function getXFrameOptionsAllowFromUrl()
    {
        return $this->xFrameOptionsAllowFromUrl;
    }

    /**
     * @param string $xFrameOptionsAllowFromUrl
     *
     * @return self
     */
    public function setXFrameOptionsAllowFromUrl($xFrameOptionsAllowFromUrl = null)
    {
        $this->xFrameOptionsAllowFromUrl = $xFrameOptionsAllowFromUrl;

        return $this;
    }
}
