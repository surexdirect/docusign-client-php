<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FolderItem
{
    /**
     * @var string
     */
    protected $completedDateTime;
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var CustomFieldV2[]
     */
    protected $customFields;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $envelopeUri;
    /**
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string
     */
    protected $isSignatureProviderEnvelope;
    /**
     * @var string
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $ownerName;
    /**
     * @var int
     */
    protected $pageCount;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $senderEmail;
    /**
     * @var string
     */
    protected $senderName;
    /**
     * @var string
     */
    protected $sentDateTime;
    /**
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getCompletedDateTime()
    {
        return $this->completedDateTime;
    }

    /**
     * @param string $completedDateTime
     *
     * @return self
     */
    public function setCompletedDateTime($completedDateTime = null)
    {
        $this->completedDateTime = $completedDateTime;

        return $this;
    }

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
     * @return CustomFieldV2[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param CustomFieldV2[] $customFields
     *
     * @return self
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeUri()
    {
        return $this->envelopeUri;
    }

    /**
     * @param string $envelopeUri
     *
     * @return self
     */
    public function setEnvelopeUri($envelopeUri = null)
    {
        $this->envelopeUri = $envelopeUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getIs21CFRPart11()
    {
        return $this->is21CFRPart11;
    }

    /**
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11($is21CFRPart11 = null)
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSignatureProviderEnvelope()
    {
        return $this->isSignatureProviderEnvelope;
    }

    /**
     * @param string $isSignatureProviderEnvelope
     *
     * @return self
     */
    public function setIsSignatureProviderEnvelope($isSignatureProviderEnvelope = null)
    {
        $this->isSignatureProviderEnvelope = $isSignatureProviderEnvelope;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified = null)
    {
        $this->lastModified = $lastModified;

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
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     *
     * @return self
     */
    public function setOwnerName($ownerName = null)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount($pageCount = null)
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     *
     * @return self
     */
    public function setSenderEmail($senderEmail = null)
    {
        $this->senderEmail = $senderEmail;

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
    public function getSentDateTime()
    {
        return $this->sentDateTime;
    }

    /**
     * @param string $sentDateTime
     *
     * @return self
     */
    public function setSentDateTime($sentDateTime = null)
    {
        $this->sentDateTime = $sentDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param string $shared
     *
     * @return self
     */
    public function setShared($shared = null)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject = null)
    {
        $this->subject = $subject;

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
}
