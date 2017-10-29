<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountRoleSettings
{
    /**
     * @var string
     */
    protected $allowAccountManagement;
    /**
     * @var SettingsMetadata
     */
    protected $allowAccountManagementMetadata;
    /**
     * @var string
     */
    protected $allowApiAccess;
    /**
     * @var SettingsMetadata
     */
    protected $allowApiAccessMetadata;
    /**
     * @var string
     */
    protected $allowApiAccessToAccount;
    /**
     * @var SettingsMetadata
     */
    protected $allowApiAccessToAccountMetadata;
    /**
     * @var string
     */
    protected $allowApiSendingOnBehalfOfOthers;
    /**
     * @var SettingsMetadata
     */
    protected $allowApiSendingOnBehalfOfOthersMetadata;
    /**
     * @var string
     */
    protected $allowApiSequentialSigning;
    /**
     * @var SettingsMetadata
     */
    protected $allowApiSequentialSigningMetadata;
    /**
     * @var string
     */
    protected $allowBulkSending;
    /**
     * @var SettingsMetadata
     */
    protected $allowBulkSendingMetadata;
    /**
     * @var string
     */
    protected $allowDocuSignDesktopClient;
    /**
     * @var SettingsMetadata
     */
    protected $allowDocuSignDesktopClientMetadata;
    /**
     * @var string
     */
    protected $allowedAddressBookAccess;
    /**
     * @var SettingsMetadata
     */
    protected $allowedAddressBookAccessMetadata;
    /**
     * @var string
     */
    protected $allowedTemplateAccess;
    /**
     * @var SettingsMetadata
     */
    protected $allowedTemplateAccessMetadata;
    /**
     * @var string
     */
    protected $allowedToBeEnvelopeTransferRecipient;
    /**
     * @var SettingsMetadata
     */
    protected $allowedToBeEnvelopeTransferRecipientMetadata;
    /**
     * @var string
     */
    protected $allowEnvelopeSending;
    /**
     * @var SettingsMetadata
     */
    protected $allowEnvelopeSendingMetadata;
    /**
     * @var string
     */
    protected $allowSendersToSetRecipientEmailLanguage;
    /**
     * @var SettingsMetadata
     */
    protected $allowSendersToSetRecipientEmailLanguageMetadata;
    /**
     * @var string
     */
    protected $allowSignerAttachments;
    /**
     * @var SettingsMetadata
     */
    protected $allowSignerAttachmentsMetadata;
    /**
     * @var string
     */
    protected $allowSupplementalDocuments;
    /**
     * @var SettingsMetadata
     */
    protected $allowSupplementalDocumentsMetadata;
    /**
     * @var string
     */
    protected $allowTaggingInSendAndCorrect;
    /**
     * @var SettingsMetadata
     */
    protected $allowTaggingInSendAndCorrectMetadata;
    /**
     * @var string
     */
    protected $allowVaulting;
    /**
     * @var SettingsMetadata
     */
    protected $allowVaultingMetadata;
    /**
     * @var string
     */
    protected $allowWetSigningOverride;
    /**
     * @var SettingsMetadata
     */
    protected $allowWetSigningOverrideMetadata;
    /**
     * @var string
     */
    protected $canCreateWorkspaces;
    /**
     * @var SettingsMetadata
     */
    protected $canCreateWorkspacesMetadata;
    /**
     * @var string
     */
    protected $disableDocumentUpload;
    /**
     * @var SettingsMetadata
     */
    protected $disableDocumentUploadMetadata;
    /**
     * @var string
     */
    protected $disableOtherActions;
    /**
     * @var SettingsMetadata
     */
    protected $disableOtherActionsMetadata;
    /**
     * @var string
     */
    protected $enableApiRequestLogging;
    /**
     * @var SettingsMetadata
     */
    protected $enableApiRequestLoggingMetadata;
    /**
     * @var string
     */
    protected $enableRecipientViewingNotifications;
    /**
     * @var SettingsMetadata
     */
    protected $enableRecipientViewingNotificationsMetadata;
    /**
     * @var string
     */
    protected $enableSequentialSigningInterface;
    /**
     * @var SettingsMetadata
     */
    protected $enableSequentialSigningInterfaceMetadata;
    /**
     * @var string
     */
    protected $enableTransactionPointIntegration;
    /**
     * @var SettingsMetadata
     */
    protected $enableTransactionPointIntegrationMetadata;
    /**
     * @var string
     */
    protected $powerFormRole;
    /**
     * @var SettingsMetadata
     */
    protected $powerFormRoleMetadata;
    /**
     * @var string
     */
    protected $receiveCompletedSelfSignedDocumentsAsEmailLinks;
    /**
     * @var SettingsMetadata
     */
    protected $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata;
    /**
     * @var string
     */
    protected $supplementalDocumentsMustAccept;
    /**
     * @var SettingsMetadata
     */
    protected $supplementalDocumentsMustAcceptMetadata;
    /**
     * @var string
     */
    protected $supplementalDocumentsMustRead;
    /**
     * @var SettingsMetadata
     */
    protected $supplementalDocumentsMustReadMetadata;
    /**
     * @var string
     */
    protected $supplementalDocumentsMustView;
    /**
     * @var SettingsMetadata
     */
    protected $supplementalDocumentsMustViewMetadata;
    /**
     * @var string
     */
    protected $useNewDocuSignExperienceInterface;
    /**
     * @var SettingsMetadata
     */
    protected $useNewDocuSignExperienceInterfaceMetadata;
    /**
     * @var string
     */
    protected $useNewSendingInterface;
    /**
     * @var SettingsMetadata
     */
    protected $useNewSendingInterfaceMetadata;
    /**
     * @var string
     */
    protected $vaultingMode;
    /**
     * @var SettingsMetadata
     */
    protected $vaultingModeMetadata;

    /**
     * @return string
     */
    public function getAllowAccountManagement()
    {
        return $this->allowAccountManagement;
    }

    /**
     * @param string $allowAccountManagement
     *
     * @return self
     */
    public function setAllowAccountManagement($allowAccountManagement = null)
    {
        $this->allowAccountManagement = $allowAccountManagement;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowAccountManagementMetadata()
    {
        return $this->allowAccountManagementMetadata;
    }

    /**
     * @param SettingsMetadata $allowAccountManagementMetadata
     *
     * @return self
     */
    public function setAllowAccountManagementMetadata(SettingsMetadata $allowAccountManagementMetadata = null)
    {
        $this->allowAccountManagementMetadata = $allowAccountManagementMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiAccess()
    {
        return $this->allowApiAccess;
    }

    /**
     * @param string $allowApiAccess
     *
     * @return self
     */
    public function setAllowApiAccess($allowApiAccess = null)
    {
        $this->allowApiAccess = $allowApiAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiAccessMetadata()
    {
        return $this->allowApiAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiAccessMetadata
     *
     * @return self
     */
    public function setAllowApiAccessMetadata(SettingsMetadata $allowApiAccessMetadata = null)
    {
        $this->allowApiAccessMetadata = $allowApiAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiAccessToAccount()
    {
        return $this->allowApiAccessToAccount;
    }

    /**
     * @param string $allowApiAccessToAccount
     *
     * @return self
     */
    public function setAllowApiAccessToAccount($allowApiAccessToAccount = null)
    {
        $this->allowApiAccessToAccount = $allowApiAccessToAccount;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiAccessToAccountMetadata()
    {
        return $this->allowApiAccessToAccountMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiAccessToAccountMetadata
     *
     * @return self
     */
    public function setAllowApiAccessToAccountMetadata(SettingsMetadata $allowApiAccessToAccountMetadata = null)
    {
        $this->allowApiAccessToAccountMetadata = $allowApiAccessToAccountMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiSendingOnBehalfOfOthers()
    {
        return $this->allowApiSendingOnBehalfOfOthers;
    }

    /**
     * @param string $allowApiSendingOnBehalfOfOthers
     *
     * @return self
     */
    public function setAllowApiSendingOnBehalfOfOthers($allowApiSendingOnBehalfOfOthers = null)
    {
        $this->allowApiSendingOnBehalfOfOthers = $allowApiSendingOnBehalfOfOthers;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiSendingOnBehalfOfOthersMetadata()
    {
        return $this->allowApiSendingOnBehalfOfOthersMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiSendingOnBehalfOfOthersMetadata
     *
     * @return self
     */
    public function setAllowApiSendingOnBehalfOfOthersMetadata(SettingsMetadata $allowApiSendingOnBehalfOfOthersMetadata = null)
    {
        $this->allowApiSendingOnBehalfOfOthersMetadata = $allowApiSendingOnBehalfOfOthersMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiSequentialSigning()
    {
        return $this->allowApiSequentialSigning;
    }

    /**
     * @param string $allowApiSequentialSigning
     *
     * @return self
     */
    public function setAllowApiSequentialSigning($allowApiSequentialSigning = null)
    {
        $this->allowApiSequentialSigning = $allowApiSequentialSigning;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiSequentialSigningMetadata()
    {
        return $this->allowApiSequentialSigningMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiSequentialSigningMetadata
     *
     * @return self
     */
    public function setAllowApiSequentialSigningMetadata(SettingsMetadata $allowApiSequentialSigningMetadata = null)
    {
        $this->allowApiSequentialSigningMetadata = $allowApiSequentialSigningMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowBulkSending()
    {
        return $this->allowBulkSending;
    }

    /**
     * @param string $allowBulkSending
     *
     * @return self
     */
    public function setAllowBulkSending($allowBulkSending = null)
    {
        $this->allowBulkSending = $allowBulkSending;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowBulkSendingMetadata()
    {
        return $this->allowBulkSendingMetadata;
    }

    /**
     * @param SettingsMetadata $allowBulkSendingMetadata
     *
     * @return self
     */
    public function setAllowBulkSendingMetadata(SettingsMetadata $allowBulkSendingMetadata = null)
    {
        $this->allowBulkSendingMetadata = $allowBulkSendingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowDocuSignDesktopClient()
    {
        return $this->allowDocuSignDesktopClient;
    }

    /**
     * @param string $allowDocuSignDesktopClient
     *
     * @return self
     */
    public function setAllowDocuSignDesktopClient($allowDocuSignDesktopClient = null)
    {
        $this->allowDocuSignDesktopClient = $allowDocuSignDesktopClient;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowDocuSignDesktopClientMetadata()
    {
        return $this->allowDocuSignDesktopClientMetadata;
    }

    /**
     * @param SettingsMetadata $allowDocuSignDesktopClientMetadata
     *
     * @return self
     */
    public function setAllowDocuSignDesktopClientMetadata(SettingsMetadata $allowDocuSignDesktopClientMetadata = null)
    {
        $this->allowDocuSignDesktopClientMetadata = $allowDocuSignDesktopClientMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedAddressBookAccess()
    {
        return $this->allowedAddressBookAccess;
    }

    /**
     * @param string $allowedAddressBookAccess
     *
     * @return self
     */
    public function setAllowedAddressBookAccess($allowedAddressBookAccess = null)
    {
        $this->allowedAddressBookAccess = $allowedAddressBookAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedAddressBookAccessMetadata()
    {
        return $this->allowedAddressBookAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowedAddressBookAccessMetadata
     *
     * @return self
     */
    public function setAllowedAddressBookAccessMetadata(SettingsMetadata $allowedAddressBookAccessMetadata = null)
    {
        $this->allowedAddressBookAccessMetadata = $allowedAddressBookAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedTemplateAccess()
    {
        return $this->allowedTemplateAccess;
    }

    /**
     * @param string $allowedTemplateAccess
     *
     * @return self
     */
    public function setAllowedTemplateAccess($allowedTemplateAccess = null)
    {
        $this->allowedTemplateAccess = $allowedTemplateAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedTemplateAccessMetadata()
    {
        return $this->allowedTemplateAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowedTemplateAccessMetadata
     *
     * @return self
     */
    public function setAllowedTemplateAccessMetadata(SettingsMetadata $allowedTemplateAccessMetadata = null)
    {
        $this->allowedTemplateAccessMetadata = $allowedTemplateAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedToBeEnvelopeTransferRecipient()
    {
        return $this->allowedToBeEnvelopeTransferRecipient;
    }

    /**
     * @param string $allowedToBeEnvelopeTransferRecipient
     *
     * @return self
     */
    public function setAllowedToBeEnvelopeTransferRecipient($allowedToBeEnvelopeTransferRecipient = null)
    {
        $this->allowedToBeEnvelopeTransferRecipient = $allowedToBeEnvelopeTransferRecipient;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedToBeEnvelopeTransferRecipientMetadata()
    {
        return $this->allowedToBeEnvelopeTransferRecipientMetadata;
    }

    /**
     * @param SettingsMetadata $allowedToBeEnvelopeTransferRecipientMetadata
     *
     * @return self
     */
    public function setAllowedToBeEnvelopeTransferRecipientMetadata(SettingsMetadata $allowedToBeEnvelopeTransferRecipientMetadata = null)
    {
        $this->allowedToBeEnvelopeTransferRecipientMetadata = $allowedToBeEnvelopeTransferRecipientMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowEnvelopeSending()
    {
        return $this->allowEnvelopeSending;
    }

    /**
     * @param string $allowEnvelopeSending
     *
     * @return self
     */
    public function setAllowEnvelopeSending($allowEnvelopeSending = null)
    {
        $this->allowEnvelopeSending = $allowEnvelopeSending;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowEnvelopeSendingMetadata()
    {
        return $this->allowEnvelopeSendingMetadata;
    }

    /**
     * @param SettingsMetadata $allowEnvelopeSendingMetadata
     *
     * @return self
     */
    public function setAllowEnvelopeSendingMetadata(SettingsMetadata $allowEnvelopeSendingMetadata = null)
    {
        $this->allowEnvelopeSendingMetadata = $allowEnvelopeSendingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSendersToSetRecipientEmailLanguage()
    {
        return $this->allowSendersToSetRecipientEmailLanguage;
    }

    /**
     * @param string $allowSendersToSetRecipientEmailLanguage
     *
     * @return self
     */
    public function setAllowSendersToSetRecipientEmailLanguage($allowSendersToSetRecipientEmailLanguage = null)
    {
        $this->allowSendersToSetRecipientEmailLanguage = $allowSendersToSetRecipientEmailLanguage;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSendersToSetRecipientEmailLanguageMetadata()
    {
        return $this->allowSendersToSetRecipientEmailLanguageMetadata;
    }

    /**
     * @param SettingsMetadata $allowSendersToSetRecipientEmailLanguageMetadata
     *
     * @return self
     */
    public function setAllowSendersToSetRecipientEmailLanguageMetadata(SettingsMetadata $allowSendersToSetRecipientEmailLanguageMetadata = null)
    {
        $this->allowSendersToSetRecipientEmailLanguageMetadata = $allowSendersToSetRecipientEmailLanguageMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSignerAttachments()
    {
        return $this->allowSignerAttachments;
    }

    /**
     * @param string $allowSignerAttachments
     *
     * @return self
     */
    public function setAllowSignerAttachments($allowSignerAttachments = null)
    {
        $this->allowSignerAttachments = $allowSignerAttachments;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSignerAttachmentsMetadata()
    {
        return $this->allowSignerAttachmentsMetadata;
    }

    /**
     * @param SettingsMetadata $allowSignerAttachmentsMetadata
     *
     * @return self
     */
    public function setAllowSignerAttachmentsMetadata(SettingsMetadata $allowSignerAttachmentsMetadata = null)
    {
        $this->allowSignerAttachmentsMetadata = $allowSignerAttachmentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSupplementalDocuments()
    {
        return $this->allowSupplementalDocuments;
    }

    /**
     * @param string $allowSupplementalDocuments
     *
     * @return self
     */
    public function setAllowSupplementalDocuments($allowSupplementalDocuments = null)
    {
        $this->allowSupplementalDocuments = $allowSupplementalDocuments;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSupplementalDocumentsMetadata()
    {
        return $this->allowSupplementalDocumentsMetadata;
    }

    /**
     * @param SettingsMetadata $allowSupplementalDocumentsMetadata
     *
     * @return self
     */
    public function setAllowSupplementalDocumentsMetadata(SettingsMetadata $allowSupplementalDocumentsMetadata = null)
    {
        $this->allowSupplementalDocumentsMetadata = $allowSupplementalDocumentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowTaggingInSendAndCorrect()
    {
        return $this->allowTaggingInSendAndCorrect;
    }

    /**
     * @param string $allowTaggingInSendAndCorrect
     *
     * @return self
     */
    public function setAllowTaggingInSendAndCorrect($allowTaggingInSendAndCorrect = null)
    {
        $this->allowTaggingInSendAndCorrect = $allowTaggingInSendAndCorrect;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowTaggingInSendAndCorrectMetadata()
    {
        return $this->allowTaggingInSendAndCorrectMetadata;
    }

    /**
     * @param SettingsMetadata $allowTaggingInSendAndCorrectMetadata
     *
     * @return self
     */
    public function setAllowTaggingInSendAndCorrectMetadata(SettingsMetadata $allowTaggingInSendAndCorrectMetadata = null)
    {
        $this->allowTaggingInSendAndCorrectMetadata = $allowTaggingInSendAndCorrectMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowVaulting()
    {
        return $this->allowVaulting;
    }

    /**
     * @param string $allowVaulting
     *
     * @return self
     */
    public function setAllowVaulting($allowVaulting = null)
    {
        $this->allowVaulting = $allowVaulting;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowVaultingMetadata()
    {
        return $this->allowVaultingMetadata;
    }

    /**
     * @param SettingsMetadata $allowVaultingMetadata
     *
     * @return self
     */
    public function setAllowVaultingMetadata(SettingsMetadata $allowVaultingMetadata = null)
    {
        $this->allowVaultingMetadata = $allowVaultingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowWetSigningOverride()
    {
        return $this->allowWetSigningOverride;
    }

    /**
     * @param string $allowWetSigningOverride
     *
     * @return self
     */
    public function setAllowWetSigningOverride($allowWetSigningOverride = null)
    {
        $this->allowWetSigningOverride = $allowWetSigningOverride;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowWetSigningOverrideMetadata()
    {
        return $this->allowWetSigningOverrideMetadata;
    }

    /**
     * @param SettingsMetadata $allowWetSigningOverrideMetadata
     *
     * @return self
     */
    public function setAllowWetSigningOverrideMetadata(SettingsMetadata $allowWetSigningOverrideMetadata = null)
    {
        $this->allowWetSigningOverrideMetadata = $allowWetSigningOverrideMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanCreateWorkspaces()
    {
        return $this->canCreateWorkspaces;
    }

    /**
     * @param string $canCreateWorkspaces
     *
     * @return self
     */
    public function setCanCreateWorkspaces($canCreateWorkspaces = null)
    {
        $this->canCreateWorkspaces = $canCreateWorkspaces;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanCreateWorkspacesMetadata()
    {
        return $this->canCreateWorkspacesMetadata;
    }

    /**
     * @param SettingsMetadata $canCreateWorkspacesMetadata
     *
     * @return self
     */
    public function setCanCreateWorkspacesMetadata(SettingsMetadata $canCreateWorkspacesMetadata = null)
    {
        $this->canCreateWorkspacesMetadata = $canCreateWorkspacesMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisableDocumentUpload()
    {
        return $this->disableDocumentUpload;
    }

    /**
     * @param string $disableDocumentUpload
     *
     * @return self
     */
    public function setDisableDocumentUpload($disableDocumentUpload = null)
    {
        $this->disableDocumentUpload = $disableDocumentUpload;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDisableDocumentUploadMetadata()
    {
        return $this->disableDocumentUploadMetadata;
    }

    /**
     * @param SettingsMetadata $disableDocumentUploadMetadata
     *
     * @return self
     */
    public function setDisableDocumentUploadMetadata(SettingsMetadata $disableDocumentUploadMetadata = null)
    {
        $this->disableDocumentUploadMetadata = $disableDocumentUploadMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisableOtherActions()
    {
        return $this->disableOtherActions;
    }

    /**
     * @param string $disableOtherActions
     *
     * @return self
     */
    public function setDisableOtherActions($disableOtherActions = null)
    {
        $this->disableOtherActions = $disableOtherActions;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDisableOtherActionsMetadata()
    {
        return $this->disableOtherActionsMetadata;
    }

    /**
     * @param SettingsMetadata $disableOtherActionsMetadata
     *
     * @return self
     */
    public function setDisableOtherActionsMetadata(SettingsMetadata $disableOtherActionsMetadata = null)
    {
        $this->disableOtherActionsMetadata = $disableOtherActionsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableApiRequestLogging()
    {
        return $this->enableApiRequestLogging;
    }

    /**
     * @param string $enableApiRequestLogging
     *
     * @return self
     */
    public function setEnableApiRequestLogging($enableApiRequestLogging = null)
    {
        $this->enableApiRequestLogging = $enableApiRequestLogging;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableApiRequestLoggingMetadata()
    {
        return $this->enableApiRequestLoggingMetadata;
    }

    /**
     * @param SettingsMetadata $enableApiRequestLoggingMetadata
     *
     * @return self
     */
    public function setEnableApiRequestLoggingMetadata(SettingsMetadata $enableApiRequestLoggingMetadata = null)
    {
        $this->enableApiRequestLoggingMetadata = $enableApiRequestLoggingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableRecipientViewingNotifications()
    {
        return $this->enableRecipientViewingNotifications;
    }

    /**
     * @param string $enableRecipientViewingNotifications
     *
     * @return self
     */
    public function setEnableRecipientViewingNotifications($enableRecipientViewingNotifications = null)
    {
        $this->enableRecipientViewingNotifications = $enableRecipientViewingNotifications;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableRecipientViewingNotificationsMetadata()
    {
        return $this->enableRecipientViewingNotificationsMetadata;
    }

    /**
     * @param SettingsMetadata $enableRecipientViewingNotificationsMetadata
     *
     * @return self
     */
    public function setEnableRecipientViewingNotificationsMetadata(SettingsMetadata $enableRecipientViewingNotificationsMetadata = null)
    {
        $this->enableRecipientViewingNotificationsMetadata = $enableRecipientViewingNotificationsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableSequentialSigningInterface()
    {
        return $this->enableSequentialSigningInterface;
    }

    /**
     * @param string $enableSequentialSigningInterface
     *
     * @return self
     */
    public function setEnableSequentialSigningInterface($enableSequentialSigningInterface = null)
    {
        $this->enableSequentialSigningInterface = $enableSequentialSigningInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableSequentialSigningInterfaceMetadata()
    {
        return $this->enableSequentialSigningInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $enableSequentialSigningInterfaceMetadata
     *
     * @return self
     */
    public function setEnableSequentialSigningInterfaceMetadata(SettingsMetadata $enableSequentialSigningInterfaceMetadata = null)
    {
        $this->enableSequentialSigningInterfaceMetadata = $enableSequentialSigningInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableTransactionPointIntegration()
    {
        return $this->enableTransactionPointIntegration;
    }

    /**
     * @param string $enableTransactionPointIntegration
     *
     * @return self
     */
    public function setEnableTransactionPointIntegration($enableTransactionPointIntegration = null)
    {
        $this->enableTransactionPointIntegration = $enableTransactionPointIntegration;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableTransactionPointIntegrationMetadata()
    {
        return $this->enableTransactionPointIntegrationMetadata;
    }

    /**
     * @param SettingsMetadata $enableTransactionPointIntegrationMetadata
     *
     * @return self
     */
    public function setEnableTransactionPointIntegrationMetadata(SettingsMetadata $enableTransactionPointIntegrationMetadata = null)
    {
        $this->enableTransactionPointIntegrationMetadata = $enableTransactionPointIntegrationMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerFormRole()
    {
        return $this->powerFormRole;
    }

    /**
     * @param string $powerFormRole
     *
     * @return self
     */
    public function setPowerFormRole($powerFormRole = null)
    {
        $this->powerFormRole = $powerFormRole;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getPowerFormRoleMetadata()
    {
        return $this->powerFormRoleMetadata;
    }

    /**
     * @param SettingsMetadata $powerFormRoleMetadata
     *
     * @return self
     */
    public function setPowerFormRoleMetadata(SettingsMetadata $powerFormRoleMetadata = null)
    {
        $this->powerFormRoleMetadata = $powerFormRoleMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiveCompletedSelfSignedDocumentsAsEmailLinks()
    {
        return $this->receiveCompletedSelfSignedDocumentsAsEmailLinks;
    }

    /**
     * @param string $receiveCompletedSelfSignedDocumentsAsEmailLinks
     *
     * @return self
     */
    public function setReceiveCompletedSelfSignedDocumentsAsEmailLinks($receiveCompletedSelfSignedDocumentsAsEmailLinks = null)
    {
        $this->receiveCompletedSelfSignedDocumentsAsEmailLinks = $receiveCompletedSelfSignedDocumentsAsEmailLinks;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata()
    {
        return $this->receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata;
    }

    /**
     * @param SettingsMetadata $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata
     *
     * @return self
     */
    public function setReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata(SettingsMetadata $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata = null)
    {
        $this->receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata = $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustAccept()
    {
        return $this->supplementalDocumentsMustAccept;
    }

    /**
     * @param string $supplementalDocumentsMustAccept
     *
     * @return self
     */
    public function setSupplementalDocumentsMustAccept($supplementalDocumentsMustAccept = null)
    {
        $this->supplementalDocumentsMustAccept = $supplementalDocumentsMustAccept;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustAcceptMetadata()
    {
        return $this->supplementalDocumentsMustAcceptMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustAcceptMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustAcceptMetadata(SettingsMetadata $supplementalDocumentsMustAcceptMetadata = null)
    {
        $this->supplementalDocumentsMustAcceptMetadata = $supplementalDocumentsMustAcceptMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustRead()
    {
        return $this->supplementalDocumentsMustRead;
    }

    /**
     * @param string $supplementalDocumentsMustRead
     *
     * @return self
     */
    public function setSupplementalDocumentsMustRead($supplementalDocumentsMustRead = null)
    {
        $this->supplementalDocumentsMustRead = $supplementalDocumentsMustRead;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustReadMetadata()
    {
        return $this->supplementalDocumentsMustReadMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustReadMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustReadMetadata(SettingsMetadata $supplementalDocumentsMustReadMetadata = null)
    {
        $this->supplementalDocumentsMustReadMetadata = $supplementalDocumentsMustReadMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustView()
    {
        return $this->supplementalDocumentsMustView;
    }

    /**
     * @param string $supplementalDocumentsMustView
     *
     * @return self
     */
    public function setSupplementalDocumentsMustView($supplementalDocumentsMustView = null)
    {
        $this->supplementalDocumentsMustView = $supplementalDocumentsMustView;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustViewMetadata()
    {
        return $this->supplementalDocumentsMustViewMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustViewMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustViewMetadata(SettingsMetadata $supplementalDocumentsMustViewMetadata = null)
    {
        $this->supplementalDocumentsMustViewMetadata = $supplementalDocumentsMustViewMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseNewDocuSignExperienceInterface()
    {
        return $this->useNewDocuSignExperienceInterface;
    }

    /**
     * @param string $useNewDocuSignExperienceInterface
     *
     * @return self
     */
    public function setUseNewDocuSignExperienceInterface($useNewDocuSignExperienceInterface = null)
    {
        $this->useNewDocuSignExperienceInterface = $useNewDocuSignExperienceInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseNewDocuSignExperienceInterfaceMetadata()
    {
        return $this->useNewDocuSignExperienceInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $useNewDocuSignExperienceInterfaceMetadata
     *
     * @return self
     */
    public function setUseNewDocuSignExperienceInterfaceMetadata(SettingsMetadata $useNewDocuSignExperienceInterfaceMetadata = null)
    {
        $this->useNewDocuSignExperienceInterfaceMetadata = $useNewDocuSignExperienceInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseNewSendingInterface()
    {
        return $this->useNewSendingInterface;
    }

    /**
     * @param string $useNewSendingInterface
     *
     * @return self
     */
    public function setUseNewSendingInterface($useNewSendingInterface = null)
    {
        $this->useNewSendingInterface = $useNewSendingInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseNewSendingInterfaceMetadata()
    {
        return $this->useNewSendingInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $useNewSendingInterfaceMetadata
     *
     * @return self
     */
    public function setUseNewSendingInterfaceMetadata(SettingsMetadata $useNewSendingInterfaceMetadata = null)
    {
        $this->useNewSendingInterfaceMetadata = $useNewSendingInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getVaultingMode()
    {
        return $this->vaultingMode;
    }

    /**
     * @param string $vaultingMode
     *
     * @return self
     */
    public function setVaultingMode($vaultingMode = null)
    {
        $this->vaultingMode = $vaultingMode;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getVaultingModeMetadata()
    {
        return $this->vaultingModeMetadata;
    }

    /**
     * @param SettingsMetadata $vaultingModeMetadata
     *
     * @return self
     */
    public function setVaultingModeMetadata(SettingsMetadata $vaultingModeMetadata = null)
    {
        $this->vaultingModeMetadata = $vaultingModeMetadata;

        return $this;
    }
}
