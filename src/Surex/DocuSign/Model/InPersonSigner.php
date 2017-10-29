<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class InPersonSigner
{
    /**
     * @var string
     */
    protected $accessCode;
    /**
     * @var string
     */
    protected $addAccessCodeToEmail;
    /**
     * @var string
     */
    protected $autoNavigation;
    /**
     * @var string
     */
    protected $canSignOffline;
    /**
     * @var string
     */
    protected $clientUserId;
    /**
     * @var string
     */
    protected $creationReason;
    /**
     * @var string[]
     */
    protected $customFields;
    /**
     * @var string
     */
    protected $declinedDateTime;
    /**
     * @var string
     */
    protected $declinedReason;
    /**
     * @var string
     */
    protected $defaultRecipient;
    /**
     * @var string
     */
    protected $deliveredDateTime;
    /**
     * @var string
     */
    protected $deliveryMethod;
    /**
     * @var DocumentVisibility[]
     */
    protected $documentVisibility;
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
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $faxNumber;
    /**
     * @var string
     */
    protected $hostEmail;
    /**
     * @var string
     */
    protected $hostName;
    /**
     * @var string
     */
    protected $idCheckConfigurationName;
    /**
     * @var IdCheckInformationInput
     */
    protected $idCheckInformationInput;
    /**
     * @var string
     */
    protected $inheritEmailNotificationConfiguration;
    /**
     * @var string
     */
    protected $inPersonSigningType;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var NotaryHost
     */
    protected $notaryHost;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var RecipientPhoneAuthentication
     */
    protected $phoneAuthentication;
    /**
     * @var RecipientAttachment[]
     */
    protected $recipientAttachments;
    /**
     * @var AuthenticationStatus
     */
    protected $recipientAuthenticationStatus;
    /**
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $recipientIdGuid;
    /**
     * @var RecipientSignatureProvider[]
     */
    protected $recipientSignatureProviders;
    /**
     * @var string
     */
    protected $recipientSuppliesTabs;
    /**
     * @var string
     */
    protected $requireIdLookup;
    /**
     * @var string
     */
    protected $requireSignerCertificate;
    /**
     * @var string
     */
    protected $requireSignOnPaper;
    /**
     * @var string
     */
    protected $roleName;
    /**
     * @var string
     */
    protected $routingOrder;
    /**
     * @var RecipientSAMLAuthentication
     */
    protected $samlAuthentication;
    /**
     * @var string
     */
    protected $sentDateTime;
    /**
     * @var RecipientSignatureInformation
     */
    protected $signatureInfo;
    /**
     * @var string
     */
    protected $signedDateTime;
    /**
     * @var string
     */
    protected $signerEmail;
    /**
     * @var string
     */
    protected $signerName;
    /**
     * @var string
     */
    protected $signInEachLocation;
    /**
     * @var string
     */
    protected $signingGroupId;
    /**
     * @var string
     */
    protected $signingGroupName;
    /**
     * @var UserInfo[]
     */
    protected $signingGroupUsers;
    /**
     * @var RecipientSMSAuthentication
     */
    protected $smsAuthentication;
    /**
     * @var SocialAuthentication[]
     */
    protected $socialAuthentications;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;
    /**
     * @var string
     */
    protected $templateLocked;
    /**
     * @var string
     */
    protected $templateRequired;
    /**
     * @var string
     */
    protected $totalTabCount;
    /**
     * @var string
     */
    protected $userId;

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
    public function getAddAccessCodeToEmail()
    {
        return $this->addAccessCodeToEmail;
    }

    /**
     * @param string $addAccessCodeToEmail
     *
     * @return self
     */
    public function setAddAccessCodeToEmail($addAccessCodeToEmail = null)
    {
        $this->addAccessCodeToEmail = $addAccessCodeToEmail;

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
    public function getCanSignOffline()
    {
        return $this->canSignOffline;
    }

    /**
     * @param string $canSignOffline
     *
     * @return self
     */
    public function setCanSignOffline($canSignOffline = null)
    {
        $this->canSignOffline = $canSignOffline;

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
    public function getCreationReason()
    {
        return $this->creationReason;
    }

    /**
     * @param string $creationReason
     *
     * @return self
     */
    public function setCreationReason($creationReason = null)
    {
        $this->creationReason = $creationReason;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param string[] $customFields
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
    public function getDeclinedReason()
    {
        return $this->declinedReason;
    }

    /**
     * @param string $declinedReason
     *
     * @return self
     */
    public function setDeclinedReason($declinedReason = null)
    {
        $this->declinedReason = $declinedReason;

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
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param string $deliveryMethod
     *
     * @return self
     */
    public function setDeliveryMethod($deliveryMethod = null)
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    /**
     * @return DocumentVisibility[]
     */
    public function getDocumentVisibility()
    {
        return $this->documentVisibility;
    }

    /**
     * @param DocumentVisibility[] $documentVisibility
     *
     * @return self
     */
    public function setDocumentVisibility(array $documentVisibility = null)
    {
        $this->documentVisibility = $documentVisibility;

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
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber($faxNumber = null)
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostEmail()
    {
        return $this->hostEmail;
    }

    /**
     * @param string $hostEmail
     *
     * @return self
     */
    public function setHostEmail($hostEmail = null)
    {
        $this->hostEmail = $hostEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName($hostName = null)
    {
        $this->hostName = $hostName;

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
     * @return IdCheckInformationInput
     */
    public function getIdCheckInformationInput()
    {
        return $this->idCheckInformationInput;
    }

    /**
     * @param IdCheckInformationInput $idCheckInformationInput
     *
     * @return self
     */
    public function setIdCheckInformationInput(IdCheckInformationInput $idCheckInformationInput = null)
    {
        $this->idCheckInformationInput = $idCheckInformationInput;

        return $this;
    }

    /**
     * @return string
     */
    public function getInheritEmailNotificationConfiguration()
    {
        return $this->inheritEmailNotificationConfiguration;
    }

    /**
     * @param string $inheritEmailNotificationConfiguration
     *
     * @return self
     */
    public function setInheritEmailNotificationConfiguration($inheritEmailNotificationConfiguration = null)
    {
        $this->inheritEmailNotificationConfiguration = $inheritEmailNotificationConfiguration;

        return $this;
    }

    /**
     * @return string
     */
    public function getInPersonSigningType()
    {
        return $this->inPersonSigningType;
    }

    /**
     * @param string $inPersonSigningType
     *
     * @return self
     */
    public function setInPersonSigningType($inPersonSigningType = null)
    {
        $this->inPersonSigningType = $inPersonSigningType;

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
     * @return NotaryHost
     */
    public function getNotaryHost()
    {
        return $this->notaryHost;
    }

    /**
     * @param NotaryHost $notaryHost
     *
     * @return self
     */
    public function setNotaryHost(NotaryHost $notaryHost = null)
    {
        $this->notaryHost = $notaryHost;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return RecipientPhoneAuthentication
     */
    public function getPhoneAuthentication()
    {
        return $this->phoneAuthentication;
    }

    /**
     * @param RecipientPhoneAuthentication $phoneAuthentication
     *
     * @return self
     */
    public function setPhoneAuthentication(RecipientPhoneAuthentication $phoneAuthentication = null)
    {
        $this->phoneAuthentication = $phoneAuthentication;

        return $this;
    }

    /**
     * @return RecipientAttachment[]
     */
    public function getRecipientAttachments()
    {
        return $this->recipientAttachments;
    }

    /**
     * @param RecipientAttachment[] $recipientAttachments
     *
     * @return self
     */
    public function setRecipientAttachments(array $recipientAttachments = null)
    {
        $this->recipientAttachments = $recipientAttachments;

        return $this;
    }

    /**
     * @return AuthenticationStatus
     */
    public function getRecipientAuthenticationStatus()
    {
        return $this->recipientAuthenticationStatus;
    }

    /**
     * @param AuthenticationStatus $recipientAuthenticationStatus
     *
     * @return self
     */
    public function setRecipientAuthenticationStatus(AuthenticationStatus $recipientAuthenticationStatus = null)
    {
        $this->recipientAuthenticationStatus = $recipientAuthenticationStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientIdGuid()
    {
        return $this->recipientIdGuid;
    }

    /**
     * @param string $recipientIdGuid
     *
     * @return self
     */
    public function setRecipientIdGuid($recipientIdGuid = null)
    {
        $this->recipientIdGuid = $recipientIdGuid;

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
    public function getRecipientSuppliesTabs()
    {
        return $this->recipientSuppliesTabs;
    }

    /**
     * @param string $recipientSuppliesTabs
     *
     * @return self
     */
    public function setRecipientSuppliesTabs($recipientSuppliesTabs = null)
    {
        $this->recipientSuppliesTabs = $recipientSuppliesTabs;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireIdLookup()
    {
        return $this->requireIdLookup;
    }

    /**
     * @param string $requireIdLookup
     *
     * @return self
     */
    public function setRequireIdLookup($requireIdLookup = null)
    {
        $this->requireIdLookup = $requireIdLookup;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireSignerCertificate()
    {
        return $this->requireSignerCertificate;
    }

    /**
     * @param string $requireSignerCertificate
     *
     * @return self
     */
    public function setRequireSignerCertificate($requireSignerCertificate = null)
    {
        $this->requireSignerCertificate = $requireSignerCertificate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireSignOnPaper()
    {
        return $this->requireSignOnPaper;
    }

    /**
     * @param string $requireSignOnPaper
     *
     * @return self
     */
    public function setRequireSignOnPaper($requireSignOnPaper = null)
    {
        $this->requireSignOnPaper = $requireSignOnPaper;

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
     * @return RecipientSAMLAuthentication
     */
    public function getSamlAuthentication()
    {
        return $this->samlAuthentication;
    }

    /**
     * @param RecipientSAMLAuthentication $samlAuthentication
     *
     * @return self
     */
    public function setSamlAuthentication(RecipientSAMLAuthentication $samlAuthentication = null)
    {
        $this->samlAuthentication = $samlAuthentication;

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
     * @return RecipientSignatureInformation
     */
    public function getSignatureInfo()
    {
        return $this->signatureInfo;
    }

    /**
     * @param RecipientSignatureInformation $signatureInfo
     *
     * @return self
     */
    public function setSignatureInfo(RecipientSignatureInformation $signatureInfo = null)
    {
        $this->signatureInfo = $signatureInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignedDateTime()
    {
        return $this->signedDateTime;
    }

    /**
     * @param string $signedDateTime
     *
     * @return self
     */
    public function setSignedDateTime($signedDateTime = null)
    {
        $this->signedDateTime = $signedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerEmail()
    {
        return $this->signerEmail;
    }

    /**
     * @param string $signerEmail
     *
     * @return self
     */
    public function setSignerEmail($signerEmail = null)
    {
        $this->signerEmail = $signerEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerName()
    {
        return $this->signerName;
    }

    /**
     * @param string $signerName
     *
     * @return self
     */
    public function setSignerName($signerName = null)
    {
        $this->signerName = $signerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignInEachLocation()
    {
        return $this->signInEachLocation;
    }

    /**
     * @param string $signInEachLocation
     *
     * @return self
     */
    public function setSignInEachLocation($signInEachLocation = null)
    {
        $this->signInEachLocation = $signInEachLocation;

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
     * @return string
     */
    public function getSigningGroupName()
    {
        return $this->signingGroupName;
    }

    /**
     * @param string $signingGroupName
     *
     * @return self
     */
    public function setSigningGroupName($signingGroupName = null)
    {
        $this->signingGroupName = $signingGroupName;

        return $this;
    }

    /**
     * @return UserInfo[]
     */
    public function getSigningGroupUsers()
    {
        return $this->signingGroupUsers;
    }

    /**
     * @param UserInfo[] $signingGroupUsers
     *
     * @return self
     */
    public function setSigningGroupUsers(array $signingGroupUsers = null)
    {
        $this->signingGroupUsers = $signingGroupUsers;

        return $this;
    }

    /**
     * @return RecipientSMSAuthentication
     */
    public function getSmsAuthentication()
    {
        return $this->smsAuthentication;
    }

    /**
     * @param RecipientSMSAuthentication $smsAuthentication
     *
     * @return self
     */
    public function setSmsAuthentication(RecipientSMSAuthentication $smsAuthentication = null)
    {
        $this->smsAuthentication = $smsAuthentication;

        return $this;
    }

    /**
     * @return SocialAuthentication[]
     */
    public function getSocialAuthentications()
    {
        return $this->socialAuthentications;
    }

    /**
     * @param SocialAuthentication[] $socialAuthentications
     *
     * @return self
     */
    public function setSocialAuthentications(array $socialAuthentications = null)
    {
        $this->socialAuthentications = $socialAuthentications;

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

    /**
     * @return string
     */
    public function getTemplateLocked()
    {
        return $this->templateLocked;
    }

    /**
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked($templateLocked = null)
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateRequired()
    {
        return $this->templateRequired;
    }

    /**
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired($templateRequired = null)
    {
        $this->templateRequired = $templateRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalTabCount()
    {
        return $this->totalTabCount;
    }

    /**
     * @param string $totalTabCount
     *
     * @return self
     */
    public function setTotalTabCount($totalTabCount = null)
    {
        $this->totalTabCount = $totalTabCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }
}
