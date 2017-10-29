<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FolderItemV2
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
    protected $expireDateTime;
    /**
     * @var string
     */
    protected $folderId;
    /**
     * @var string
     */
    protected $folderUri;
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
    protected $lastModifiedDateTime;
    /**
     * @var string
     */
    protected $ownerName;
    /**
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * @var string
     */
    protected $recipientsUri;
    /**
     * @var string
     */
    protected $senderCompany;
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
    protected $senderUserId;
    /**
     * @var string
     */
    protected $sentDateTime;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $subject;

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
    public function getExpireDateTime()
    {
        return $this->expireDateTime;
    }

    /**
     * @param string $expireDateTime
     *
     * @return self
     */
    public function setExpireDateTime($expireDateTime = null)
    {
        $this->expireDateTime = $expireDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId($folderId = null)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderUri()
    {
        return $this->folderUri;
    }

    /**
     * @param string $folderUri
     *
     * @return self
     */
    public function setFolderUri($folderUri = null)
    {
        $this->folderUri = $folderUri;

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
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param string $lastModifiedDateTime
     *
     * @return self
     */
    public function setLastModifiedDateTime($lastModifiedDateTime = null)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

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
     * @return EnvelopeRecipients
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param EnvelopeRecipients $recipients
     *
     * @return self
     */
    public function setRecipients(EnvelopeRecipients $recipients = null)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientsUri()
    {
        return $this->recipientsUri;
    }

    /**
     * @param string $recipientsUri
     *
     * @return self
     */
    public function setRecipientsUri($recipientsUri = null)
    {
        $this->recipientsUri = $recipientsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    /**
     * @param string $senderCompany
     *
     * @return self
     */
    public function setSenderCompany($senderCompany = null)
    {
        $this->senderCompany = $senderCompany;

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
}
