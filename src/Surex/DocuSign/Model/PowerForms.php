<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerForms
{
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var string
     */
    protected $emailBody;
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var Envelopes[]
     */
    protected $envelopes;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $instructions;
    /**
     * @var string
     */
    protected $isActive;
    /**
     * @var string
     */
    protected $lastUsed;
    /**
     * @var string
     */
    protected $limitUseInterval;
    /**
     * @var string
     */
    protected $limitUseIntervalEnabled;
    /**
     * @var string
     */
    protected $limitUseIntervalUnits;
    /**
     * @var string
     */
    protected $maxUseEnabled;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $powerFormId;
    /**
     * @var string
     */
    protected $powerFormUrl;
    /**
     * @var PowerFormRecipient[]
     */
    protected $recipients;
    /**
     * @var string
     */
    protected $senderName;
    /**
     * @var string
     */
    protected $senderUserId;
    /**
     * @var string
     */
    protected $signingMode;
    /**
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $templateName;
    /**
     * @var string
     */
    protected $timesUsed;
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var string
     */
    protected $usesRemaining;

    /**
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime($createdDateTime = null)
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailBody()
    {
        return $this->emailBody;
    }

    /**
     * @param string $emailBody
     *
     * @return self
     */
    public function setEmailBody($emailBody = null)
    {
        $this->emailBody = $emailBody;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject($emailSubject = null)
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * @return Envelopes[]
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * @param Envelopes[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(array $envelopes = null)
    {
        $this->envelopes = $envelopes;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     *
     * @return self
     */
    public function setInstructions($instructions = null)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     *
     * @return self
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastUsed()
    {
        return $this->lastUsed;
    }

    /**
     * @param string $lastUsed
     *
     * @return self
     */
    public function setLastUsed($lastUsed = null)
    {
        $this->lastUsed = $lastUsed;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseInterval()
    {
        return $this->limitUseInterval;
    }

    /**
     * @param string $limitUseInterval
     *
     * @return self
     */
    public function setLimitUseInterval($limitUseInterval = null)
    {
        $this->limitUseInterval = $limitUseInterval;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseIntervalEnabled()
    {
        return $this->limitUseIntervalEnabled;
    }

    /**
     * @param string $limitUseIntervalEnabled
     *
     * @return self
     */
    public function setLimitUseIntervalEnabled($limitUseIntervalEnabled = null)
    {
        $this->limitUseIntervalEnabled = $limitUseIntervalEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseIntervalUnits()
    {
        return $this->limitUseIntervalUnits;
    }

    /**
     * @param string $limitUseIntervalUnits
     *
     * @return self
     */
    public function setLimitUseIntervalUnits($limitUseIntervalUnits = null)
    {
        $this->limitUseIntervalUnits = $limitUseIntervalUnits;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxUseEnabled()
    {
        return $this->maxUseEnabled;
    }

    /**
     * @param string $maxUseEnabled
     *
     * @return self
     */
    public function setMaxUseEnabled($maxUseEnabled = null)
    {
        $this->maxUseEnabled = $maxUseEnabled;

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
    public function getPowerFormId()
    {
        return $this->powerFormId;
    }

    /**
     * @param string $powerFormId
     *
     * @return self
     */
    public function setPowerFormId($powerFormId = null)
    {
        $this->powerFormId = $powerFormId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerFormUrl()
    {
        return $this->powerFormUrl;
    }

    /**
     * @param string $powerFormUrl
     *
     * @return self
     */
    public function setPowerFormUrl($powerFormUrl = null)
    {
        $this->powerFormUrl = $powerFormUrl;

        return $this;
    }

    /**
     * @return PowerFormRecipient[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param PowerFormRecipient[] $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients = null)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     *
     * @return self
     */
    public function setSenderName($senderName = null)
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderUserId()
    {
        return $this->senderUserId;
    }

    /**
     * @param string $senderUserId
     *
     * @return self
     */
    public function setSenderUserId($senderUserId = null)
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningMode()
    {
        return $this->signingMode;
    }

    /**
     * @param string $signingMode
     *
     * @return self
     */
    public function setSigningMode($signingMode = null)
    {
        $this->signingMode = $signingMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId($templateId = null)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName($templateName = null)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimesUsed()
    {
        return $this->timesUsed;
    }

    /**
     * @param string $timesUsed
     *
     * @return self
     */
    public function setTimesUsed($timesUsed = null)
    {
        $this->timesUsed = $timesUsed;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsesRemaining()
    {
        return $this->usesRemaining;
    }

    /**
     * @param string $usesRemaining
     *
     * @return self
     */
    public function setUsesRemaining($usesRemaining = null)
    {
        $this->usesRemaining = $usesRemaining;

        return $this;
    }
}
