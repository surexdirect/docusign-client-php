<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerForms
{
    /**
     * Indicates the date and time the item was created.
     *
     * @var string
     */
    protected $createdDateTime;
    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @var string
     */
    protected $emailBody;
    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @var string
     */
    protected $emailSubject;
    /**
     * @var Envelopes[]
     */
    protected $envelopes;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
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
     * An array of powerform recipients.
     *
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
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
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
     * Indicates the date and time the item was created.
     *
     * @return string
     */
    public function getCreatedDateTime(): ?string
    {
        return $this->createdDateTime;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime(?string $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @return string
     */
    public function getEmailBody(): ?string
    {
        return $this->emailBody;
    }

    /**
     * Specifies the email body of the message sent to the recipient.

     Maximum length: 10000 characters.
     *
     * @param string $emailBody
     *
     * @return self
     */
    public function setEmailBody(?string $emailBody): self
    {
        $this->emailBody = $emailBody;

        return $this;
    }

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @return string
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(?string $emailSubject): self
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * @return Envelopes[]
     */
    public function getEnvelopes(): ?array
    {
        return $this->envelopes;
    }

    /**
     * @param Envelopes[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(?array $envelopes): self
    {
        $this->envelopes = $envelopes;

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
     * @return string
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     *
     * @return self
     */
    public function setInstructions(?string $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    /**
     * @param string $isActive
     *
     * @return self
     */
    public function setIsActive(?string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastUsed(): ?string
    {
        return $this->lastUsed;
    }

    /**
     * @param string $lastUsed
     *
     * @return self
     */
    public function setLastUsed(?string $lastUsed): self
    {
        $this->lastUsed = $lastUsed;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseInterval(): ?string
    {
        return $this->limitUseInterval;
    }

    /**
     * @param string $limitUseInterval
     *
     * @return self
     */
    public function setLimitUseInterval(?string $limitUseInterval): self
    {
        $this->limitUseInterval = $limitUseInterval;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseIntervalEnabled(): ?string
    {
        return $this->limitUseIntervalEnabled;
    }

    /**
     * @param string $limitUseIntervalEnabled
     *
     * @return self
     */
    public function setLimitUseIntervalEnabled(?string $limitUseIntervalEnabled): self
    {
        $this->limitUseIntervalEnabled = $limitUseIntervalEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getLimitUseIntervalUnits(): ?string
    {
        return $this->limitUseIntervalUnits;
    }

    /**
     * @param string $limitUseIntervalUnits
     *
     * @return self
     */
    public function setLimitUseIntervalUnits(?string $limitUseIntervalUnits): self
    {
        $this->limitUseIntervalUnits = $limitUseIntervalUnits;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxUseEnabled(): ?string
    {
        return $this->maxUseEnabled;
    }

    /**
     * @param string $maxUseEnabled
     *
     * @return self
     */
    public function setMaxUseEnabled(?string $maxUseEnabled): self
    {
        $this->maxUseEnabled = $maxUseEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
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
     * @return string
     */
    public function getPowerFormId(): ?string
    {
        return $this->powerFormId;
    }

    /**
     * @param string $powerFormId
     *
     * @return self
     */
    public function setPowerFormId(?string $powerFormId): self
    {
        $this->powerFormId = $powerFormId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerFormUrl(): ?string
    {
        return $this->powerFormUrl;
    }

    /**
     * @param string $powerFormUrl
     *
     * @return self
     */
    public function setPowerFormUrl(?string $powerFormUrl): self
    {
        $this->powerFormUrl = $powerFormUrl;

        return $this;
    }

    /**
     * An array of powerform recipients.
     *
     * @return PowerFormRecipient[]
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * An array of powerform recipients.
     *
     * @param PowerFormRecipient[] $recipients
     *
     * @return self
     */
    public function setRecipients(?array $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     *
     * @return self
     */
    public function setSenderName(?string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderUserId(): ?string
    {
        return $this->senderUserId;
    }

    /**
     * @param string $senderUserId
     *
     * @return self
     */
    public function setSenderUserId(?string $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningMode(): ?string
    {
        return $this->signingMode;
    }

    /**
     * @param string $signingMode
     *
     * @return self
     */
    public function setSigningMode(?string $signingMode): self
    {
        $this->signingMode = $signingMode;

        return $this;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return string
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimesUsed(): ?string
    {
        return $this->timesUsed;
    }

    /**
     * @param string $timesUsed
     *
     * @return self
     */
    public function setTimesUsed(?string $timesUsed): self
    {
        $this->timesUsed = $timesUsed;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsesRemaining(): ?string
    {
        return $this->usesRemaining;
    }

    /**
     * @param string $usesRemaining
     *
     * @return self
     */
    public function setUsesRemaining(?string $usesRemaining): self
    {
        $this->usesRemaining = $usesRemaining;

        return $this;
    }
}
