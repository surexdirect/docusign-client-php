<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeTemplateResult
{
    /**
     * When set to **true**, Document Markup is enabled for envelope. Account must have Document Markup enabled to use this.
     *
     * @var string
     */
    protected $allowMarkup;
    /**
     * When set to **true**, the recipient can redirect an envelope to a more appropriate recipient.
     *
     * @var string
     */
    protected $allowReassign;
    /**
     * When set to **true**, the envelope is queued for processing and the value of the `status` property is set to 'Processing'. Additionally, get status calls return 'Processing' until completed.
     *
     * @var string
     */
    protected $asynchronous;
    /**
     * @var string
     */
    protected $attachmentsUri;
    /**
     * Specifies the Authoritative copy feature. If set to true the Authoritative copy feature is enabled.
     *
     * @var string
     */
    protected $authoritativeCopy;
    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @var string
     */
    protected $autoNavigation;
    /**
     * The unique identifier of a brand.
     *
     * @var string
     */
    protected $brandId;
    /**
     * @var string
     */
    protected $brandLock;
    /**
     * Retrieves a URI for an endpoint that allows you to easily retrieve certificate information.
     *
     * @var string
     */
    protected $certificateUri;
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
     * Custom Fields.
     *
     * @var AccountCustomFields
     */
    protected $customFields;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the custom fields.
     *
     * @var string
     */
    protected $customFieldsUri;
    /**
     * The date and time the recipient declined the document.
     *
     * @var string
     */
    protected $declinedDateTime;
    /**
     * Specifies the data and time the item was deleted.
     *
     * @var string
     */
    protected $deletedDateTime;
    /**
     * Reserved: For DocuSign use only.
     *
     * @var string
     */
    protected $deliveredDateTime;
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * Complex element contains the details on the documents in the envelope.
     *
     * @var Document[]
     */
    protected $documents;
    /**
     * @var string
     */
    protected $documentsCombinedUri;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the documents.
     *
     * @var string
     */
    protected $documentsUri;
    /**
     * @var string
     */
    protected $emailBlurb;
    /**
     * Envelope email settings.
     *
     * @var EnvelopeEmailSettings
     */
    protected $emailSettings;
    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @var string
     */
    protected $emailSubject;
    /**
     * When set to **true**, the signer is allowed to print the document and sign it on paper.
     *
     * @var string
     */
    protected $enableWetSign;
    /**
     * When set to **true**, documents with tabs can only be viewed by signers that have a tab on that document. Recipients that have an administrative role (Agent, Editor, or Intermediaries) or informational role (Certified Deliveries or Carbon Copies) can always see all the documents in an envelope, unless they are specifically excluded using this setting when an envelope is sent. Documents that do not have tabs are always visible to all recipients, unless they are specifically excluded using this setting when an envelope is sent.

     Your account must have Document Visibility enabled to use this.
     *
     * @var string
     */
    protected $enforceSignerVisibility;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * When set to **true**, Envelope ID Stamping is enabled.
     *
     * @var string
     */
    protected $envelopeIdStamping;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @var string
     */
    protected $envelopeUri;
    /**
     * The ID of the folder being accessed.
     *
     * @var string
     */
    protected $folderId;
    /**
     * @var string
     */
    protected $folderName;
    /**
     * @var string
     */
    protected $folderUri;
    /**
     * @var string
     */
    protected $initialSentDateTime;
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
     * The date and time the item was last modified.
     *
     * @var string
     */
    protected $lastModifiedDateTime;
    /**
     * Envelope locks.
     *
     * @var EnvelopeLocks
     */
    protected $lockInformation;
    /**
     * When set to **true**, prevents senders from changing the contents of `emailBlurb` and `emailSubject` properties for the envelope.

     Additionally, this prevents users from making changes to the contents of `emailBlurb` and `emailSubject` properties when correcting envelopes.

     However, if the `messageLock` node is set to true**** and the `emailSubject` property is empty, senders and correctors are able to add a subject to the envelope.
     *
     * @var string
     */
    protected $messageLock;
    /**
     * @var string
     */
    protected $name;
    /**
     * A complex element that specifies the notification options for the envelope. It consists of:.

     * useAccountDefaults - When set to **true**, the account default notification settings are used for the envelope.
     * reminders - A complex element that specifies reminder settings for the envelope. It consists of:

     * reminderEnabled - When set to **true**, a reminder message is sent to the recipient.
     * reminderDelay - An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     * reminderFrequency - An interger that sets the interval, in days, between reminder emails.

     * expirations - A complex element that specifies the expiration settings for the envelope. It consists of:

     * expireEnabled - When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     * expireAfter - An integer that sets the number of days the envelope is active.
     * expireWarn - An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @var Notification
     */
    protected $notification;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the notifications.
     *
     * @var string
     */
    protected $notificationUri;
    /**
     * @var UserInfo
     */
    protected $owner;
    /**
     * @var int
     */
    protected $pageCount;
    /**
     * @var string
     */
    protected $parentFolderUri;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $purgeState;
    /**
     * Envelope recipients.
     *
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * When set to **true**, prevents senders from changing, correcting, or deleting the recipient information for the envelope.
     *
     * @var string
     */
    protected $recipientsLock;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the recipients.
     *
     * @var string
     */
    protected $recipientsUri;
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
     * Specifies the physical location where the signing takes place. It can have two enumeration values; InPerson and Online. The default value is Online.
     *
     * @var string
     */
    protected $signingLocation;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * The data and time the status changed.
     *
     * @var string
     */
    protected $statusChangedDateTime;
    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;
    /**
     * Contains a URI for an endpoint which you can use to retrieve the templates.
     *
     * @var string
     */
    protected $templatesUri;
    /**
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * @var string
     */
    protected $uri;
    /**
     * When set to **true**, the disclosure is shown to recipients in accordance with the account's Electronic Record and Signature Disclosure frequency setting. When set to **false**, the Electronic Record and Signature Disclosure is not shown to any envelope recipients.

     If the `useDisclosure` property is not set, then the account's normal disclosure setting is used and the value of the `useDisclosure` property is not returned in responses when getting envelope information.
     *
     * @var string
     */
    protected $useDisclosure;
    /**
     * The date and time the envelope or template was voided.
     *
     * @var string
     */
    protected $voidedDateTime;
    /**
     * The reason the envelope or template was voided.
     *
     * @var string
     */
    protected $voidedReason;

    /**
     * When set to **true**, Document Markup is enabled for envelope. Account must have Document Markup enabled to use this.
     *
     * @return string
     */
    public function getAllowMarkup(): ?string
    {
        return $this->allowMarkup;
    }

    /**
     * When set to **true**, Document Markup is enabled for envelope. Account must have Document Markup enabled to use this.
     *
     * @param string $allowMarkup
     *
     * @return self
     */
    public function setAllowMarkup(?string $allowMarkup): self
    {
        $this->allowMarkup = $allowMarkup;

        return $this;
    }

    /**
     * When set to **true**, the recipient can redirect an envelope to a more appropriate recipient.
     *
     * @return string
     */
    public function getAllowReassign(): ?string
    {
        return $this->allowReassign;
    }

    /**
     * When set to **true**, the recipient can redirect an envelope to a more appropriate recipient.
     *
     * @param string $allowReassign
     *
     * @return self
     */
    public function setAllowReassign(?string $allowReassign): self
    {
        $this->allowReassign = $allowReassign;

        return $this;
    }

    /**
     * When set to **true**, the envelope is queued for processing and the value of the `status` property is set to 'Processing'. Additionally, get status calls return 'Processing' until completed.
     *
     * @return string
     */
    public function getAsynchronous(): ?string
    {
        return $this->asynchronous;
    }

    /**
     * When set to **true**, the envelope is queued for processing and the value of the `status` property is set to 'Processing'. Additionally, get status calls return 'Processing' until completed.
     *
     * @param string $asynchronous
     *
     * @return self
     */
    public function setAsynchronous(?string $asynchronous): self
    {
        $this->asynchronous = $asynchronous;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentsUri(): ?string
    {
        return $this->attachmentsUri;
    }

    /**
     * @param string $attachmentsUri
     *
     * @return self
     */
    public function setAttachmentsUri(?string $attachmentsUri): self
    {
        $this->attachmentsUri = $attachmentsUri;

        return $this;
    }

    /**
     * Specifies the Authoritative copy feature. If set to true the Authoritative copy feature is enabled.
     *
     * @return string
     */
    public function getAuthoritativeCopy(): ?string
    {
        return $this->authoritativeCopy;
    }

    /**
     * Specifies the Authoritative copy feature. If set to true the Authoritative copy feature is enabled.
     *
     * @param string $authoritativeCopy
     *
     * @return self
     */
    public function setAuthoritativeCopy(?string $authoritativeCopy): self
    {
        $this->authoritativeCopy = $authoritativeCopy;

        return $this;
    }

    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @return string
     */
    public function getAutoNavigation(): ?string
    {
        return $this->autoNavigation;
    }

    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @param string $autoNavigation
     *
     * @return self
     */
    public function setAutoNavigation(?string $autoNavigation): self
    {
        $this->autoNavigation = $autoNavigation;

        return $this;
    }

    /**
     * The unique identifier of a brand.
     *
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * The unique identifier of a brand.
     *
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrandLock(): ?string
    {
        return $this->brandLock;
    }

    /**
     * @param string $brandLock
     *
     * @return self
     */
    public function setBrandLock(?string $brandLock): self
    {
        $this->brandLock = $brandLock;

        return $this;
    }

    /**
     * Retrieves a URI for an endpoint that allows you to easily retrieve certificate information.
     *
     * @return string
     */
    public function getCertificateUri(): ?string
    {
        return $this->certificateUri;
    }

    /**
     * Retrieves a URI for an endpoint that allows you to easily retrieve certificate information.
     *
     * @param string $certificateUri
     *
     * @return self
     */
    public function setCertificateUri(?string $certificateUri): self
    {
        $this->certificateUri = $certificateUri;

        return $this;
    }

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
     * Custom Fields.
     *
     * @return AccountCustomFields
     */
    public function getCustomFields(): ?AccountCustomFields
    {
        return $this->customFields;
    }

    /**
     * Custom Fields.
     *
     * @param AccountCustomFields $customFields
     *
     * @return self
     */
    public function setCustomFields(?AccountCustomFields $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the custom fields.
     *
     * @return string
     */
    public function getCustomFieldsUri(): ?string
    {
        return $this->customFieldsUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the custom fields.
     *
     * @param string $customFieldsUri
     *
     * @return self
     */
    public function setCustomFieldsUri(?string $customFieldsUri): self
    {
        $this->customFieldsUri = $customFieldsUri;

        return $this;
    }

    /**
     * The date and time the recipient declined the document.
     *
     * @return string
     */
    public function getDeclinedDateTime(): ?string
    {
        return $this->declinedDateTime;
    }

    /**
     * The date and time the recipient declined the document.
     *
     * @param string $declinedDateTime
     *
     * @return self
     */
    public function setDeclinedDateTime(?string $declinedDateTime): self
    {
        $this->declinedDateTime = $declinedDateTime;

        return $this;
    }

    /**
     * Specifies the data and time the item was deleted.
     *
     * @return string
     */
    public function getDeletedDateTime(): ?string
    {
        return $this->deletedDateTime;
    }

    /**
     * Specifies the data and time the item was deleted.
     *
     * @param string $deletedDateTime
     *
     * @return self
     */
    public function setDeletedDateTime(?string $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;

        return $this;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @return string
     */
    public function getDeliveredDateTime(): ?string
    {
        return $this->deliveredDateTime;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @param string $deliveredDateTime
     *
     * @return self
     */
    public function setDeliveredDateTime(?string $deliveredDateTime): self
    {
        $this->deliveredDateTime = $deliveredDateTime;

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
     * Complex element contains the details on the documents in the envelope.
     *
     * @return Document[]
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Complex element contains the details on the documents in the envelope.
     *
     * @param Document[] $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentsCombinedUri(): ?string
    {
        return $this->documentsCombinedUri;
    }

    /**
     * @param string $documentsCombinedUri
     *
     * @return self
     */
    public function setDocumentsCombinedUri(?string $documentsCombinedUri): self
    {
        $this->documentsCombinedUri = $documentsCombinedUri;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the documents.
     *
     * @return string
     */
    public function getDocumentsUri(): ?string
    {
        return $this->documentsUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the documents.
     *
     * @param string $documentsUri
     *
     * @return self
     */
    public function setDocumentsUri(?string $documentsUri): self
    {
        $this->documentsUri = $documentsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailBlurb(): ?string
    {
        return $this->emailBlurb;
    }

    /**
     * @param string $emailBlurb
     *
     * @return self
     */
    public function setEmailBlurb(?string $emailBlurb): self
    {
        $this->emailBlurb = $emailBlurb;

        return $this;
    }

    /**
     * Envelope email settings.
     *
     * @return EnvelopeEmailSettings
     */
    public function getEmailSettings(): ?EnvelopeEmailSettings
    {
        return $this->emailSettings;
    }

    /**
     * Envelope email settings.
     *
     * @param EnvelopeEmailSettings $emailSettings
     *
     * @return self
     */
    public function setEmailSettings(?EnvelopeEmailSettings $emailSettings): self
    {
        $this->emailSettings = $emailSettings;

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
     * When set to **true**, the signer is allowed to print the document and sign it on paper.
     *
     * @return string
     */
    public function getEnableWetSign(): ?string
    {
        return $this->enableWetSign;
    }

    /**
     * When set to **true**, the signer is allowed to print the document and sign it on paper.
     *
     * @param string $enableWetSign
     *
     * @return self
     */
    public function setEnableWetSign(?string $enableWetSign): self
    {
        $this->enableWetSign = $enableWetSign;

        return $this;
    }

    /**
     * When set to **true**, documents with tabs can only be viewed by signers that have a tab on that document. Recipients that have an administrative role (Agent, Editor, or Intermediaries) or informational role (Certified Deliveries or Carbon Copies) can always see all the documents in an envelope, unless they are specifically excluded using this setting when an envelope is sent. Documents that do not have tabs are always visible to all recipients, unless they are specifically excluded using this setting when an envelope is sent.

     Your account must have Document Visibility enabled to use this.
     *
     * @return string
     */
    public function getEnforceSignerVisibility(): ?string
    {
        return $this->enforceSignerVisibility;
    }

    /**
     * When set to **true**, documents with tabs can only be viewed by signers that have a tab on that document. Recipients that have an administrative role (Agent, Editor, or Intermediaries) or informational role (Certified Deliveries or Carbon Copies) can always see all the documents in an envelope, unless they are specifically excluded using this setting when an envelope is sent. Documents that do not have tabs are always visible to all recipients, unless they are specifically excluded using this setting when an envelope is sent.

     Your account must have Document Visibility enabled to use this.
     *
     * @param string $enforceSignerVisibility
     *
     * @return self
     */
    public function setEnforceSignerVisibility(?string $enforceSignerVisibility): self
    {
        $this->enforceSignerVisibility = $enforceSignerVisibility;

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
     * When set to **true**, Envelope ID Stamping is enabled.
     *
     * @return string
     */
    public function getEnvelopeIdStamping(): ?string
    {
        return $this->envelopeIdStamping;
    }

    /**
     * When set to **true**, Envelope ID Stamping is enabled.
     *
     * @param string $envelopeIdStamping
     *
     * @return self
     */
    public function setEnvelopeIdStamping(?string $envelopeIdStamping): self
    {
        $this->envelopeIdStamping = $envelopeIdStamping;

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
    public function getFolderName(): ?string
    {
        return $this->folderName;
    }

    /**
     * @param string $folderName
     *
     * @return self
     */
    public function setFolderName(?string $folderName): self
    {
        $this->folderName = $folderName;

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
     * @return string
     */
    public function getInitialSentDateTime(): ?string
    {
        return $this->initialSentDateTime;
    }

    /**
     * @param string $initialSentDateTime
     *
     * @return self
     */
    public function setInitialSentDateTime(?string $initialSentDateTime): self
    {
        $this->initialSentDateTime = $initialSentDateTime;

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
     * Envelope locks.
     *
     * @return EnvelopeLocks
     */
    public function getLockInformation(): ?EnvelopeLocks
    {
        return $this->lockInformation;
    }

    /**
     * Envelope locks.
     *
     * @param EnvelopeLocks $lockInformation
     *
     * @return self
     */
    public function setLockInformation(?EnvelopeLocks $lockInformation): self
    {
        $this->lockInformation = $lockInformation;

        return $this;
    }

    /**
     * When set to **true**, prevents senders from changing the contents of `emailBlurb` and `emailSubject` properties for the envelope.

     Additionally, this prevents users from making changes to the contents of `emailBlurb` and `emailSubject` properties when correcting envelopes.

     However, if the `messageLock` node is set to true**** and the `emailSubject` property is empty, senders and correctors are able to add a subject to the envelope.
     *
     * @return string
     */
    public function getMessageLock(): ?string
    {
        return $this->messageLock;
    }

    /**
     * When set to **true**, prevents senders from changing the contents of `emailBlurb` and `emailSubject` properties for the envelope.

     Additionally, this prevents users from making changes to the contents of `emailBlurb` and `emailSubject` properties when correcting envelopes.

     However, if the `messageLock` node is set to true**** and the `emailSubject` property is empty, senders and correctors are able to add a subject to the envelope.
     *
     * @param string $messageLock
     *
     * @return self
     */
    public function setMessageLock(?string $messageLock): self
    {
        $this->messageLock = $messageLock;

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
     * A complex element that specifies the notification options for the envelope. It consists of:.

     * useAccountDefaults - When set to **true**, the account default notification settings are used for the envelope.
     * reminders - A complex element that specifies reminder settings for the envelope. It consists of:

     * reminderEnabled - When set to **true**, a reminder message is sent to the recipient.
     * reminderDelay - An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     * reminderFrequency - An interger that sets the interval, in days, between reminder emails.

     * expirations - A complex element that specifies the expiration settings for the envelope. It consists of:

     * expireEnabled - When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     * expireAfter - An integer that sets the number of days the envelope is active.
     * expireWarn - An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @return Notification
     */
    public function getNotification(): ?Notification
    {
        return $this->notification;
    }

    /**
     * A complex element that specifies the notification options for the envelope. It consists of:.

     * useAccountDefaults - When set to **true**, the account default notification settings are used for the envelope.
     * reminders - A complex element that specifies reminder settings for the envelope. It consists of:

     * reminderEnabled - When set to **true**, a reminder message is sent to the recipient.
     * reminderDelay - An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     * reminderFrequency - An interger that sets the interval, in days, between reminder emails.

     * expirations - A complex element that specifies the expiration settings for the envelope. It consists of:

     * expireEnabled - When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     * expireAfter - An integer that sets the number of days the envelope is active.
     * expireWarn - An integer that sets the number of days before envelope expiration that an expiration warning email is sent to the recipient. If set to 0 (zero), no warning email is sent.
     *
     * @param Notification $notification
     *
     * @return self
     */
    public function setNotification(?Notification $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the notifications.
     *
     * @return string
     */
    public function getNotificationUri(): ?string
    {
        return $this->notificationUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the notifications.
     *
     * @param string $notificationUri
     *
     * @return self
     */
    public function setNotificationUri(?string $notificationUri): self
    {
        $this->notificationUri = $notificationUri;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getOwner(): ?UserInfo
    {
        return $this->owner;
    }

    /**
     * @param UserInfo $owner
     *
     * @return self
     */
    public function setOwner(?UserInfo $owner): self
    {
        $this->owner = $owner;

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
    public function getParentFolderUri(): ?string
    {
        return $this->parentFolderUri;
    }

    /**
     * @param string $parentFolderUri
     *
     * @return self
     */
    public function setParentFolderUri(?string $parentFolderUri): self
    {
        $this->parentFolderUri = $parentFolderUri;

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
    public function getPurgeState(): ?string
    {
        return $this->purgeState;
    }

    /**
     * @param string $purgeState
     *
     * @return self
     */
    public function setPurgeState(?string $purgeState): self
    {
        $this->purgeState = $purgeState;

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
     * When set to **true**, prevents senders from changing, correcting, or deleting the recipient information for the envelope.
     *
     * @return string
     */
    public function getRecipientsLock(): ?string
    {
        return $this->recipientsLock;
    }

    /**
     * When set to **true**, prevents senders from changing, correcting, or deleting the recipient information for the envelope.
     *
     * @param string $recipientsLock
     *
     * @return self
     */
    public function setRecipientsLock(?string $recipientsLock): self
    {
        $this->recipientsLock = $recipientsLock;

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
     * Specifies the physical location where the signing takes place. It can have two enumeration values; InPerson and Online. The default value is Online.
     *
     * @return string
     */
    public function getSigningLocation(): ?string
    {
        return $this->signingLocation;
    }

    /**
     * Specifies the physical location where the signing takes place. It can have two enumeration values; InPerson and Online. The default value is Online.
     *
     * @param string $signingLocation
     *
     * @return self
     */
    public function setSigningLocation(?string $signingLocation): self
    {
        $this->signingLocation = $signingLocation;

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
     * The data and time the status changed.
     *
     * @return string
     */
    public function getStatusChangedDateTime(): ?string
    {
        return $this->statusChangedDateTime;
    }

    /**
     * The data and time the status changed.
     *
     * @param string $statusChangedDateTime
     *
     * @return self
     */
    public function setStatusChangedDateTime(?string $statusChangedDateTime): self
    {
        $this->statusChangedDateTime = $statusChangedDateTime;

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
     * Contains a URI for an endpoint which you can use to retrieve the templates.
     *
     * @return string
     */
    public function getTemplatesUri(): ?string
    {
        return $this->templatesUri;
    }

    /**
     * Contains a URI for an endpoint which you can use to retrieve the templates.
     *
     * @param string $templatesUri
     *
     * @return self
     */
    public function setTemplatesUri(?string $templatesUri): self
    {
        $this->templatesUri = $templatesUri;

        return $this;
    }

    /**
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @return string
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

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
     * When set to **true**, the disclosure is shown to recipients in accordance with the account's Electronic Record and Signature Disclosure frequency setting. When set to **false**, the Electronic Record and Signature Disclosure is not shown to any envelope recipients.

     If the `useDisclosure` property is not set, then the account's normal disclosure setting is used and the value of the `useDisclosure` property is not returned in responses when getting envelope information.
     *
     * @return string
     */
    public function getUseDisclosure(): ?string
    {
        return $this->useDisclosure;
    }

    /**
     * When set to **true**, the disclosure is shown to recipients in accordance with the account's Electronic Record and Signature Disclosure frequency setting. When set to **false**, the Electronic Record and Signature Disclosure is not shown to any envelope recipients.

     If the `useDisclosure` property is not set, then the account's normal disclosure setting is used and the value of the `useDisclosure` property is not returned in responses when getting envelope information.
     *
     * @param string $useDisclosure
     *
     * @return self
     */
    public function setUseDisclosure(?string $useDisclosure): self
    {
        $this->useDisclosure = $useDisclosure;

        return $this;
    }

    /**
     * The date and time the envelope or template was voided.
     *
     * @return string
     */
    public function getVoidedDateTime(): ?string
    {
        return $this->voidedDateTime;
    }

    /**
     * The date and time the envelope or template was voided.
     *
     * @param string $voidedDateTime
     *
     * @return self
     */
    public function setVoidedDateTime(?string $voidedDateTime): self
    {
        $this->voidedDateTime = $voidedDateTime;

        return $this;
    }

    /**
     * The reason the envelope or template was voided.
     *
     * @return string
     */
    public function getVoidedReason(): ?string
    {
        return $this->voidedReason;
    }

    /**
     * The reason the envelope or template was voided.
     *
     * @param string $voidedReason
     *
     * @return self
     */
    public function setVoidedReason(?string $voidedReason): self
    {
        $this->voidedReason = $voidedReason;

        return $this;
    }
}
