<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountRoleSettingsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountRoleSettings' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountRoleSettings) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountRoleSettings();
        if (property_exists($data, 'allowAccountManagement')) {
            $object->setAllowAccountManagement($data->{'allowAccountManagement'});
        }
        if (property_exists($data, 'allowAccountManagementMetadata')) {
            $object->setAllowAccountManagementMetadata($this->serializer->deserialize($data->{'allowAccountManagementMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowApiAccess')) {
            $object->setAllowApiAccess($data->{'allowApiAccess'});
        }
        if (property_exists($data, 'allowApiAccessMetadata')) {
            $object->setAllowApiAccessMetadata($this->serializer->deserialize($data->{'allowApiAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowApiAccessToAccount')) {
            $object->setAllowApiAccessToAccount($data->{'allowApiAccessToAccount'});
        }
        if (property_exists($data, 'allowApiAccessToAccountMetadata')) {
            $object->setAllowApiAccessToAccountMetadata($this->serializer->deserialize($data->{'allowApiAccessToAccountMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowApiSendingOnBehalfOfOthers')) {
            $object->setAllowApiSendingOnBehalfOfOthers($data->{'allowApiSendingOnBehalfOfOthers'});
        }
        if (property_exists($data, 'allowApiSendingOnBehalfOfOthersMetadata')) {
            $object->setAllowApiSendingOnBehalfOfOthersMetadata($this->serializer->deserialize($data->{'allowApiSendingOnBehalfOfOthersMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowApiSequentialSigning')) {
            $object->setAllowApiSequentialSigning($data->{'allowApiSequentialSigning'});
        }
        if (property_exists($data, 'allowApiSequentialSigningMetadata')) {
            $object->setAllowApiSequentialSigningMetadata($this->serializer->deserialize($data->{'allowApiSequentialSigningMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowBulkSending')) {
            $object->setAllowBulkSending($data->{'allowBulkSending'});
        }
        if (property_exists($data, 'allowBulkSendingMetadata')) {
            $object->setAllowBulkSendingMetadata($this->serializer->deserialize($data->{'allowBulkSendingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowDocuSignDesktopClient')) {
            $object->setAllowDocuSignDesktopClient($data->{'allowDocuSignDesktopClient'});
        }
        if (property_exists($data, 'allowDocuSignDesktopClientMetadata')) {
            $object->setAllowDocuSignDesktopClientMetadata($this->serializer->deserialize($data->{'allowDocuSignDesktopClientMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowedAddressBookAccess')) {
            $object->setAllowedAddressBookAccess($data->{'allowedAddressBookAccess'});
        }
        if (property_exists($data, 'allowedAddressBookAccessMetadata')) {
            $object->setAllowedAddressBookAccessMetadata($this->serializer->deserialize($data->{'allowedAddressBookAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowedTemplateAccess')) {
            $object->setAllowedTemplateAccess($data->{'allowedTemplateAccess'});
        }
        if (property_exists($data, 'allowedTemplateAccessMetadata')) {
            $object->setAllowedTemplateAccessMetadata($this->serializer->deserialize($data->{'allowedTemplateAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowedToBeEnvelopeTransferRecipient')) {
            $object->setAllowedToBeEnvelopeTransferRecipient($data->{'allowedToBeEnvelopeTransferRecipient'});
        }
        if (property_exists($data, 'allowedToBeEnvelopeTransferRecipientMetadata')) {
            $object->setAllowedToBeEnvelopeTransferRecipientMetadata($this->serializer->deserialize($data->{'allowedToBeEnvelopeTransferRecipientMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowEnvelopeSending')) {
            $object->setAllowEnvelopeSending($data->{'allowEnvelopeSending'});
        }
        if (property_exists($data, 'allowEnvelopeSendingMetadata')) {
            $object->setAllowEnvelopeSendingMetadata($this->serializer->deserialize($data->{'allowEnvelopeSendingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowSendersToSetRecipientEmailLanguage')) {
            $object->setAllowSendersToSetRecipientEmailLanguage($data->{'allowSendersToSetRecipientEmailLanguage'});
        }
        if (property_exists($data, 'allowSendersToSetRecipientEmailLanguageMetadata')) {
            $object->setAllowSendersToSetRecipientEmailLanguageMetadata($this->serializer->deserialize($data->{'allowSendersToSetRecipientEmailLanguageMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowSignerAttachments')) {
            $object->setAllowSignerAttachments($data->{'allowSignerAttachments'});
        }
        if (property_exists($data, 'allowSignerAttachmentsMetadata')) {
            $object->setAllowSignerAttachmentsMetadata($this->serializer->deserialize($data->{'allowSignerAttachmentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowSupplementalDocuments')) {
            $object->setAllowSupplementalDocuments($data->{'allowSupplementalDocuments'});
        }
        if (property_exists($data, 'allowSupplementalDocumentsMetadata')) {
            $object->setAllowSupplementalDocumentsMetadata($this->serializer->deserialize($data->{'allowSupplementalDocumentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowTaggingInSendAndCorrect')) {
            $object->setAllowTaggingInSendAndCorrect($data->{'allowTaggingInSendAndCorrect'});
        }
        if (property_exists($data, 'allowTaggingInSendAndCorrectMetadata')) {
            $object->setAllowTaggingInSendAndCorrectMetadata($this->serializer->deserialize($data->{'allowTaggingInSendAndCorrectMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowVaulting')) {
            $object->setAllowVaulting($data->{'allowVaulting'});
        }
        if (property_exists($data, 'allowVaultingMetadata')) {
            $object->setAllowVaultingMetadata($this->serializer->deserialize($data->{'allowVaultingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'allowWetSigningOverride')) {
            $object->setAllowWetSigningOverride($data->{'allowWetSigningOverride'});
        }
        if (property_exists($data, 'allowWetSigningOverrideMetadata')) {
            $object->setAllowWetSigningOverrideMetadata($this->serializer->deserialize($data->{'allowWetSigningOverrideMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'canCreateWorkspaces')) {
            $object->setCanCreateWorkspaces($data->{'canCreateWorkspaces'});
        }
        if (property_exists($data, 'canCreateWorkspacesMetadata')) {
            $object->setCanCreateWorkspacesMetadata($this->serializer->deserialize($data->{'canCreateWorkspacesMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'disableDocumentUpload')) {
            $object->setDisableDocumentUpload($data->{'disableDocumentUpload'});
        }
        if (property_exists($data, 'disableDocumentUploadMetadata')) {
            $object->setDisableDocumentUploadMetadata($this->serializer->deserialize($data->{'disableDocumentUploadMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'disableOtherActions')) {
            $object->setDisableOtherActions($data->{'disableOtherActions'});
        }
        if (property_exists($data, 'disableOtherActionsMetadata')) {
            $object->setDisableOtherActionsMetadata($this->serializer->deserialize($data->{'disableOtherActionsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'enableApiRequestLogging')) {
            $object->setEnableApiRequestLogging($data->{'enableApiRequestLogging'});
        }
        if (property_exists($data, 'enableApiRequestLoggingMetadata')) {
            $object->setEnableApiRequestLoggingMetadata($this->serializer->deserialize($data->{'enableApiRequestLoggingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'enableRecipientViewingNotifications')) {
            $object->setEnableRecipientViewingNotifications($data->{'enableRecipientViewingNotifications'});
        }
        if (property_exists($data, 'enableRecipientViewingNotificationsMetadata')) {
            $object->setEnableRecipientViewingNotificationsMetadata($this->serializer->deserialize($data->{'enableRecipientViewingNotificationsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'enableSequentialSigningInterface')) {
            $object->setEnableSequentialSigningInterface($data->{'enableSequentialSigningInterface'});
        }
        if (property_exists($data, 'enableSequentialSigningInterfaceMetadata')) {
            $object->setEnableSequentialSigningInterfaceMetadata($this->serializer->deserialize($data->{'enableSequentialSigningInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'enableTransactionPointIntegration')) {
            $object->setEnableTransactionPointIntegration($data->{'enableTransactionPointIntegration'});
        }
        if (property_exists($data, 'enableTransactionPointIntegrationMetadata')) {
            $object->setEnableTransactionPointIntegrationMetadata($this->serializer->deserialize($data->{'enableTransactionPointIntegrationMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'powerFormRole')) {
            $object->setPowerFormRole($data->{'powerFormRole'});
        }
        if (property_exists($data, 'powerFormRoleMetadata')) {
            $object->setPowerFormRoleMetadata($this->serializer->deserialize($data->{'powerFormRoleMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'receiveCompletedSelfSignedDocumentsAsEmailLinks')) {
            $object->setReceiveCompletedSelfSignedDocumentsAsEmailLinks($data->{'receiveCompletedSelfSignedDocumentsAsEmailLinks'});
        }
        if (property_exists($data, 'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata')) {
            $object->setReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata($this->serializer->deserialize($data->{'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustAccept')) {
            $object->setSupplementalDocumentsMustAccept($data->{'supplementalDocumentsMustAccept'});
        }
        if (property_exists($data, 'supplementalDocumentsMustAcceptMetadata')) {
            $object->setSupplementalDocumentsMustAcceptMetadata($this->serializer->deserialize($data->{'supplementalDocumentsMustAcceptMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustRead')) {
            $object->setSupplementalDocumentsMustRead($data->{'supplementalDocumentsMustRead'});
        }
        if (property_exists($data, 'supplementalDocumentsMustReadMetadata')) {
            $object->setSupplementalDocumentsMustReadMetadata($this->serializer->deserialize($data->{'supplementalDocumentsMustReadMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustView')) {
            $object->setSupplementalDocumentsMustView($data->{'supplementalDocumentsMustView'});
        }
        if (property_exists($data, 'supplementalDocumentsMustViewMetadata')) {
            $object->setSupplementalDocumentsMustViewMetadata($this->serializer->deserialize($data->{'supplementalDocumentsMustViewMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'useNewDocuSignExperienceInterface')) {
            $object->setUseNewDocuSignExperienceInterface($data->{'useNewDocuSignExperienceInterface'});
        }
        if (property_exists($data, 'useNewDocuSignExperienceInterfaceMetadata')) {
            $object->setUseNewDocuSignExperienceInterfaceMetadata($this->serializer->deserialize($data->{'useNewDocuSignExperienceInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'useNewSendingInterface')) {
            $object->setUseNewSendingInterface($data->{'useNewSendingInterface'});
        }
        if (property_exists($data, 'useNewSendingInterfaceMetadata')) {
            $object->setUseNewSendingInterfaceMetadata($this->serializer->deserialize($data->{'useNewSendingInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'vaultingMode')) {
            $object->setVaultingMode($data->{'vaultingMode'});
        }
        if (property_exists($data, 'vaultingModeMetadata')) {
            $object->setVaultingModeMetadata($this->serializer->deserialize($data->{'vaultingModeMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowAccountManagement()) {
            $data->{'allowAccountManagement'} = $object->getAllowAccountManagement();
        }
        if (null !== $object->getAllowAccountManagementMetadata()) {
            $data->{'allowAccountManagementMetadata'} = $this->serializer->serialize($object->getAllowAccountManagementMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowApiAccess()) {
            $data->{'allowApiAccess'} = $object->getAllowApiAccess();
        }
        if (null !== $object->getAllowApiAccessMetadata()) {
            $data->{'allowApiAccessMetadata'} = $this->serializer->serialize($object->getAllowApiAccessMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowApiAccessToAccount()) {
            $data->{'allowApiAccessToAccount'} = $object->getAllowApiAccessToAccount();
        }
        if (null !== $object->getAllowApiAccessToAccountMetadata()) {
            $data->{'allowApiAccessToAccountMetadata'} = $this->serializer->serialize($object->getAllowApiAccessToAccountMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowApiSendingOnBehalfOfOthers()) {
            $data->{'allowApiSendingOnBehalfOfOthers'} = $object->getAllowApiSendingOnBehalfOfOthers();
        }
        if (null !== $object->getAllowApiSendingOnBehalfOfOthersMetadata()) {
            $data->{'allowApiSendingOnBehalfOfOthersMetadata'} = $this->serializer->serialize($object->getAllowApiSendingOnBehalfOfOthersMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowApiSequentialSigning()) {
            $data->{'allowApiSequentialSigning'} = $object->getAllowApiSequentialSigning();
        }
        if (null !== $object->getAllowApiSequentialSigningMetadata()) {
            $data->{'allowApiSequentialSigningMetadata'} = $this->serializer->serialize($object->getAllowApiSequentialSigningMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowBulkSending()) {
            $data->{'allowBulkSending'} = $object->getAllowBulkSending();
        }
        if (null !== $object->getAllowBulkSendingMetadata()) {
            $data->{'allowBulkSendingMetadata'} = $this->serializer->serialize($object->getAllowBulkSendingMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowDocuSignDesktopClient()) {
            $data->{'allowDocuSignDesktopClient'} = $object->getAllowDocuSignDesktopClient();
        }
        if (null !== $object->getAllowDocuSignDesktopClientMetadata()) {
            $data->{'allowDocuSignDesktopClientMetadata'} = $this->serializer->serialize($object->getAllowDocuSignDesktopClientMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowedAddressBookAccess()) {
            $data->{'allowedAddressBookAccess'} = $object->getAllowedAddressBookAccess();
        }
        if (null !== $object->getAllowedAddressBookAccessMetadata()) {
            $data->{'allowedAddressBookAccessMetadata'} = $this->serializer->serialize($object->getAllowedAddressBookAccessMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowedTemplateAccess()) {
            $data->{'allowedTemplateAccess'} = $object->getAllowedTemplateAccess();
        }
        if (null !== $object->getAllowedTemplateAccessMetadata()) {
            $data->{'allowedTemplateAccessMetadata'} = $this->serializer->serialize($object->getAllowedTemplateAccessMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowedToBeEnvelopeTransferRecipient()) {
            $data->{'allowedToBeEnvelopeTransferRecipient'} = $object->getAllowedToBeEnvelopeTransferRecipient();
        }
        if (null !== $object->getAllowedToBeEnvelopeTransferRecipientMetadata()) {
            $data->{'allowedToBeEnvelopeTransferRecipientMetadata'} = $this->serializer->serialize($object->getAllowedToBeEnvelopeTransferRecipientMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowEnvelopeSending()) {
            $data->{'allowEnvelopeSending'} = $object->getAllowEnvelopeSending();
        }
        if (null !== $object->getAllowEnvelopeSendingMetadata()) {
            $data->{'allowEnvelopeSendingMetadata'} = $this->serializer->serialize($object->getAllowEnvelopeSendingMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowSendersToSetRecipientEmailLanguage()) {
            $data->{'allowSendersToSetRecipientEmailLanguage'} = $object->getAllowSendersToSetRecipientEmailLanguage();
        }
        if (null !== $object->getAllowSendersToSetRecipientEmailLanguageMetadata()) {
            $data->{'allowSendersToSetRecipientEmailLanguageMetadata'} = $this->serializer->serialize($object->getAllowSendersToSetRecipientEmailLanguageMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowSignerAttachments()) {
            $data->{'allowSignerAttachments'} = $object->getAllowSignerAttachments();
        }
        if (null !== $object->getAllowSignerAttachmentsMetadata()) {
            $data->{'allowSignerAttachmentsMetadata'} = $this->serializer->serialize($object->getAllowSignerAttachmentsMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowSupplementalDocuments()) {
            $data->{'allowSupplementalDocuments'} = $object->getAllowSupplementalDocuments();
        }
        if (null !== $object->getAllowSupplementalDocumentsMetadata()) {
            $data->{'allowSupplementalDocumentsMetadata'} = $this->serializer->serialize($object->getAllowSupplementalDocumentsMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowTaggingInSendAndCorrect()) {
            $data->{'allowTaggingInSendAndCorrect'} = $object->getAllowTaggingInSendAndCorrect();
        }
        if (null !== $object->getAllowTaggingInSendAndCorrectMetadata()) {
            $data->{'allowTaggingInSendAndCorrectMetadata'} = $this->serializer->serialize($object->getAllowTaggingInSendAndCorrectMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowVaulting()) {
            $data->{'allowVaulting'} = $object->getAllowVaulting();
        }
        if (null !== $object->getAllowVaultingMetadata()) {
            $data->{'allowVaultingMetadata'} = $this->serializer->serialize($object->getAllowVaultingMetadata(), 'raw', $context);
        }
        if (null !== $object->getAllowWetSigningOverride()) {
            $data->{'allowWetSigningOverride'} = $object->getAllowWetSigningOverride();
        }
        if (null !== $object->getAllowWetSigningOverrideMetadata()) {
            $data->{'allowWetSigningOverrideMetadata'} = $this->serializer->serialize($object->getAllowWetSigningOverrideMetadata(), 'raw', $context);
        }
        if (null !== $object->getCanCreateWorkspaces()) {
            $data->{'canCreateWorkspaces'} = $object->getCanCreateWorkspaces();
        }
        if (null !== $object->getCanCreateWorkspacesMetadata()) {
            $data->{'canCreateWorkspacesMetadata'} = $this->serializer->serialize($object->getCanCreateWorkspacesMetadata(), 'raw', $context);
        }
        if (null !== $object->getDisableDocumentUpload()) {
            $data->{'disableDocumentUpload'} = $object->getDisableDocumentUpload();
        }
        if (null !== $object->getDisableDocumentUploadMetadata()) {
            $data->{'disableDocumentUploadMetadata'} = $this->serializer->serialize($object->getDisableDocumentUploadMetadata(), 'raw', $context);
        }
        if (null !== $object->getDisableOtherActions()) {
            $data->{'disableOtherActions'} = $object->getDisableOtherActions();
        }
        if (null !== $object->getDisableOtherActionsMetadata()) {
            $data->{'disableOtherActionsMetadata'} = $this->serializer->serialize($object->getDisableOtherActionsMetadata(), 'raw', $context);
        }
        if (null !== $object->getEnableApiRequestLogging()) {
            $data->{'enableApiRequestLogging'} = $object->getEnableApiRequestLogging();
        }
        if (null !== $object->getEnableApiRequestLoggingMetadata()) {
            $data->{'enableApiRequestLoggingMetadata'} = $this->serializer->serialize($object->getEnableApiRequestLoggingMetadata(), 'raw', $context);
        }
        if (null !== $object->getEnableRecipientViewingNotifications()) {
            $data->{'enableRecipientViewingNotifications'} = $object->getEnableRecipientViewingNotifications();
        }
        if (null !== $object->getEnableRecipientViewingNotificationsMetadata()) {
            $data->{'enableRecipientViewingNotificationsMetadata'} = $this->serializer->serialize($object->getEnableRecipientViewingNotificationsMetadata(), 'raw', $context);
        }
        if (null !== $object->getEnableSequentialSigningInterface()) {
            $data->{'enableSequentialSigningInterface'} = $object->getEnableSequentialSigningInterface();
        }
        if (null !== $object->getEnableSequentialSigningInterfaceMetadata()) {
            $data->{'enableSequentialSigningInterfaceMetadata'} = $this->serializer->serialize($object->getEnableSequentialSigningInterfaceMetadata(), 'raw', $context);
        }
        if (null !== $object->getEnableTransactionPointIntegration()) {
            $data->{'enableTransactionPointIntegration'} = $object->getEnableTransactionPointIntegration();
        }
        if (null !== $object->getEnableTransactionPointIntegrationMetadata()) {
            $data->{'enableTransactionPointIntegrationMetadata'} = $this->serializer->serialize($object->getEnableTransactionPointIntegrationMetadata(), 'raw', $context);
        }
        if (null !== $object->getPowerFormRole()) {
            $data->{'powerFormRole'} = $object->getPowerFormRole();
        }
        if (null !== $object->getPowerFormRoleMetadata()) {
            $data->{'powerFormRoleMetadata'} = $this->serializer->serialize($object->getPowerFormRoleMetadata(), 'raw', $context);
        }
        if (null !== $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinks()) {
            $data->{'receiveCompletedSelfSignedDocumentsAsEmailLinks'} = $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinks();
        }
        if (null !== $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata()) {
            $data->{'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata'} = $this->serializer->serialize($object->getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata(), 'raw', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustAccept()) {
            $data->{'supplementalDocumentsMustAccept'} = $object->getSupplementalDocumentsMustAccept();
        }
        if (null !== $object->getSupplementalDocumentsMustAcceptMetadata()) {
            $data->{'supplementalDocumentsMustAcceptMetadata'} = $this->serializer->serialize($object->getSupplementalDocumentsMustAcceptMetadata(), 'raw', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustRead()) {
            $data->{'supplementalDocumentsMustRead'} = $object->getSupplementalDocumentsMustRead();
        }
        if (null !== $object->getSupplementalDocumentsMustReadMetadata()) {
            $data->{'supplementalDocumentsMustReadMetadata'} = $this->serializer->serialize($object->getSupplementalDocumentsMustReadMetadata(), 'raw', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustView()) {
            $data->{'supplementalDocumentsMustView'} = $object->getSupplementalDocumentsMustView();
        }
        if (null !== $object->getSupplementalDocumentsMustViewMetadata()) {
            $data->{'supplementalDocumentsMustViewMetadata'} = $this->serializer->serialize($object->getSupplementalDocumentsMustViewMetadata(), 'raw', $context);
        }
        if (null !== $object->getUseNewDocuSignExperienceInterface()) {
            $data->{'useNewDocuSignExperienceInterface'} = $object->getUseNewDocuSignExperienceInterface();
        }
        if (null !== $object->getUseNewDocuSignExperienceInterfaceMetadata()) {
            $data->{'useNewDocuSignExperienceInterfaceMetadata'} = $this->serializer->serialize($object->getUseNewDocuSignExperienceInterfaceMetadata(), 'raw', $context);
        }
        if (null !== $object->getUseNewSendingInterface()) {
            $data->{'useNewSendingInterface'} = $object->getUseNewSendingInterface();
        }
        if (null !== $object->getUseNewSendingInterfaceMetadata()) {
            $data->{'useNewSendingInterfaceMetadata'} = $this->serializer->serialize($object->getUseNewSendingInterfaceMetadata(), 'raw', $context);
        }
        if (null !== $object->getVaultingMode()) {
            $data->{'vaultingMode'} = $object->getVaultingMode();
        }
        if (null !== $object->getVaultingModeMetadata()) {
            $data->{'vaultingModeMetadata'} = $this->serializer->serialize($object->getVaultingModeMetadata(), 'raw', $context);
        }

        return $data;
    }
}
