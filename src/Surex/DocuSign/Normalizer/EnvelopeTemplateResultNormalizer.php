<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeTemplateResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeTemplateResult' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeTemplateResult) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeTemplateResult();
        if (property_exists($data, 'allowMarkup')) {
            $object->setAllowMarkup($data->{'allowMarkup'});
        }
        if (property_exists($data, 'allowReassign')) {
            $object->setAllowReassign($data->{'allowReassign'});
        }
        if (property_exists($data, 'asynchronous')) {
            $object->setAsynchronous($data->{'asynchronous'});
        }
        if (property_exists($data, 'attachmentsUri')) {
            $object->setAttachmentsUri($data->{'attachmentsUri'});
        }
        if (property_exists($data, 'authoritativeCopy')) {
            $object->setAuthoritativeCopy($data->{'authoritativeCopy'});
        }
        if (property_exists($data, 'autoNavigation')) {
            $object->setAutoNavigation($data->{'autoNavigation'});
        }
        if (property_exists($data, 'brandId')) {
            $object->setBrandId($data->{'brandId'});
        }
        if (property_exists($data, 'brandLock')) {
            $object->setBrandLock($data->{'brandLock'});
        }
        if (property_exists($data, 'certificateUri')) {
            $object->setCertificateUri($data->{'certificateUri'});
        }
        if (property_exists($data, 'completedDateTime')) {
            $object->setCompletedDateTime($data->{'completedDateTime'});
        }
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'customFields')) {
            $object->setCustomFields($this->serializer->deserialize($data->{'customFields'}, 'Surex\\DocuSign\\Model\\AccountCustomFields', 'raw', $context));
        }
        if (property_exists($data, 'customFieldsUri')) {
            $object->setCustomFieldsUri($data->{'customFieldsUri'});
        }
        if (property_exists($data, 'declinedDateTime')) {
            $object->setDeclinedDateTime($data->{'declinedDateTime'});
        }
        if (property_exists($data, 'deletedDateTime')) {
            $object->setDeletedDateTime($data->{'deletedDateTime'});
        }
        if (property_exists($data, 'deliveredDateTime')) {
            $object->setDeliveredDateTime($data->{'deliveredDateTime'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'documents')) {
            $values = [];
            foreach ($data->{'documents'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Document', 'raw', $context);
            }
            $object->setDocuments($values);
        }
        if (property_exists($data, 'documentsCombinedUri')) {
            $object->setDocumentsCombinedUri($data->{'documentsCombinedUri'});
        }
        if (property_exists($data, 'documentsUri')) {
            $object->setDocumentsUri($data->{'documentsUri'});
        }
        if (property_exists($data, 'emailBlurb')) {
            $object->setEmailBlurb($data->{'emailBlurb'});
        }
        if (property_exists($data, 'emailSettings')) {
            $object->setEmailSettings($this->serializer->deserialize($data->{'emailSettings'}, 'Surex\\DocuSign\\Model\\EnvelopeEmailSettings', 'raw', $context));
        }
        if (property_exists($data, 'emailSubject')) {
            $object->setEmailSubject($data->{'emailSubject'});
        }
        if (property_exists($data, 'enableWetSign')) {
            $object->setEnableWetSign($data->{'enableWetSign'});
        }
        if (property_exists($data, 'enforceSignerVisibility')) {
            $object->setEnforceSignerVisibility($data->{'enforceSignerVisibility'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'envelopeIdStamping')) {
            $object->setEnvelopeIdStamping($data->{'envelopeIdStamping'});
        }
        if (property_exists($data, 'envelopeUri')) {
            $object->setEnvelopeUri($data->{'envelopeUri'});
        }
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'folderName')) {
            $object->setFolderName($data->{'folderName'});
        }
        if (property_exists($data, 'folderUri')) {
            $object->setFolderUri($data->{'folderUri'});
        }
        if (property_exists($data, 'initialSentDateTime')) {
            $object->setInitialSentDateTime($data->{'initialSentDateTime'});
        }
        if (property_exists($data, 'is21CFRPart11')) {
            $object->setIs21CFRPart11($data->{'is21CFRPart11'});
        }
        if (property_exists($data, 'isSignatureProviderEnvelope')) {
            $object->setIsSignatureProviderEnvelope($data->{'isSignatureProviderEnvelope'});
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedDateTime')) {
            $object->setLastModifiedDateTime($data->{'lastModifiedDateTime'});
        }
        if (property_exists($data, 'lockInformation')) {
            $object->setLockInformation($this->serializer->deserialize($data->{'lockInformation'}, 'Surex\\DocuSign\\Model\\EnvelopeLocks', 'raw', $context));
        }
        if (property_exists($data, 'messageLock')) {
            $object->setMessageLock($data->{'messageLock'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'notification')) {
            $object->setNotification($this->serializer->deserialize($data->{'notification'}, 'Surex\\DocuSign\\Model\\Notification', 'raw', $context));
        }
        if (property_exists($data, 'notificationUri')) {
            $object->setNotificationUri($data->{'notificationUri'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'pageCount')) {
            $object->setPageCount($data->{'pageCount'});
        }
        if (property_exists($data, 'parentFolderUri')) {
            $object->setParentFolderUri($data->{'parentFolderUri'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'purgeState')) {
            $object->setPurgeState($data->{'purgeState'});
        }
        if (property_exists($data, 'recipients')) {
            $object->setRecipients($this->serializer->deserialize($data->{'recipients'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'raw', $context));
        }
        if (property_exists($data, 'recipientsLock')) {
            $object->setRecipientsLock($data->{'recipientsLock'});
        }
        if (property_exists($data, 'recipientsUri')) {
            $object->setRecipientsUri($data->{'recipientsUri'});
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'signingLocation')) {
            $object->setSigningLocation($data->{'signingLocation'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'statusChangedDateTime')) {
            $object->setStatusChangedDateTime($data->{'statusChangedDateTime'});
        }
        if (property_exists($data, 'templateId')) {
            $object->setTemplateId($data->{'templateId'});
        }
        if (property_exists($data, 'templatesUri')) {
            $object->setTemplatesUri($data->{'templatesUri'});
        }
        if (property_exists($data, 'transactionId')) {
            $object->setTransactionId($data->{'transactionId'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }
        if (property_exists($data, 'useDisclosure')) {
            $object->setUseDisclosure($data->{'useDisclosure'});
        }
        if (property_exists($data, 'voidedDateTime')) {
            $object->setVoidedDateTime($data->{'voidedDateTime'});
        }
        if (property_exists($data, 'voidedReason')) {
            $object->setVoidedReason($data->{'voidedReason'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowMarkup()) {
            $data->{'allowMarkup'} = $object->getAllowMarkup();
        }
        if (null !== $object->getAllowReassign()) {
            $data->{'allowReassign'} = $object->getAllowReassign();
        }
        if (null !== $object->getAsynchronous()) {
            $data->{'asynchronous'} = $object->getAsynchronous();
        }
        if (null !== $object->getAttachmentsUri()) {
            $data->{'attachmentsUri'} = $object->getAttachmentsUri();
        }
        if (null !== $object->getAuthoritativeCopy()) {
            $data->{'authoritativeCopy'} = $object->getAuthoritativeCopy();
        }
        if (null !== $object->getAutoNavigation()) {
            $data->{'autoNavigation'} = $object->getAutoNavigation();
        }
        if (null !== $object->getBrandId()) {
            $data->{'brandId'} = $object->getBrandId();
        }
        if (null !== $object->getBrandLock()) {
            $data->{'brandLock'} = $object->getBrandLock();
        }
        if (null !== $object->getCertificateUri()) {
            $data->{'certificateUri'} = $object->getCertificateUri();
        }
        if (null !== $object->getCompletedDateTime()) {
            $data->{'completedDateTime'} = $object->getCompletedDateTime();
        }
        if (null !== $object->getCreatedDateTime()) {
            $data->{'createdDateTime'} = $object->getCreatedDateTime();
        }
        if (null !== $object->getCustomFields()) {
            $data->{'customFields'} = $this->serializer->serialize($object->getCustomFields(), 'raw', $context);
        }
        if (null !== $object->getCustomFieldsUri()) {
            $data->{'customFieldsUri'} = $object->getCustomFieldsUri();
        }
        if (null !== $object->getDeclinedDateTime()) {
            $data->{'declinedDateTime'} = $object->getDeclinedDateTime();
        }
        if (null !== $object->getDeletedDateTime()) {
            $data->{'deletedDateTime'} = $object->getDeletedDateTime();
        }
        if (null !== $object->getDeliveredDateTime()) {
            $data->{'deliveredDateTime'} = $object->getDeliveredDateTime();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getDocuments()) {
            $values = [];
            foreach ($object->getDocuments() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'documents'} = $values;
        }
        if (null !== $object->getDocumentsCombinedUri()) {
            $data->{'documentsCombinedUri'} = $object->getDocumentsCombinedUri();
        }
        if (null !== $object->getDocumentsUri()) {
            $data->{'documentsUri'} = $object->getDocumentsUri();
        }
        if (null !== $object->getEmailBlurb()) {
            $data->{'emailBlurb'} = $object->getEmailBlurb();
        }
        if (null !== $object->getEmailSettings()) {
            $data->{'emailSettings'} = $this->serializer->serialize($object->getEmailSettings(), 'raw', $context);
        }
        if (null !== $object->getEmailSubject()) {
            $data->{'emailSubject'} = $object->getEmailSubject();
        }
        if (null !== $object->getEnableWetSign()) {
            $data->{'enableWetSign'} = $object->getEnableWetSign();
        }
        if (null !== $object->getEnforceSignerVisibility()) {
            $data->{'enforceSignerVisibility'} = $object->getEnforceSignerVisibility();
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getEnvelopeIdStamping()) {
            $data->{'envelopeIdStamping'} = $object->getEnvelopeIdStamping();
        }
        if (null !== $object->getEnvelopeUri()) {
            $data->{'envelopeUri'} = $object->getEnvelopeUri();
        }
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getFolderName()) {
            $data->{'folderName'} = $object->getFolderName();
        }
        if (null !== $object->getFolderUri()) {
            $data->{'folderUri'} = $object->getFolderUri();
        }
        if (null !== $object->getInitialSentDateTime()) {
            $data->{'initialSentDateTime'} = $object->getInitialSentDateTime();
        }
        if (null !== $object->getIs21CFRPart11()) {
            $data->{'is21CFRPart11'} = $object->getIs21CFRPart11();
        }
        if (null !== $object->getIsSignatureProviderEnvelope()) {
            $data->{'isSignatureProviderEnvelope'} = $object->getIsSignatureProviderEnvelope();
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedDateTime()) {
            $data->{'lastModifiedDateTime'} = $object->getLastModifiedDateTime();
        }
        if (null !== $object->getLockInformation()) {
            $data->{'lockInformation'} = $this->serializer->serialize($object->getLockInformation(), 'raw', $context);
        }
        if (null !== $object->getMessageLock()) {
            $data->{'messageLock'} = $object->getMessageLock();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNotification()) {
            $data->{'notification'} = $this->serializer->serialize($object->getNotification(), 'raw', $context);
        }
        if (null !== $object->getNotificationUri()) {
            $data->{'notificationUri'} = $object->getNotificationUri();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getPageCount()) {
            $data->{'pageCount'} = $object->getPageCount();
        }
        if (null !== $object->getParentFolderUri()) {
            $data->{'parentFolderUri'} = $object->getParentFolderUri();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getPurgeState()) {
            $data->{'purgeState'} = $object->getPurgeState();
        }
        if (null !== $object->getRecipients()) {
            $data->{'recipients'} = $this->serializer->serialize($object->getRecipients(), 'raw', $context);
        }
        if (null !== $object->getRecipientsLock()) {
            $data->{'recipientsLock'} = $object->getRecipientsLock();
        }
        if (null !== $object->getRecipientsUri()) {
            $data->{'recipientsUri'} = $object->getRecipientsUri();
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getSigningLocation()) {
            $data->{'signingLocation'} = $object->getSigningLocation();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getStatusChangedDateTime()) {
            $data->{'statusChangedDateTime'} = $object->getStatusChangedDateTime();
        }
        if (null !== $object->getTemplateId()) {
            $data->{'templateId'} = $object->getTemplateId();
        }
        if (null !== $object->getTemplatesUri()) {
            $data->{'templatesUri'} = $object->getTemplatesUri();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transactionId'} = $object->getTransactionId();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }
        if (null !== $object->getUseDisclosure()) {
            $data->{'useDisclosure'} = $object->getUseDisclosure();
        }
        if (null !== $object->getVoidedDateTime()) {
            $data->{'voidedDateTime'} = $object->getVoidedDateTime();
        }
        if (null !== $object->getVoidedReason()) {
            $data->{'voidedReason'} = $object->getVoidedReason();
        }

        return $data;
    }
}
