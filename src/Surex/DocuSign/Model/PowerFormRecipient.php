<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormRecipient
{
    /**
     * @var string
     */
    protected $accessCode;
    /**
     * @var string
     */
    protected $accessCodeLocked;
    /**
     * @var string
     */
    protected $accessCodeRequired;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $emailLocked;
    /**
     * @var string
     */
    protected $idCheckConfigurationName;
    /**
     * @var string
     */
    protected $idCheckRequired;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $recipientType;
    /**
     * @var string
     */
    protected $roleName;
    /**
     * @var string
     */
    protected $routingOrder;
    /**
     * @var string
     */
    protected $templateRequiresIdLookup;
    /**
     * @var string
     */
    protected $userNameLocked;

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     *
     * @return self
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCodeLocked()
    {
        return $this->accessCodeLocked;
    }

    /**
     * @param string $accessCodeLocked
     *
     * @return self
     */
    public function setAccessCodeLocked($accessCodeLocked = null)
    {
        $this->accessCodeLocked = $accessCodeLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCodeRequired()
    {
        return $this->accessCodeRequired;
    }

    /**
     * @param string $accessCodeRequired
     *
     * @return self
     */
    public function setAccessCodeRequired($accessCodeRequired = null)
    {
        $this->accessCodeRequired = $accessCodeRequired;

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
    public function getEmailLocked()
    {
        return $this->emailLocked;
    }

    /**
     * @param string $emailLocked
     *
     * @return self
     */
    public function setEmailLocked($emailLocked = null)
    {
        $this->emailLocked = $emailLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdCheckConfigurationName()
    {
        return $this->idCheckConfigurationName;
    }

    /**
     * @param string $idCheckConfigurationName
     *
     * @return self
     */
    public function setIdCheckConfigurationName($idCheckConfigurationName = null)
    {
        $this->idCheckConfigurationName = $idCheckConfigurationName;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdCheckRequired()
    {
        return $this->idCheckRequired;
    }

    /**
     * @param string $idCheckRequired
     *
     * @return self
     */
    public function setIdCheckRequired($idCheckRequired = null)
    {
        $this->idCheckRequired = $idCheckRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientType()
    {
        return $this->recipientType;
    }

    /**
     * @param string $recipientType
     *
     * @return self
     */
    public function setRecipientType($recipientType = null)
    {
        $this->recipientType = $recipientType;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName($roleName = null)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingOrder()
    {
        return $this->routingOrder;
    }

    /**
     * @param string $routingOrder
     *
     * @return self
     */
    public function setRoutingOrder($routingOrder = null)
    {
        $this->routingOrder = $routingOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateRequiresIdLookup()
    {
        return $this->templateRequiresIdLookup;
    }

    /**
     * @param string $templateRequiresIdLookup
     *
     * @return self
     */
    public function setTemplateRequiresIdLookup($templateRequiresIdLookup = null)
    {
        $this->templateRequiresIdLookup = $templateRequiresIdLookup;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserNameLocked()
    {
        return $this->userNameLocked;
    }

    /**
     * @param string $userNameLocked
     *
     * @return self
     */
    public function setUserNameLocked($userNameLocked = null)
    {
        $this->userNameLocked = $userNameLocked;

        return $this;
    }
}
