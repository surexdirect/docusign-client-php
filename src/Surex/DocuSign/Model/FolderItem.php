<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FolderItem
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
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @var CustomFieldV2[]
     */
    protected $customFields;
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
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
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @var string
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $name;
    /**
     * Name of the envelope owner.
     *
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
     * Name of the envelope sender.
     *
     * @var string
     */
    protected $senderName;
    /**
     * The date and time the envelope was sent.
     *
     * @var string
     */
    protected $sentDateTime;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;
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
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $uri;

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
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @return CustomFieldV2[]
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @param CustomFieldV2[] $customFields
     *
     * @return self
     */
    public function setCustomFields(?array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

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
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @return string
     */
    public function getLastModified(): ?string
    {
        return $this->lastModified;
    }

    /**
     * Utc date and time the comment was last updated (can only be done by creator.).
     *
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified(?string $lastModified): self
    {
        $this->lastModified = $lastModified;

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
     * Name of the envelope owner.
     *
     * @return string
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    /**
     * Name of the envelope owner.
     *
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
     * @return int
     */
    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    /**
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount(?int $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

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
     * Name of the envelope sender.
     *
     * @return string
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    /**
     * Name of the envelope sender.
     *
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
     * When set to **true**, this custom tab is shared.
     *
     * @return string
     */
    public function getShared(): ?string
    {
        return $this->shared;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(?string $shared): self
    {
        $this->shared = $shared;

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
}
