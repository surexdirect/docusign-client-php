<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Templates
{
    /**
     * @var string
     */
    protected $allowMarkup;
    /**
     * @var string
     */
    protected $allowReassign;
    /**
     * @var string
     */
    protected $asynchronous;
    /**
     * @var string
     */
    protected $attachmentsUri;
    /**
     * @var string
     */
    protected $authoritativeCopy;
    /**
     * @var string
     */
    protected $autoNavigation;
    /**
     * @var string
     */
    protected $brandId;
    /**
     * @var string
     */
    protected $brandLock;
    /**
     * @var string
     */
    protected $certificateUri;
    /**
     * @var string
     */
    protected $completedDateTime;
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var AccountCustomFields
     */
    protected $customFields;
    /**
     * @var string
     */
    protected $customFieldsUri;
    /**
     * @var string
     */
    protected $declinedDateTime;
    /**
     * @var string
     */
    protected $deletedDateTime;
    /**
     * @var string
     */
    protected $deliveredDateTime;
    /**
     * @var Document[]
     */
    protected $documents;
    /**
     * @var string
     */
    protected $documentsCombinedUri;
    /**
     * @var string
     */
    protected $documentsUri;
    /**
     * @var string
     */
    protected $emailBlurb;
    /**
     * @var EnvelopeEmailSettings
     */
    protected $emailSettings;
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var string
     */
    protected $enableWetSign;
    /**
     * @var string
     */
    protected $enforceSignerVisibility;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $envelopeIdStamping;
    /**
     * @var EnvelopeTemplateDefinition
     */
    protected $envelopeTemplateDefinition;
    /**
     * @var string
     */
    protected $envelopeUri;
    /**
     * @var string
     */
    protected $initialSentDateTime;
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
     * @var EnvelopeLocks
     */
    protected $lockInformation;
    /**
     * @var string
     */
    protected $messageLock;
    /**
     * @var Notification
     */
    protected $notification;
    /**
     * @var string
     */
    protected $notificationUri;
    /**
     * @var string
     */
    protected $purgeState;
    /**
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * @var string
     */
    protected $recipientsLock;
    /**
     * @var string
     */
    protected $recipientsUri;
    /**
     * @var string
     */
    protected $sentDateTime;
    /**
     * @var string
     */
    protected $signingLocation;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $statusChangedDateTime;
    /**
     * @var string
     */
    protected $templatesUri;
    /**
     * @var string
     */
    protected $transactionId;
    /**
     * @var string
     */
    protected $useDisclosure;
    /**
     * @var string
     */
    protected $voidedDateTime;
    /**
     * @var string
     */
    protected $voidedReason;

    /**
     * @return string
     */
    public function getAllowMarkup()
    {
        return $this->allowMarkup;
    }

    /**
     * @param string $allowMarkup
     *
     * @return self
     */
    public function setAllowMarkup($allowMarkup = null)
    {
        $this->allowMarkup = $allowMarkup;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowReassign()
    {
        return $this->allowReassign;
    }

    /**
     * @param string $allowReassign
     *
     * @return self
     */
    public function setAllowReassign($allowReassign = null)
    {
        $this->allowReassign = $allowReassign;

        return $this;
    }

    /**
     * @return string
     */
    public function getAsynchronous()
    {
        return $this->asynchronous;
    }

    /**
     * @param string $asynchronous
     *
     * @return self
     */
    public function setAsynchronous($asynchronous = null)
    {
        $this->asynchronous = $asynchronous;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentsUri()
    {
        return $this->attachmentsUri;
    }

    /**
     * @param string $attachmentsUri
     *
     * @return self
     */
    public function setAttachmentsUri($attachmentsUri = null)
    {
        $this->attachmentsUri = $attachmentsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthoritativeCopy()
    {
        return $this->authoritativeCopy;
    }

    /**
     * @param string $authoritativeCopy
     *
     * @return self
     */
    public function setAuthoritativeCopy($authoritativeCopy = null)
    {
        $this->authoritativeCopy = $authoritativeCopy;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoNavigation()
    {
        return $this->autoNavigation;
    }

    /**
     * @param string $autoNavigation
     *
     * @return self
     */
    public function setAutoNavigation($autoNavigation = null)
    {
        $this->autoNavigation = $autoNavigation;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId($brandId = null)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrandLock()
    {
        return $this->brandLock;
    }

    /**
     * @param string $brandLock
     *
     * @return self
     */
    public function setBrandLock($brandLock = null)
    {
        $this->brandLock = $brandLock;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateUri()
    {
        return $this->certificateUri;
    }

    /**
     * @param string $certificateUri
     *
     * @return self
     */
    public function setCertificateUri($certificateUri = null)
    {
        $this->certificateUri = $certificateUri;

        return $this;
    }

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
     * @return AccountCustomFields
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param AccountCustomFields $customFields
     *
     * @return self
     */
    public function setCustomFields(AccountCustomFields $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomFieldsUri()
    {
        return $this->customFieldsUri;
    }

    /**
     * @param string $customFieldsUri
     *
     * @return self
     */
    public function setCustomFieldsUri($customFieldsUri = null)
    {
        $this->customFieldsUri = $customFieldsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeclinedDateTime()
    {
        return $this->declinedDateTime;
    }

    /**
     * @param string $declinedDateTime
     *
     * @return self
     */
    public function setDeclinedDateTime($declinedDateTime = null)
    {
        $this->declinedDateTime = $declinedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeletedDateTime()
    {
        return $this->deletedDateTime;
    }

    /**
     * @param string $deletedDateTime
     *
     * @return self
     */
    public function setDeletedDateTime($deletedDateTime = null)
    {
        $this->deletedDateTime = $deletedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveredDateTime()
    {
        return $this->deliveredDateTime;
    }

    /**
     * @param string $deliveredDateTime
     *
     * @return self
     */
    public function setDeliveredDateTime($deliveredDateTime = null)
    {
        $this->deliveredDateTime = $deliveredDateTime;

        return $this;
    }

    /**
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Document[] $documents
     *
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentsCombinedUri()
    {
        return $this->documentsCombinedUri;
    }

    /**
     * @param string $documentsCombinedUri
     *
     * @return self
     */
    public function setDocumentsCombinedUri($documentsCombinedUri = null)
    {
        $this->documentsCombinedUri = $documentsCombinedUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentsUri()
    {
        return $this->documentsUri;
    }

    /**
     * @param string $documentsUri
     *
     * @return self
     */
    public function setDocumentsUri($documentsUri = null)
    {
        $this->documentsUri = $documentsUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailBlurb()
    {
        return $this->emailBlurb;
    }

    /**
     * @param string $emailBlurb
     *
     * @return self
     */
    public function setEmailBlurb($emailBlurb = null)
    {
        $this->emailBlurb = $emailBlurb;

        return $this;
    }

    /**
     * @return EnvelopeEmailSettings
     */
    public function getEmailSettings()
    {
        return $this->emailSettings;
    }

    /**
     * @param EnvelopeEmailSettings $emailSettings
     *
     * @return self
     */
    public function setEmailSettings(EnvelopeEmailSettings $emailSettings = null)
    {
        $this->emailSettings = $emailSettings;

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
     * @return string
     */
    public function getEnableWetSign()
    {
        return $this->enableWetSign;
    }

    /**
     * @param string $enableWetSign
     *
     * @return self
     */
    public function setEnableWetSign($enableWetSign = null)
    {
        $this->enableWetSign = $enableWetSign;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnforceSignerVisibility()
    {
        return $this->enforceSignerVisibility;
    }

    /**
     * @param string $enforceSignerVisibility
     *
     * @return self
     */
    public function setEnforceSignerVisibility($enforceSignerVisibility = null)
    {
        $this->enforceSignerVisibility = $enforceSignerVisibility;

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
    public function getEnvelopeIdStamping()
    {
        return $this->envelopeIdStamping;
    }

    /**
     * @param string $envelopeIdStamping
     *
     * @return self
     */
    public function setEnvelopeIdStamping($envelopeIdStamping = null)
    {
        $this->envelopeIdStamping = $envelopeIdStamping;

        return $this;
    }

    /**
     * @return EnvelopeTemplateDefinition
     */
    public function getEnvelopeTemplateDefinition()
    {
        return $this->envelopeTemplateDefinition;
    }

    /**
     * @param EnvelopeTemplateDefinition $envelopeTemplateDefinition
     *
     * @return self
     */
    public function setEnvelopeTemplateDefinition(EnvelopeTemplateDefinition $envelopeTemplateDefinition = null)
    {
        $this->envelopeTemplateDefinition = $envelopeTemplateDefinition;

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
    public function getInitialSentDateTime()
    {
        return $this->initialSentDateTime;
    }

    /**
     * @param string $initialSentDateTime
     *
     * @return self
     */
    public function setInitialSentDateTime($initialSentDateTime = null)
    {
        $this->initialSentDateTime = $initialSentDateTime;

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
     * @return EnvelopeLocks
     */
    public function getLockInformation()
    {
        return $this->lockInformation;
    }

    /**
     * @param EnvelopeLocks $lockInformation
     *
     * @return self
     */
    public function setLockInformation(EnvelopeLocks $lockInformation = null)
    {
        $this->lockInformation = $lockInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessageLock()
    {
        return $this->messageLock;
    }

    /**
     * @param string $messageLock
     *
     * @return self
     */
    public function setMessageLock($messageLock = null)
    {
        $this->messageLock = $messageLock;

        return $this;
    }

    /**
     * @return Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param Notification $notification
     *
     * @return self
     */
    public function setNotification(Notification $notification = null)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationUri()
    {
        return $this->notificationUri;
    }

    /**
     * @param string $notificationUri
     *
     * @return self
     */
    public function setNotificationUri($notificationUri = null)
    {
        $this->notificationUri = $notificationUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurgeState()
    {
        return $this->purgeState;
    }

    /**
     * @param string $purgeState
     *
     * @return self
     */
    public function setPurgeState($purgeState = null)
    {
        $this->purgeState = $purgeState;

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
    public function getRecipientsLock()
    {
        return $this->recipientsLock;
    }

    /**
     * @param string $recipientsLock
     *
     * @return self
     */
    public function setRecipientsLock($recipientsLock = null)
    {
        $this->recipientsLock = $recipientsLock;

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
    public function getSigningLocation()
    {
        return $this->signingLocation;
    }

    /**
     * @param string $signingLocation
     *
     * @return self
     */
    public function setSigningLocation($signingLocation = null)
    {
        $this->signingLocation = $signingLocation;

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
    public function getStatusChangedDateTime()
    {
        return $this->statusChangedDateTime;
    }

    /**
     * @param string $statusChangedDateTime
     *
     * @return self
     */
    public function setStatusChangedDateTime($statusChangedDateTime = null)
    {
        $this->statusChangedDateTime = $statusChangedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplatesUri()
    {
        return $this->templatesUri;
    }

    /**
     * @param string $templatesUri
     *
     * @return self
     */
    public function setTemplatesUri($templatesUri = null)
    {
        $this->templatesUri = $templatesUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId($transactionId = null)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseDisclosure()
    {
        return $this->useDisclosure;
    }

    /**
     * @param string $useDisclosure
     *
     * @return self
     */
    public function setUseDisclosure($useDisclosure = null)
    {
        $this->useDisclosure = $useDisclosure;

        return $this;
    }

    /**
     * @return string
     */
    public function getVoidedDateTime()
    {
        return $this->voidedDateTime;
    }

    /**
     * @param string $voidedDateTime
     *
     * @return self
     */
    public function setVoidedDateTime($voidedDateTime = null)
    {
        $this->voidedDateTime = $voidedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getVoidedReason()
    {
        return $this->voidedReason;
    }

    /**
     * @param string $voidedReason
     *
     * @return self
     */
    public function setVoidedReason($voidedReason = null)
    {
        $this->voidedReason = $voidedReason;

        return $this;
    }
}
