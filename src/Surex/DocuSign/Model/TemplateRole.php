<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateRole
{
    /**
     * @var string
     */
    protected $accessCode;
    /**
     * @var string
     */
    protected $clientUserId;
    /**
     * @var string
     */
    protected $defaultRecipient;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var RecipientEmailNotification
     */
    protected $emailNotification;
    /**
     * @var string
     */
    protected $embeddedRecipientStartURL;
    /**
     * @var string
     */
    protected $inPersonSignerName;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var RecipientSignatureProvider[]
     */
    protected $recipientSignatureProviders;
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
    protected $signingGroupId;
    /**
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;

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
    public function getDefaultRecipient()
    {
        return $this->defaultRecipient;
    }

    /**
     * @param string $defaultRecipient
     *
     * @return self
     */
    public function setDefaultRecipient($defaultRecipient = null)
    {
        $this->defaultRecipient = $defaultRecipient;

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
     * @return RecipientEmailNotification
     */
    public function getEmailNotification()
    {
        return $this->emailNotification;
    }

    /**
     * @param RecipientEmailNotification $emailNotification
     *
     * @return self
     */
    public function setEmailNotification(RecipientEmailNotification $emailNotification = null)
    {
        $this->emailNotification = $emailNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmbeddedRecipientStartURL()
    {
        return $this->embeddedRecipientStartURL;
    }

    /**
     * @param string $embeddedRecipientStartURL
     *
     * @return self
     */
    public function setEmbeddedRecipientStartURL($embeddedRecipientStartURL = null)
    {
        $this->embeddedRecipientStartURL = $embeddedRecipientStartURL;

        return $this;
    }

    /**
     * @return string
     */
    public function getInPersonSignerName()
    {
        return $this->inPersonSignerName;
    }

    /**
     * @param string $inPersonSignerName
     *
     * @return self
     */
    public function setInPersonSignerName($inPersonSignerName = null)
    {
        $this->inPersonSignerName = $inPersonSignerName;

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
     * @return RecipientSignatureProvider[]
     */
    public function getRecipientSignatureProviders()
    {
        return $this->recipientSignatureProviders;
    }

    /**
     * @param RecipientSignatureProvider[] $recipientSignatureProviders
     *
     * @return self
     */
    public function setRecipientSignatureProviders(array $recipientSignatureProviders = null)
    {
        $this->recipientSignatureProviders = $recipientSignatureProviders;

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
    public function getSigningGroupId()
    {
        return $this->signingGroupId;
    }

    /**
     * @param string $signingGroupId
     *
     * @return self
     */
    public function setSigningGroupId($signingGroupId = null)
    {
        $this->signingGroupId = $signingGroupId;

        return $this;
    }

    /**
     * @return EnvelopeRecipientTabs
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @param EnvelopeRecipientTabs $tabs
     *
     * @return self
     */
    public function setTabs(EnvelopeRecipientTabs $tabs = null)
    {
        $this->tabs = $tabs;

        return $this;
    }
}
