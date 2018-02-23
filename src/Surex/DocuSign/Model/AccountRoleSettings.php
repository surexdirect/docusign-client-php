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
    public function getAllowAccountManagement(): ?string
    {
        return $this->allowAccountManagement;
    }

    /**
     * @param string $allowAccountManagement
     *
     * @return self
     */
    public function setAllowAccountManagement(?string $allowAccountManagement): self
    {
        $this->allowAccountManagement = $allowAccountManagement;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowAccountManagementMetadata(): ?SettingsMetadata
    {
        return $this->allowAccountManagementMetadata;
    }

    /**
     * @param SettingsMetadata $allowAccountManagementMetadata
     *
     * @return self
     */
    public function setAllowAccountManagementMetadata(?SettingsMetadata $allowAccountManagementMetadata): self
    {
        $this->allowAccountManagementMetadata = $allowAccountManagementMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiAccess(): ?string
    {
        return $this->allowApiAccess;
    }

    /**
     * @param string $allowApiAccess
     *
     * @return self
     */
    public function setAllowApiAccess(?string $allowApiAccess): self
    {
        $this->allowApiAccess = $allowApiAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiAccessMetadata(): ?SettingsMetadata
    {
        return $this->allowApiAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiAccessMetadata
     *
     * @return self
     */
    public function setAllowApiAccessMetadata(?SettingsMetadata $allowApiAccessMetadata): self
    {
        $this->allowApiAccessMetadata = $allowApiAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiAccessToAccount(): ?string
    {
        return $this->allowApiAccessToAccount;
    }

    /**
     * @param string $allowApiAccessToAccount
     *
     * @return self
     */
    public function setAllowApiAccessToAccount(?string $allowApiAccessToAccount): self
    {
        $this->allowApiAccessToAccount = $allowApiAccessToAccount;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiAccessToAccountMetadata(): ?SettingsMetadata
    {
        return $this->allowApiAccessToAccountMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiAccessToAccountMetadata
     *
     * @return self
     */
    public function setAllowApiAccessToAccountMetadata(?SettingsMetadata $allowApiAccessToAccountMetadata): self
    {
        $this->allowApiAccessToAccountMetadata = $allowApiAccessToAccountMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiSendingOnBehalfOfOthers(): ?string
    {
        return $this->allowApiSendingOnBehalfOfOthers;
    }

    /**
     * @param string $allowApiSendingOnBehalfOfOthers
     *
     * @return self
     */
    public function setAllowApiSendingOnBehalfOfOthers(?string $allowApiSendingOnBehalfOfOthers): self
    {
        $this->allowApiSendingOnBehalfOfOthers = $allowApiSendingOnBehalfOfOthers;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiSendingOnBehalfOfOthersMetadata(): ?SettingsMetadata
    {
        return $this->allowApiSendingOnBehalfOfOthersMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiSendingOnBehalfOfOthersMetadata
     *
     * @return self
     */
    public function setAllowApiSendingOnBehalfOfOthersMetadata(?SettingsMetadata $allowApiSendingOnBehalfOfOthersMetadata): self
    {
        $this->allowApiSendingOnBehalfOfOthersMetadata = $allowApiSendingOnBehalfOfOthersMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowApiSequentialSigning(): ?string
    {
        return $this->allowApiSequentialSigning;
    }

    /**
     * @param string $allowApiSequentialSigning
     *
     * @return self
     */
    public function setAllowApiSequentialSigning(?string $allowApiSequentialSigning): self
    {
        $this->allowApiSequentialSigning = $allowApiSequentialSigning;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowApiSequentialSigningMetadata(): ?SettingsMetadata
    {
        return $this->allowApiSequentialSigningMetadata;
    }

    /**
     * @param SettingsMetadata $allowApiSequentialSigningMetadata
     *
     * @return self
     */
    public function setAllowApiSequentialSigningMetadata(?SettingsMetadata $allowApiSequentialSigningMetadata): self
    {
        $this->allowApiSequentialSigningMetadata = $allowApiSequentialSigningMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowBulkSending(): ?string
    {
        return $this->allowBulkSending;
    }

    /**
     * @param string $allowBulkSending
     *
     * @return self
     */
    public function setAllowBulkSending(?string $allowBulkSending): self
    {
        $this->allowBulkSending = $allowBulkSending;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowBulkSendingMetadata(): ?SettingsMetadata
    {
        return $this->allowBulkSendingMetadata;
    }

    /**
     * @param SettingsMetadata $allowBulkSendingMetadata
     *
     * @return self
     */
    public function setAllowBulkSendingMetadata(?SettingsMetadata $allowBulkSendingMetadata): self
    {
        $this->allowBulkSendingMetadata = $allowBulkSendingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowDocuSignDesktopClient(): ?string
    {
        return $this->allowDocuSignDesktopClient;
    }

    /**
     * @param string $allowDocuSignDesktopClient
     *
     * @return self
     */
    public function setAllowDocuSignDesktopClient(?string $allowDocuSignDesktopClient): self
    {
        $this->allowDocuSignDesktopClient = $allowDocuSignDesktopClient;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowDocuSignDesktopClientMetadata(): ?SettingsMetadata
    {
        return $this->allowDocuSignDesktopClientMetadata;
    }

    /**
     * @param SettingsMetadata $allowDocuSignDesktopClientMetadata
     *
     * @return self
     */
    public function setAllowDocuSignDesktopClientMetadata(?SettingsMetadata $allowDocuSignDesktopClientMetadata): self
    {
        $this->allowDocuSignDesktopClientMetadata = $allowDocuSignDesktopClientMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedAddressBookAccess(): ?string
    {
        return $this->allowedAddressBookAccess;
    }

    /**
     * @param string $allowedAddressBookAccess
     *
     * @return self
     */
    public function setAllowedAddressBookAccess(?string $allowedAddressBookAccess): self
    {
        $this->allowedAddressBookAccess = $allowedAddressBookAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedAddressBookAccessMetadata(): ?SettingsMetadata
    {
        return $this->allowedAddressBookAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowedAddressBookAccessMetadata
     *
     * @return self
     */
    public function setAllowedAddressBookAccessMetadata(?SettingsMetadata $allowedAddressBookAccessMetadata): self
    {
        $this->allowedAddressBookAccessMetadata = $allowedAddressBookAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedTemplateAccess(): ?string
    {
        return $this->allowedTemplateAccess;
    }

    /**
     * @param string $allowedTemplateAccess
     *
     * @return self
     */
    public function setAllowedTemplateAccess(?string $allowedTemplateAccess): self
    {
        $this->allowedTemplateAccess = $allowedTemplateAccess;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedTemplateAccessMetadata(): ?SettingsMetadata
    {
        return $this->allowedTemplateAccessMetadata;
    }

    /**
     * @param SettingsMetadata $allowedTemplateAccessMetadata
     *
     * @return self
     */
    public function setAllowedTemplateAccessMetadata(?SettingsMetadata $allowedTemplateAccessMetadata): self
    {
        $this->allowedTemplateAccessMetadata = $allowedTemplateAccessMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowedToBeEnvelopeTransferRecipient(): ?string
    {
        return $this->allowedToBeEnvelopeTransferRecipient;
    }

    /**
     * @param string $allowedToBeEnvelopeTransferRecipient
     *
     * @return self
     */
    public function setAllowedToBeEnvelopeTransferRecipient(?string $allowedToBeEnvelopeTransferRecipient): self
    {
        $this->allowedToBeEnvelopeTransferRecipient = $allowedToBeEnvelopeTransferRecipient;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowedToBeEnvelopeTransferRecipientMetadata(): ?SettingsMetadata
    {
        return $this->allowedToBeEnvelopeTransferRecipientMetadata;
    }

    /**
     * @param SettingsMetadata $allowedToBeEnvelopeTransferRecipientMetadata
     *
     * @return self
     */
    public function setAllowedToBeEnvelopeTransferRecipientMetadata(?SettingsMetadata $allowedToBeEnvelopeTransferRecipientMetadata): self
    {
        $this->allowedToBeEnvelopeTransferRecipientMetadata = $allowedToBeEnvelopeTransferRecipientMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowEnvelopeSending(): ?string
    {
        return $this->allowEnvelopeSending;
    }

    /**
     * @param string $allowEnvelopeSending
     *
     * @return self
     */
    public function setAllowEnvelopeSending(?string $allowEnvelopeSending): self
    {
        $this->allowEnvelopeSending = $allowEnvelopeSending;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowEnvelopeSendingMetadata(): ?SettingsMetadata
    {
        return $this->allowEnvelopeSendingMetadata;
    }

    /**
     * @param SettingsMetadata $allowEnvelopeSendingMetadata
     *
     * @return self
     */
    public function setAllowEnvelopeSendingMetadata(?SettingsMetadata $allowEnvelopeSendingMetadata): self
    {
        $this->allowEnvelopeSendingMetadata = $allowEnvelopeSendingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSendersToSetRecipientEmailLanguage(): ?string
    {
        return $this->allowSendersToSetRecipientEmailLanguage;
    }

    /**
     * @param string $allowSendersToSetRecipientEmailLanguage
     *
     * @return self
     */
    public function setAllowSendersToSetRecipientEmailLanguage(?string $allowSendersToSetRecipientEmailLanguage): self
    {
        $this->allowSendersToSetRecipientEmailLanguage = $allowSendersToSetRecipientEmailLanguage;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSendersToSetRecipientEmailLanguageMetadata(): ?SettingsMetadata
    {
        return $this->allowSendersToSetRecipientEmailLanguageMetadata;
    }

    /**
     * @param SettingsMetadata $allowSendersToSetRecipientEmailLanguageMetadata
     *
     * @return self
     */
    public function setAllowSendersToSetRecipientEmailLanguageMetadata(?SettingsMetadata $allowSendersToSetRecipientEmailLanguageMetadata): self
    {
        $this->allowSendersToSetRecipientEmailLanguageMetadata = $allowSendersToSetRecipientEmailLanguageMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSignerAttachments(): ?string
    {
        return $this->allowSignerAttachments;
    }

    /**
     * @param string $allowSignerAttachments
     *
     * @return self
     */
    public function setAllowSignerAttachments(?string $allowSignerAttachments): self
    {
        $this->allowSignerAttachments = $allowSignerAttachments;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSignerAttachmentsMetadata(): ?SettingsMetadata
    {
        return $this->allowSignerAttachmentsMetadata;
    }

    /**
     * @param SettingsMetadata $allowSignerAttachmentsMetadata
     *
     * @return self
     */
    public function setAllowSignerAttachmentsMetadata(?SettingsMetadata $allowSignerAttachmentsMetadata): self
    {
        $this->allowSignerAttachmentsMetadata = $allowSignerAttachmentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowSupplementalDocuments(): ?string
    {
        return $this->allowSupplementalDocuments;
    }

    /**
     * @param string $allowSupplementalDocuments
     *
     * @return self
     */
    public function setAllowSupplementalDocuments(?string $allowSupplementalDocuments): self
    {
        $this->allowSupplementalDocuments = $allowSupplementalDocuments;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowSupplementalDocumentsMetadata(): ?SettingsMetadata
    {
        return $this->allowSupplementalDocumentsMetadata;
    }

    /**
     * @param SettingsMetadata $allowSupplementalDocumentsMetadata
     *
     * @return self
     */
    public function setAllowSupplementalDocumentsMetadata(?SettingsMetadata $allowSupplementalDocumentsMetadata): self
    {
        $this->allowSupplementalDocumentsMetadata = $allowSupplementalDocumentsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowTaggingInSendAndCorrect(): ?string
    {
        return $this->allowTaggingInSendAndCorrect;
    }

    /**
     * @param string $allowTaggingInSendAndCorrect
     *
     * @return self
     */
    public function setAllowTaggingInSendAndCorrect(?string $allowTaggingInSendAndCorrect): self
    {
        $this->allowTaggingInSendAndCorrect = $allowTaggingInSendAndCorrect;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowTaggingInSendAndCorrectMetadata(): ?SettingsMetadata
    {
        return $this->allowTaggingInSendAndCorrectMetadata;
    }

    /**
     * @param SettingsMetadata $allowTaggingInSendAndCorrectMetadata
     *
     * @return self
     */
    public function setAllowTaggingInSendAndCorrectMetadata(?SettingsMetadata $allowTaggingInSendAndCorrectMetadata): self
    {
        $this->allowTaggingInSendAndCorrectMetadata = $allowTaggingInSendAndCorrectMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowVaulting(): ?string
    {
        return $this->allowVaulting;
    }

    /**
     * @param string $allowVaulting
     *
     * @return self
     */
    public function setAllowVaulting(?string $allowVaulting): self
    {
        $this->allowVaulting = $allowVaulting;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowVaultingMetadata(): ?SettingsMetadata
    {
        return $this->allowVaultingMetadata;
    }

    /**
     * @param SettingsMetadata $allowVaultingMetadata
     *
     * @return self
     */
    public function setAllowVaultingMetadata(?SettingsMetadata $allowVaultingMetadata): self
    {
        $this->allowVaultingMetadata = $allowVaultingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllowWetSigningOverride(): ?string
    {
        return $this->allowWetSigningOverride;
    }

    /**
     * @param string $allowWetSigningOverride
     *
     * @return self
     */
    public function setAllowWetSigningOverride(?string $allowWetSigningOverride): self
    {
        $this->allowWetSigningOverride = $allowWetSigningOverride;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getAllowWetSigningOverrideMetadata(): ?SettingsMetadata
    {
        return $this->allowWetSigningOverrideMetadata;
    }

    /**
     * @param SettingsMetadata $allowWetSigningOverrideMetadata
     *
     * @return self
     */
    public function setAllowWetSigningOverrideMetadata(?SettingsMetadata $allowWetSigningOverrideMetadata): self
    {
        $this->allowWetSigningOverrideMetadata = $allowWetSigningOverrideMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanCreateWorkspaces(): ?string
    {
        return $this->canCreateWorkspaces;
    }

    /**
     * @param string $canCreateWorkspaces
     *
     * @return self
     */
    public function setCanCreateWorkspaces(?string $canCreateWorkspaces): self
    {
        $this->canCreateWorkspaces = $canCreateWorkspaces;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getCanCreateWorkspacesMetadata(): ?SettingsMetadata
    {
        return $this->canCreateWorkspacesMetadata;
    }

    /**
     * @param SettingsMetadata $canCreateWorkspacesMetadata
     *
     * @return self
     */
    public function setCanCreateWorkspacesMetadata(?SettingsMetadata $canCreateWorkspacesMetadata): self
    {
        $this->canCreateWorkspacesMetadata = $canCreateWorkspacesMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisableDocumentUpload(): ?string
    {
        return $this->disableDocumentUpload;
    }

    /**
     * @param string $disableDocumentUpload
     *
     * @return self
     */
    public function setDisableDocumentUpload(?string $disableDocumentUpload): self
    {
        $this->disableDocumentUpload = $disableDocumentUpload;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDisableDocumentUploadMetadata(): ?SettingsMetadata
    {
        return $this->disableDocumentUploadMetadata;
    }

    /**
     * @param SettingsMetadata $disableDocumentUploadMetadata
     *
     * @return self
     */
    public function setDisableDocumentUploadMetadata(?SettingsMetadata $disableDocumentUploadMetadata): self
    {
        $this->disableDocumentUploadMetadata = $disableDocumentUploadMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisableOtherActions(): ?string
    {
        return $this->disableOtherActions;
    }

    /**
     * @param string $disableOtherActions
     *
     * @return self
     */
    public function setDisableOtherActions(?string $disableOtherActions): self
    {
        $this->disableOtherActions = $disableOtherActions;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getDisableOtherActionsMetadata(): ?SettingsMetadata
    {
        return $this->disableOtherActionsMetadata;
    }

    /**
     * @param SettingsMetadata $disableOtherActionsMetadata
     *
     * @return self
     */
    public function setDisableOtherActionsMetadata(?SettingsMetadata $disableOtherActionsMetadata): self
    {
        $this->disableOtherActionsMetadata = $disableOtherActionsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableApiRequestLogging(): ?string
    {
        return $this->enableApiRequestLogging;
    }

    /**
     * @param string $enableApiRequestLogging
     *
     * @return self
     */
    public function setEnableApiRequestLogging(?string $enableApiRequestLogging): self
    {
        $this->enableApiRequestLogging = $enableApiRequestLogging;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableApiRequestLoggingMetadata(): ?SettingsMetadata
    {
        return $this->enableApiRequestLoggingMetadata;
    }

    /**
     * @param SettingsMetadata $enableApiRequestLoggingMetadata
     *
     * @return self
     */
    public function setEnableApiRequestLoggingMetadata(?SettingsMetadata $enableApiRequestLoggingMetadata): self
    {
        $this->enableApiRequestLoggingMetadata = $enableApiRequestLoggingMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableRecipientViewingNotifications(): ?string
    {
        return $this->enableRecipientViewingNotifications;
    }

    /**
     * @param string $enableRecipientViewingNotifications
     *
     * @return self
     */
    public function setEnableRecipientViewingNotifications(?string $enableRecipientViewingNotifications): self
    {
        $this->enableRecipientViewingNotifications = $enableRecipientViewingNotifications;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableRecipientViewingNotificationsMetadata(): ?SettingsMetadata
    {
        return $this->enableRecipientViewingNotificationsMetadata;
    }

    /**
     * @param SettingsMetadata $enableRecipientViewingNotificationsMetadata
     *
     * @return self
     */
    public function setEnableRecipientViewingNotificationsMetadata(?SettingsMetadata $enableRecipientViewingNotificationsMetadata): self
    {
        $this->enableRecipientViewingNotificationsMetadata = $enableRecipientViewingNotificationsMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableSequentialSigningInterface(): ?string
    {
        return $this->enableSequentialSigningInterface;
    }

    /**
     * @param string $enableSequentialSigningInterface
     *
     * @return self
     */
    public function setEnableSequentialSigningInterface(?string $enableSequentialSigningInterface): self
    {
        $this->enableSequentialSigningInterface = $enableSequentialSigningInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableSequentialSigningInterfaceMetadata(): ?SettingsMetadata
    {
        return $this->enableSequentialSigningInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $enableSequentialSigningInterfaceMetadata
     *
     * @return self
     */
    public function setEnableSequentialSigningInterfaceMetadata(?SettingsMetadata $enableSequentialSigningInterfaceMetadata): self
    {
        $this->enableSequentialSigningInterfaceMetadata = $enableSequentialSigningInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableTransactionPointIntegration(): ?string
    {
        return $this->enableTransactionPointIntegration;
    }

    /**
     * @param string $enableTransactionPointIntegration
     *
     * @return self
     */
    public function setEnableTransactionPointIntegration(?string $enableTransactionPointIntegration): self
    {
        $this->enableTransactionPointIntegration = $enableTransactionPointIntegration;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getEnableTransactionPointIntegrationMetadata(): ?SettingsMetadata
    {
        return $this->enableTransactionPointIntegrationMetadata;
    }

    /**
     * @param SettingsMetadata $enableTransactionPointIntegrationMetadata
     *
     * @return self
     */
    public function setEnableTransactionPointIntegrationMetadata(?SettingsMetadata $enableTransactionPointIntegrationMetadata): self
    {
        $this->enableTransactionPointIntegrationMetadata = $enableTransactionPointIntegrationMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerFormRole(): ?string
    {
        return $this->powerFormRole;
    }

    /**
     * @param string $powerFormRole
     *
     * @return self
     */
    public function setPowerFormRole(?string $powerFormRole): self
    {
        $this->powerFormRole = $powerFormRole;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getPowerFormRoleMetadata(): ?SettingsMetadata
    {
        return $this->powerFormRoleMetadata;
    }

    /**
     * @param SettingsMetadata $powerFormRoleMetadata
     *
     * @return self
     */
    public function setPowerFormRoleMetadata(?SettingsMetadata $powerFormRoleMetadata): self
    {
        $this->powerFormRoleMetadata = $powerFormRoleMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiveCompletedSelfSignedDocumentsAsEmailLinks(): ?string
    {
        return $this->receiveCompletedSelfSignedDocumentsAsEmailLinks;
    }

    /**
     * @param string $receiveCompletedSelfSignedDocumentsAsEmailLinks
     *
     * @return self
     */
    public function setReceiveCompletedSelfSignedDocumentsAsEmailLinks(?string $receiveCompletedSelfSignedDocumentsAsEmailLinks): self
    {
        $this->receiveCompletedSelfSignedDocumentsAsEmailLinks = $receiveCompletedSelfSignedDocumentsAsEmailLinks;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata(): ?SettingsMetadata
    {
        return $this->receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata;
    }

    /**
     * @param SettingsMetadata $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata
     *
     * @return self
     */
    public function setReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata(?SettingsMetadata $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata): self
    {
        $this->receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata = $receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustAccept(): ?string
    {
        return $this->supplementalDocumentsMustAccept;
    }

    /**
     * @param string $supplementalDocumentsMustAccept
     *
     * @return self
     */
    public function setSupplementalDocumentsMustAccept(?string $supplementalDocumentsMustAccept): self
    {
        $this->supplementalDocumentsMustAccept = $supplementalDocumentsMustAccept;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustAcceptMetadata(): ?SettingsMetadata
    {
        return $this->supplementalDocumentsMustAcceptMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustAcceptMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustAcceptMetadata(?SettingsMetadata $supplementalDocumentsMustAcceptMetadata): self
    {
        $this->supplementalDocumentsMustAcceptMetadata = $supplementalDocumentsMustAcceptMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustRead(): ?string
    {
        return $this->supplementalDocumentsMustRead;
    }

    /**
     * @param string $supplementalDocumentsMustRead
     *
     * @return self
     */
    public function setSupplementalDocumentsMustRead(?string $supplementalDocumentsMustRead): self
    {
        $this->supplementalDocumentsMustRead = $supplementalDocumentsMustRead;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustReadMetadata(): ?SettingsMetadata
    {
        return $this->supplementalDocumentsMustReadMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustReadMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustReadMetadata(?SettingsMetadata $supplementalDocumentsMustReadMetadata): self
    {
        $this->supplementalDocumentsMustReadMetadata = $supplementalDocumentsMustReadMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalDocumentsMustView(): ?string
    {
        return $this->supplementalDocumentsMustView;
    }

    /**
     * @param string $supplementalDocumentsMustView
     *
     * @return self
     */
    public function setSupplementalDocumentsMustView(?string $supplementalDocumentsMustView): self
    {
        $this->supplementalDocumentsMustView = $supplementalDocumentsMustView;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getSupplementalDocumentsMustViewMetadata(): ?SettingsMetadata
    {
        return $this->supplementalDocumentsMustViewMetadata;
    }

    /**
     * @param SettingsMetadata $supplementalDocumentsMustViewMetadata
     *
     * @return self
     */
    public function setSupplementalDocumentsMustViewMetadata(?SettingsMetadata $supplementalDocumentsMustViewMetadata): self
    {
        $this->supplementalDocumentsMustViewMetadata = $supplementalDocumentsMustViewMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseNewDocuSignExperienceInterface(): ?string
    {
        return $this->useNewDocuSignExperienceInterface;
    }

    /**
     * @param string $useNewDocuSignExperienceInterface
     *
     * @return self
     */
    public function setUseNewDocuSignExperienceInterface(?string $useNewDocuSignExperienceInterface): self
    {
        $this->useNewDocuSignExperienceInterface = $useNewDocuSignExperienceInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseNewDocuSignExperienceInterfaceMetadata(): ?SettingsMetadata
    {
        return $this->useNewDocuSignExperienceInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $useNewDocuSignExperienceInterfaceMetadata
     *
     * @return self
     */
    public function setUseNewDocuSignExperienceInterfaceMetadata(?SettingsMetadata $useNewDocuSignExperienceInterfaceMetadata): self
    {
        $this->useNewDocuSignExperienceInterfaceMetadata = $useNewDocuSignExperienceInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseNewSendingInterface(): ?string
    {
        return $this->useNewSendingInterface;
    }

    /**
     * @param string $useNewSendingInterface
     *
     * @return self
     */
    public function setUseNewSendingInterface(?string $useNewSendingInterface): self
    {
        $this->useNewSendingInterface = $useNewSendingInterface;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getUseNewSendingInterfaceMetadata(): ?SettingsMetadata
    {
        return $this->useNewSendingInterfaceMetadata;
    }

    /**
     * @param SettingsMetadata $useNewSendingInterfaceMetadata
     *
     * @return self
     */
    public function setUseNewSendingInterfaceMetadata(?SettingsMetadata $useNewSendingInterfaceMetadata): self
    {
        $this->useNewSendingInterfaceMetadata = $useNewSendingInterfaceMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getVaultingMode(): ?string
    {
        return $this->vaultingMode;
    }

    /**
     * @param string $vaultingMode
     *
     * @return self
     */
    public function setVaultingMode(?string $vaultingMode): self
    {
        $this->vaultingMode = $vaultingMode;

        return $this;
    }

    /**
     * @return SettingsMetadata
     */
    public function getVaultingModeMetadata(): ?SettingsMetadata
    {
        return $this->vaultingModeMetadata;
    }

    /**
     * @param SettingsMetadata $vaultingModeMetadata
     *
     * @return self
     */
    public function setVaultingModeMetadata(?SettingsMetadata $vaultingModeMetadata): self
    {
        $this->vaultingModeMetadata = $vaultingModeMetadata;

        return $this;
    }
}
