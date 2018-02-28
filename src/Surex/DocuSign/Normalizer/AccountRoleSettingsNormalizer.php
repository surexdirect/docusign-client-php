<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountRoleSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountRoleSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountRoleSettings;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountRoleSettings();
        if (property_exists($data, 'allowAccountManagement')) {
            $object->setAllowAccountManagement($data->{'allowAccountManagement'});
        }
        if (property_exists($data, 'allowAccountManagementMetadata')) {
            $object->setAllowAccountManagementMetadata($this->denormalizer->denormalize($data->{'allowAccountManagementMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowApiAccess')) {
            $object->setAllowApiAccess($data->{'allowApiAccess'});
        }
        if (property_exists($data, 'allowApiAccessMetadata')) {
            $object->setAllowApiAccessMetadata($this->denormalizer->denormalize($data->{'allowApiAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowApiAccessToAccount')) {
            $object->setAllowApiAccessToAccount($data->{'allowApiAccessToAccount'});
        }
        if (property_exists($data, 'allowApiAccessToAccountMetadata')) {
            $object->setAllowApiAccessToAccountMetadata($this->denormalizer->denormalize($data->{'allowApiAccessToAccountMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowApiSendingOnBehalfOfOthers')) {
            $object->setAllowApiSendingOnBehalfOfOthers($data->{'allowApiSendingOnBehalfOfOthers'});
        }
        if (property_exists($data, 'allowApiSendingOnBehalfOfOthersMetadata')) {
            $object->setAllowApiSendingOnBehalfOfOthersMetadata($this->denormalizer->denormalize($data->{'allowApiSendingOnBehalfOfOthersMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowApiSequentialSigning')) {
            $object->setAllowApiSequentialSigning($data->{'allowApiSequentialSigning'});
        }
        if (property_exists($data, 'allowApiSequentialSigningMetadata')) {
            $object->setAllowApiSequentialSigningMetadata($this->denormalizer->denormalize($data->{'allowApiSequentialSigningMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowBulkSending')) {
            $object->setAllowBulkSending($data->{'allowBulkSending'});
        }
        if (property_exists($data, 'allowBulkSendingMetadata')) {
            $object->setAllowBulkSendingMetadata($this->denormalizer->denormalize($data->{'allowBulkSendingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowDocuSignDesktopClient')) {
            $object->setAllowDocuSignDesktopClient($data->{'allowDocuSignDesktopClient'});
        }
        if (property_exists($data, 'allowDocuSignDesktopClientMetadata')) {
            $object->setAllowDocuSignDesktopClientMetadata($this->denormalizer->denormalize($data->{'allowDocuSignDesktopClientMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowedAddressBookAccess')) {
            $object->setAllowedAddressBookAccess($data->{'allowedAddressBookAccess'});
        }
        if (property_exists($data, 'allowedAddressBookAccessMetadata')) {
            $object->setAllowedAddressBookAccessMetadata($this->denormalizer->denormalize($data->{'allowedAddressBookAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowedTemplateAccess')) {
            $object->setAllowedTemplateAccess($data->{'allowedTemplateAccess'});
        }
        if (property_exists($data, 'allowedTemplateAccessMetadata')) {
            $object->setAllowedTemplateAccessMetadata($this->denormalizer->denormalize($data->{'allowedTemplateAccessMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowedToBeEnvelopeTransferRecipient')) {
            $object->setAllowedToBeEnvelopeTransferRecipient($data->{'allowedToBeEnvelopeTransferRecipient'});
        }
        if (property_exists($data, 'allowedToBeEnvelopeTransferRecipientMetadata')) {
            $object->setAllowedToBeEnvelopeTransferRecipientMetadata($this->denormalizer->denormalize($data->{'allowedToBeEnvelopeTransferRecipientMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowEnvelopeSending')) {
            $object->setAllowEnvelopeSending($data->{'allowEnvelopeSending'});
        }
        if (property_exists($data, 'allowEnvelopeSendingMetadata')) {
            $object->setAllowEnvelopeSendingMetadata($this->denormalizer->denormalize($data->{'allowEnvelopeSendingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowSendersToSetRecipientEmailLanguage')) {
            $object->setAllowSendersToSetRecipientEmailLanguage($data->{'allowSendersToSetRecipientEmailLanguage'});
        }
        if (property_exists($data, 'allowSendersToSetRecipientEmailLanguageMetadata')) {
            $object->setAllowSendersToSetRecipientEmailLanguageMetadata($this->denormalizer->denormalize($data->{'allowSendersToSetRecipientEmailLanguageMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowSignerAttachments')) {
            $object->setAllowSignerAttachments($data->{'allowSignerAttachments'});
        }
        if (property_exists($data, 'allowSignerAttachmentsMetadata')) {
            $object->setAllowSignerAttachmentsMetadata($this->denormalizer->denormalize($data->{'allowSignerAttachmentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowSupplementalDocuments')) {
            $object->setAllowSupplementalDocuments($data->{'allowSupplementalDocuments'});
        }
        if (property_exists($data, 'allowSupplementalDocumentsMetadata')) {
            $object->setAllowSupplementalDocumentsMetadata($this->denormalizer->denormalize($data->{'allowSupplementalDocumentsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowTaggingInSendAndCorrect')) {
            $object->setAllowTaggingInSendAndCorrect($data->{'allowTaggingInSendAndCorrect'});
        }
        if (property_exists($data, 'allowTaggingInSendAndCorrectMetadata')) {
            $object->setAllowTaggingInSendAndCorrectMetadata($this->denormalizer->denormalize($data->{'allowTaggingInSendAndCorrectMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowVaulting')) {
            $object->setAllowVaulting($data->{'allowVaulting'});
        }
        if (property_exists($data, 'allowVaultingMetadata')) {
            $object->setAllowVaultingMetadata($this->denormalizer->denormalize($data->{'allowVaultingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'allowWetSigningOverride')) {
            $object->setAllowWetSigningOverride($data->{'allowWetSigningOverride'});
        }
        if (property_exists($data, 'allowWetSigningOverrideMetadata')) {
            $object->setAllowWetSigningOverrideMetadata($this->denormalizer->denormalize($data->{'allowWetSigningOverrideMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'canCreateWorkspaces')) {
            $object->setCanCreateWorkspaces($data->{'canCreateWorkspaces'});
        }
        if (property_exists($data, 'canCreateWorkspacesMetadata')) {
            $object->setCanCreateWorkspacesMetadata($this->denormalizer->denormalize($data->{'canCreateWorkspacesMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'disableDocumentUpload')) {
            $object->setDisableDocumentUpload($data->{'disableDocumentUpload'});
        }
        if (property_exists($data, 'disableDocumentUploadMetadata')) {
            $object->setDisableDocumentUploadMetadata($this->denormalizer->denormalize($data->{'disableDocumentUploadMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'disableOtherActions')) {
            $object->setDisableOtherActions($data->{'disableOtherActions'});
        }
        if (property_exists($data, 'disableOtherActionsMetadata')) {
            $object->setDisableOtherActionsMetadata($this->denormalizer->denormalize($data->{'disableOtherActionsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'enableApiRequestLogging')) {
            $object->setEnableApiRequestLogging($data->{'enableApiRequestLogging'});
        }
        if (property_exists($data, 'enableApiRequestLoggingMetadata')) {
            $object->setEnableApiRequestLoggingMetadata($this->denormalizer->denormalize($data->{'enableApiRequestLoggingMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'enableRecipientViewingNotifications')) {
            $object->setEnableRecipientViewingNotifications($data->{'enableRecipientViewingNotifications'});
        }
        if (property_exists($data, 'enableRecipientViewingNotificationsMetadata')) {
            $object->setEnableRecipientViewingNotificationsMetadata($this->denormalizer->denormalize($data->{'enableRecipientViewingNotificationsMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'enableSequentialSigningInterface')) {
            $object->setEnableSequentialSigningInterface($data->{'enableSequentialSigningInterface'});
        }
        if (property_exists($data, 'enableSequentialSigningInterfaceMetadata')) {
            $object->setEnableSequentialSigningInterfaceMetadata($this->denormalizer->denormalize($data->{'enableSequentialSigningInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'enableTransactionPointIntegration')) {
            $object->setEnableTransactionPointIntegration($data->{'enableTransactionPointIntegration'});
        }
        if (property_exists($data, 'enableTransactionPointIntegrationMetadata')) {
            $object->setEnableTransactionPointIntegrationMetadata($this->denormalizer->denormalize($data->{'enableTransactionPointIntegrationMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'powerFormRole')) {
            $object->setPowerFormRole($data->{'powerFormRole'});
        }
        if (property_exists($data, 'powerFormRoleMetadata')) {
            $object->setPowerFormRoleMetadata($this->denormalizer->denormalize($data->{'powerFormRoleMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'receiveCompletedSelfSignedDocumentsAsEmailLinks')) {
            $object->setReceiveCompletedSelfSignedDocumentsAsEmailLinks($data->{'receiveCompletedSelfSignedDocumentsAsEmailLinks'});
        }
        if (property_exists($data, 'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata')) {
            $object->setReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata($this->denormalizer->denormalize($data->{'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustAccept')) {
            $object->setSupplementalDocumentsMustAccept($data->{'supplementalDocumentsMustAccept'});
        }
        if (property_exists($data, 'supplementalDocumentsMustAcceptMetadata')) {
            $object->setSupplementalDocumentsMustAcceptMetadata($this->denormalizer->denormalize($data->{'supplementalDocumentsMustAcceptMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustRead')) {
            $object->setSupplementalDocumentsMustRead($data->{'supplementalDocumentsMustRead'});
        }
        if (property_exists($data, 'supplementalDocumentsMustReadMetadata')) {
            $object->setSupplementalDocumentsMustReadMetadata($this->denormalizer->denormalize($data->{'supplementalDocumentsMustReadMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'supplementalDocumentsMustView')) {
            $object->setSupplementalDocumentsMustView($data->{'supplementalDocumentsMustView'});
        }
        if (property_exists($data, 'supplementalDocumentsMustViewMetadata')) {
            $object->setSupplementalDocumentsMustViewMetadata($this->denormalizer->denormalize($data->{'supplementalDocumentsMustViewMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'useNewDocuSignExperienceInterface')) {
            $object->setUseNewDocuSignExperienceInterface($data->{'useNewDocuSignExperienceInterface'});
        }
        if (property_exists($data, 'useNewDocuSignExperienceInterfaceMetadata')) {
            $object->setUseNewDocuSignExperienceInterfaceMetadata($this->denormalizer->denormalize($data->{'useNewDocuSignExperienceInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'useNewSendingInterface')) {
            $object->setUseNewSendingInterface($data->{'useNewSendingInterface'});
        }
        if (property_exists($data, 'useNewSendingInterfaceMetadata')) {
            $object->setUseNewSendingInterfaceMetadata($this->denormalizer->denormalize($data->{'useNewSendingInterfaceMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
        }
        if (property_exists($data, 'vaultingMode')) {
            $object->setVaultingMode($data->{'vaultingMode'});
        }
        if (property_exists($data, 'vaultingModeMetadata')) {
            $object->setVaultingModeMetadata($this->denormalizer->denormalize($data->{'vaultingModeMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'json', $context));
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
            $data->{'allowAccountManagementMetadata'} = $this->normalizer->normalize($object->getAllowAccountManagementMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowApiAccess()) {
            $data->{'allowApiAccess'} = $object->getAllowApiAccess();
        }
        if (null !== $object->getAllowApiAccessMetadata()) {
            $data->{'allowApiAccessMetadata'} = $this->normalizer->normalize($object->getAllowApiAccessMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowApiAccessToAccount()) {
            $data->{'allowApiAccessToAccount'} = $object->getAllowApiAccessToAccount();
        }
        if (null !== $object->getAllowApiAccessToAccountMetadata()) {
            $data->{'allowApiAccessToAccountMetadata'} = $this->normalizer->normalize($object->getAllowApiAccessToAccountMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowApiSendingOnBehalfOfOthers()) {
            $data->{'allowApiSendingOnBehalfOfOthers'} = $object->getAllowApiSendingOnBehalfOfOthers();
        }
        if (null !== $object->getAllowApiSendingOnBehalfOfOthersMetadata()) {
            $data->{'allowApiSendingOnBehalfOfOthersMetadata'} = $this->normalizer->normalize($object->getAllowApiSendingOnBehalfOfOthersMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowApiSequentialSigning()) {
            $data->{'allowApiSequentialSigning'} = $object->getAllowApiSequentialSigning();
        }
        if (null !== $object->getAllowApiSequentialSigningMetadata()) {
            $data->{'allowApiSequentialSigningMetadata'} = $this->normalizer->normalize($object->getAllowApiSequentialSigningMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowBulkSending()) {
            $data->{'allowBulkSending'} = $object->getAllowBulkSending();
        }
        if (null !== $object->getAllowBulkSendingMetadata()) {
            $data->{'allowBulkSendingMetadata'} = $this->normalizer->normalize($object->getAllowBulkSendingMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowDocuSignDesktopClient()) {
            $data->{'allowDocuSignDesktopClient'} = $object->getAllowDocuSignDesktopClient();
        }
        if (null !== $object->getAllowDocuSignDesktopClientMetadata()) {
            $data->{'allowDocuSignDesktopClientMetadata'} = $this->normalizer->normalize($object->getAllowDocuSignDesktopClientMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowedAddressBookAccess()) {
            $data->{'allowedAddressBookAccess'} = $object->getAllowedAddressBookAccess();
        }
        if (null !== $object->getAllowedAddressBookAccessMetadata()) {
            $data->{'allowedAddressBookAccessMetadata'} = $this->normalizer->normalize($object->getAllowedAddressBookAccessMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowedTemplateAccess()) {
            $data->{'allowedTemplateAccess'} = $object->getAllowedTemplateAccess();
        }
        if (null !== $object->getAllowedTemplateAccessMetadata()) {
            $data->{'allowedTemplateAccessMetadata'} = $this->normalizer->normalize($object->getAllowedTemplateAccessMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowedToBeEnvelopeTransferRecipient()) {
            $data->{'allowedToBeEnvelopeTransferRecipient'} = $object->getAllowedToBeEnvelopeTransferRecipient();
        }
        if (null !== $object->getAllowedToBeEnvelopeTransferRecipientMetadata()) {
            $data->{'allowedToBeEnvelopeTransferRecipientMetadata'} = $this->normalizer->normalize($object->getAllowedToBeEnvelopeTransferRecipientMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowEnvelopeSending()) {
            $data->{'allowEnvelopeSending'} = $object->getAllowEnvelopeSending();
        }
        if (null !== $object->getAllowEnvelopeSendingMetadata()) {
            $data->{'allowEnvelopeSendingMetadata'} = $this->normalizer->normalize($object->getAllowEnvelopeSendingMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowSendersToSetRecipientEmailLanguage()) {
            $data->{'allowSendersToSetRecipientEmailLanguage'} = $object->getAllowSendersToSetRecipientEmailLanguage();
        }
        if (null !== $object->getAllowSendersToSetRecipientEmailLanguageMetadata()) {
            $data->{'allowSendersToSetRecipientEmailLanguageMetadata'} = $this->normalizer->normalize($object->getAllowSendersToSetRecipientEmailLanguageMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowSignerAttachments()) {
            $data->{'allowSignerAttachments'} = $object->getAllowSignerAttachments();
        }
        if (null !== $object->getAllowSignerAttachmentsMetadata()) {
            $data->{'allowSignerAttachmentsMetadata'} = $this->normalizer->normalize($object->getAllowSignerAttachmentsMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowSupplementalDocuments()) {
            $data->{'allowSupplementalDocuments'} = $object->getAllowSupplementalDocuments();
        }
        if (null !== $object->getAllowSupplementalDocumentsMetadata()) {
            $data->{'allowSupplementalDocumentsMetadata'} = $this->normalizer->normalize($object->getAllowSupplementalDocumentsMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowTaggingInSendAndCorrect()) {
            $data->{'allowTaggingInSendAndCorrect'} = $object->getAllowTaggingInSendAndCorrect();
        }
        if (null !== $object->getAllowTaggingInSendAndCorrectMetadata()) {
            $data->{'allowTaggingInSendAndCorrectMetadata'} = $this->normalizer->normalize($object->getAllowTaggingInSendAndCorrectMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowVaulting()) {
            $data->{'allowVaulting'} = $object->getAllowVaulting();
        }
        if (null !== $object->getAllowVaultingMetadata()) {
            $data->{'allowVaultingMetadata'} = $this->normalizer->normalize($object->getAllowVaultingMetadata(), 'json', $context);
        }
        if (null !== $object->getAllowWetSigningOverride()) {
            $data->{'allowWetSigningOverride'} = $object->getAllowWetSigningOverride();
        }
        if (null !== $object->getAllowWetSigningOverrideMetadata()) {
            $data->{'allowWetSigningOverrideMetadata'} = $this->normalizer->normalize($object->getAllowWetSigningOverrideMetadata(), 'json', $context);
        }
        if (null !== $object->getCanCreateWorkspaces()) {
            $data->{'canCreateWorkspaces'} = $object->getCanCreateWorkspaces();
        }
        if (null !== $object->getCanCreateWorkspacesMetadata()) {
            $data->{'canCreateWorkspacesMetadata'} = $this->normalizer->normalize($object->getCanCreateWorkspacesMetadata(), 'json', $context);
        }
        if (null !== $object->getDisableDocumentUpload()) {
            $data->{'disableDocumentUpload'} = $object->getDisableDocumentUpload();
        }
        if (null !== $object->getDisableDocumentUploadMetadata()) {
            $data->{'disableDocumentUploadMetadata'} = $this->normalizer->normalize($object->getDisableDocumentUploadMetadata(), 'json', $context);
        }
        if (null !== $object->getDisableOtherActions()) {
            $data->{'disableOtherActions'} = $object->getDisableOtherActions();
        }
        if (null !== $object->getDisableOtherActionsMetadata()) {
            $data->{'disableOtherActionsMetadata'} = $this->normalizer->normalize($object->getDisableOtherActionsMetadata(), 'json', $context);
        }
        if (null !== $object->getEnableApiRequestLogging()) {
            $data->{'enableApiRequestLogging'} = $object->getEnableApiRequestLogging();
        }
        if (null !== $object->getEnableApiRequestLoggingMetadata()) {
            $data->{'enableApiRequestLoggingMetadata'} = $this->normalizer->normalize($object->getEnableApiRequestLoggingMetadata(), 'json', $context);
        }
        if (null !== $object->getEnableRecipientViewingNotifications()) {
            $data->{'enableRecipientViewingNotifications'} = $object->getEnableRecipientViewingNotifications();
        }
        if (null !== $object->getEnableRecipientViewingNotificationsMetadata()) {
            $data->{'enableRecipientViewingNotificationsMetadata'} = $this->normalizer->normalize($object->getEnableRecipientViewingNotificationsMetadata(), 'json', $context);
        }
        if (null !== $object->getEnableSequentialSigningInterface()) {
            $data->{'enableSequentialSigningInterface'} = $object->getEnableSequentialSigningInterface();
        }
        if (null !== $object->getEnableSequentialSigningInterfaceMetadata()) {
            $data->{'enableSequentialSigningInterfaceMetadata'} = $this->normalizer->normalize($object->getEnableSequentialSigningInterfaceMetadata(), 'json', $context);
        }
        if (null !== $object->getEnableTransactionPointIntegration()) {
            $data->{'enableTransactionPointIntegration'} = $object->getEnableTransactionPointIntegration();
        }
        if (null !== $object->getEnableTransactionPointIntegrationMetadata()) {
            $data->{'enableTransactionPointIntegrationMetadata'} = $this->normalizer->normalize($object->getEnableTransactionPointIntegrationMetadata(), 'json', $context);
        }
        if (null !== $object->getPowerFormRole()) {
            $data->{'powerFormRole'} = $object->getPowerFormRole();
        }
        if (null !== $object->getPowerFormRoleMetadata()) {
            $data->{'powerFormRoleMetadata'} = $this->normalizer->normalize($object->getPowerFormRoleMetadata(), 'json', $context);
        }
        if (null !== $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinks()) {
            $data->{'receiveCompletedSelfSignedDocumentsAsEmailLinks'} = $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinks();
        }
        if (null !== $object->getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata()) {
            $data->{'receiveCompletedSelfSignedDocumentsAsEmailLinksMetadata'} = $this->normalizer->normalize($object->getReceiveCompletedSelfSignedDocumentsAsEmailLinksMetadata(), 'json', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustAccept()) {
            $data->{'supplementalDocumentsMustAccept'} = $object->getSupplementalDocumentsMustAccept();
        }
        if (null !== $object->getSupplementalDocumentsMustAcceptMetadata()) {
            $data->{'supplementalDocumentsMustAcceptMetadata'} = $this->normalizer->normalize($object->getSupplementalDocumentsMustAcceptMetadata(), 'json', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustRead()) {
            $data->{'supplementalDocumentsMustRead'} = $object->getSupplementalDocumentsMustRead();
        }
        if (null !== $object->getSupplementalDocumentsMustReadMetadata()) {
            $data->{'supplementalDocumentsMustReadMetadata'} = $this->normalizer->normalize($object->getSupplementalDocumentsMustReadMetadata(), 'json', $context);
        }
        if (null !== $object->getSupplementalDocumentsMustView()) {
            $data->{'supplementalDocumentsMustView'} = $object->getSupplementalDocumentsMustView();
        }
        if (null !== $object->getSupplementalDocumentsMustViewMetadata()) {
            $data->{'supplementalDocumentsMustViewMetadata'} = $this->normalizer->normalize($object->getSupplementalDocumentsMustViewMetadata(), 'json', $context);
        }
        if (null !== $object->getUseNewDocuSignExperienceInterface()) {
            $data->{'useNewDocuSignExperienceInterface'} = $object->getUseNewDocuSignExperienceInterface();
        }
        if (null !== $object->getUseNewDocuSignExperienceInterfaceMetadata()) {
            $data->{'useNewDocuSignExperienceInterfaceMetadata'} = $this->normalizer->normalize($object->getUseNewDocuSignExperienceInterfaceMetadata(), 'json', $context);
        }
        if (null !== $object->getUseNewSendingInterface()) {
            $data->{'useNewSendingInterface'} = $object->getUseNewSendingInterface();
        }
        if (null !== $object->getUseNewSendingInterfaceMetadata()) {
            $data->{'useNewSendingInterfaceMetadata'} = $this->normalizer->normalize($object->getUseNewSendingInterfaceMetadata(), 'json', $context);
        }
        if (null !== $object->getVaultingMode()) {
            $data->{'vaultingMode'} = $object->getVaultingMode();
        }
        if (null !== $object->getVaultingModeMetadata()) {
            $data->{'vaultingModeMetadata'} = $this->normalizer->normalize($object->getVaultingModeMetadata(), 'json', $context);
        }

        return $data;
    }
}
