<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FolderItemV2
{
    /**
     * Specifies the date and time this item was completed.
     *
     * @var string
     */
    protected $completedDateTime;
    /**
     * Indicates the date and time the item was created.
     *
     * @var string
     */
    protected $createdDateTime;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @var string
     */
    protected $envelopeUri;
    /**
     * The date and time the envelope is set to expire.
     *
     * @var string
     */
    protected $expireDateTime;
    /**
     * The ID of the folder being accessed.
     *
     * @var string
     */
    protected $folderId;
    /**
     * @var string
     */
    protected $folderUri;
    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string
     */
    protected $isSignatureProviderEnvelope;
    /**
     * The date and time the item was last modified.
     *
     * @var string
     */
    protected $lastModifiedDateTime;
    /**
     * @var string
     */
    protected $ownerName;
    /**
     * Envelope recipients.
     *
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the recipients.
     *
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
     * The date and time the envelope was sent.
     *
     * @var string
     */
    protected $sentDateTime;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $subject;

    /**
     * Specifies the date and time this item was completed.
     *
     * @return string
     */
    public function getCompletedDateTime(): ?string
    {
        return $this->completedDateTime;
    }

    /**
     * Specifies the date and time this item was completed.
     *
     * @param string $completedDateTime
     *
     * @return self
     */
    public function setCompletedDateTime(?string $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;

        return $this;
    }

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
     * The envelope ID of the envelope status that failed to post.
     *
     * @return string
     */
    public function getEnvelopeId(): ?string
    {
        return $this->envelopeId;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId(?string $envelopeId): self
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @return string
     */
    public function getEnvelopeUri(): ?string
    {
        return $this->envelopeUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @param string $envelopeUri
     *
     * @return self
     */
    public function setEnvelopeUri(?string $envelopeUri): self
    {
        $this->envelopeUri = $envelopeUri;

        return $this;
    }

    /**
     * The date and time the envelope is set to expire.
     *
     * @return string
     */
    public function getExpireDateTime(): ?string
    {
        return $this->expireDateTime;
    }

    /**
     * The date and time the envelope is set to expire.
     *
     * @param string $expireDateTime
     *
     * @return self
     */
    public function setExpireDateTime(?string $expireDateTime): self
    {
        $this->expireDateTime = $expireDateTime;

        return $this;
    }

    /**
     * The ID of the folder being accessed.
     *
     * @return string
     */
    public function getFolderId(): ?string
    {
        return $this->folderId;
    }

    /**
     * The ID of the folder being accessed.
     *
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId(?string $folderId): self
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderUri(): ?string
    {
        return $this->folderUri;
    }

    /**
     * @param string $folderUri
     *
     * @return self
     */
    public function setFolderUri(?string $folderUri): self
    {
        $this->folderUri = $folderUri;

        return $this;
    }

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @return string
     */
    public function getIs21CFRPart11(): ?string
    {
        return $this->is21CFRPart11;
    }

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11(?string $is21CFRPart11): self
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSignatureProviderEnvelope(): ?string
    {
        return $this->isSignatureProviderEnvelope;
    }

    /**
     * @param string $isSignatureProviderEnvelope
     *
     * @return self
     */
    public function setIsSignatureProviderEnvelope(?string $isSignatureProviderEnvelope): self
    {
        $this->isSignatureProviderEnvelope = $isSignatureProviderEnvelope;

        return $this;
    }

    /**
     * The date and time the item was last modified.
     *
     * @return string
     */
    public function getLastModifiedDateTime(): ?string
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * The date and time the item was last modified.
     *
     * @param string $lastModifiedDateTime
     *
     * @return self
     */
    public function setLastModifiedDateTime(?string $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    /**
     * @param string $ownerName
     *
     * @return self
     */
    public function setOwnerName(?string $ownerName): self
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * Envelope recipients.
     *
     * @return EnvelopeRecipients
     */
    public function getRecipients(): ?EnvelopeRecipients
    {
        return $this->recipients;
    }

    /**
     * Envelope recipients.
     *
     * @param EnvelopeRecipients $recipients
     *
     * @return self
     */
    public function setRecipients(?EnvelopeRecipients $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the recipients.
     *
     * @return string
     */
    public function getRecipientsUri(): ?string
    {
        return $this->recipientsUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the recipients.
     *
     * @param string $recipientsUri
     *
     * @return self
     */
    public function setRecipientsUri(?string $recipientsUri): self
    {
        $this->recipientsUri = $recipientsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderCompany(): ?string
    {
        return $this->senderCompany;
    }

    /**
     * @param string $senderCompany
     *
     * @return self
     */
    public function setSenderCompany(?string $senderCompany): self
    {
        $this->senderCompany = $senderCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     *
     * @return self
     */
    public function setSenderEmail(?string $senderEmail): self
    {
        $this->senderEmail = $senderEmail;

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
     * The date and time the envelope was sent.
     *
     * @return string
     */
    public function getSentDateTime(): ?string
    {
        return $this->sentDateTime;
    }

    /**
     * The date and time the envelope was sent.
     *
     * @param string $sentDateTime
     *
     * @return self
     */
    public function setSentDateTime(?string $sentDateTime): self
    {
        $this->sentDateTime = $sentDateTime;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
