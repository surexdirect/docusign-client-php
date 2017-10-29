<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class InPersonSignerNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\InPersonSigner' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\InPersonSigner) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\InPersonSigner();
        if (property_exists($data, 'accessCode')) {
            $object->setAccessCode($data->{'accessCode'});
        }
        if (property_exists($data, 'addAccessCodeToEmail')) {
            $object->setAddAccessCodeToEmail($data->{'addAccessCodeToEmail'});
        }
        if (property_exists($data, 'autoNavigation')) {
            $object->setAutoNavigation($data->{'autoNavigation'});
        }
        if (property_exists($data, 'canSignOffline')) {
            $object->setCanSignOffline($data->{'canSignOffline'});
        }
        if (property_exists($data, 'clientUserId')) {
            $object->setClientUserId($data->{'clientUserId'});
        }
        if (property_exists($data, 'creationReason')) {
            $object->setCreationReason($data->{'creationReason'});
        }
        if (property_exists($data, 'customFields')) {
            $values = [];
            foreach ($data->{'customFields'} as $value) {
                $values[] = $value;
            }
            $object->setCustomFields($values);
        }
        if (property_exists($data, 'declinedDateTime')) {
            $object->setDeclinedDateTime($data->{'declinedDateTime'});
        }
        if (property_exists($data, 'declinedReason')) {
            $object->setDeclinedReason($data->{'declinedReason'});
        }
        if (property_exists($data, 'defaultRecipient')) {
            $object->setDefaultRecipient($data->{'defaultRecipient'});
        }
        if (property_exists($data, 'deliveredDateTime')) {
            $object->setDeliveredDateTime($data->{'deliveredDateTime'});
        }
        if (property_exists($data, 'deliveryMethod')) {
            $object->setDeliveryMethod($data->{'deliveryMethod'});
        }
        if (property_exists($data, 'documentVisibility')) {
            $values_1 = [];
            foreach ($data->{'documentVisibility'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\DocumentVisibility', 'raw', $context);
            }
            $object->setDocumentVisibility($values_1);
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'emailNotification')) {
            $object->setEmailNotification($this->serializer->deserialize($data->{'emailNotification'}, 'Surex\\DocuSign\\Model\\RecipientEmailNotification', 'raw', $context));
        }
        if (property_exists($data, 'embeddedRecipientStartURL')) {
            $object->setEmbeddedRecipientStartURL($data->{'embeddedRecipientStartURL'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'faxNumber')) {
            $object->setFaxNumber($data->{'faxNumber'});
        }
        if (property_exists($data, 'hostEmail')) {
            $object->setHostEmail($data->{'hostEmail'});
        }
        if (property_exists($data, 'hostName')) {
            $object->setHostName($data->{'hostName'});
        }
        if (property_exists($data, 'idCheckConfigurationName')) {
            $object->setIdCheckConfigurationName($data->{'idCheckConfigurationName'});
        }
        if (property_exists($data, 'idCheckInformationInput')) {
            $object->setIdCheckInformationInput($this->serializer->deserialize($data->{'idCheckInformationInput'}, 'Surex\\DocuSign\\Model\\IdCheckInformationInput', 'raw', $context));
        }
        if (property_exists($data, 'inheritEmailNotificationConfiguration')) {
            $object->setInheritEmailNotificationConfiguration($data->{'inheritEmailNotificationConfiguration'});
        }
        if (property_exists($data, 'inPersonSigningType')) {
            $object->setInPersonSigningType($data->{'inPersonSigningType'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'notaryHost')) {
            $object->setNotaryHost($this->serializer->deserialize($data->{'notaryHost'}, 'Surex\\DocuSign\\Model\\NotaryHost', 'raw', $context));
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'phoneAuthentication')) {
            $object->setPhoneAuthentication($this->serializer->deserialize($data->{'phoneAuthentication'}, 'Surex\\DocuSign\\Model\\RecipientPhoneAuthentication', 'raw', $context));
        }
        if (property_exists($data, 'recipientAttachments')) {
            $values_2 = [];
            foreach ($data->{'recipientAttachments'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\RecipientAttachment', 'raw', $context);
            }
            $object->setRecipientAttachments($values_2);
        }
        if (property_exists($data, 'recipientAuthenticationStatus')) {
            $object->setRecipientAuthenticationStatus($this->serializer->deserialize($data->{'recipientAuthenticationStatus'}, 'Surex\\DocuSign\\Model\\AuthenticationStatus', 'raw', $context));
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'recipientIdGuid')) {
            $object->setRecipientIdGuid($data->{'recipientIdGuid'});
        }
        if (property_exists($data, 'recipientSignatureProviders')) {
            $values_3 = [];
            foreach ($data->{'recipientSignatureProviders'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Surex\\DocuSign\\Model\\RecipientSignatureProvider', 'raw', $context);
            }
            $object->setRecipientSignatureProviders($values_3);
        }
        if (property_exists($data, 'recipientSuppliesTabs')) {
            $object->setRecipientSuppliesTabs($data->{'recipientSuppliesTabs'});
        }
        if (property_exists($data, 'requireIdLookup')) {
            $object->setRequireIdLookup($data->{'requireIdLookup'});
        }
        if (property_exists($data, 'requireSignerCertificate')) {
            $object->setRequireSignerCertificate($data->{'requireSignerCertificate'});
        }
        if (property_exists($data, 'requireSignOnPaper')) {
            $object->setRequireSignOnPaper($data->{'requireSignOnPaper'});
        }
        if (property_exists($data, 'roleName')) {
            $object->setRoleName($data->{'roleName'});
        }
        if (property_exists($data, 'routingOrder')) {
            $object->setRoutingOrder($data->{'routingOrder'});
        }
        if (property_exists($data, 'samlAuthentication')) {
            $object->setSamlAuthentication($this->serializer->deserialize($data->{'samlAuthentication'}, 'Surex\\DocuSign\\Model\\RecipientSAMLAuthentication', 'raw', $context));
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'signatureInfo')) {
            $object->setSignatureInfo($this->serializer->deserialize($data->{'signatureInfo'}, 'Surex\\DocuSign\\Model\\RecipientSignatureInformation', 'raw', $context));
        }
        if (property_exists($data, 'signedDateTime')) {
            $object->setSignedDateTime($data->{'signedDateTime'});
        }
        if (property_exists($data, 'signerEmail')) {
            $object->setSignerEmail($data->{'signerEmail'});
        }
        if (property_exists($data, 'signerName')) {
            $object->setSignerName($data->{'signerName'});
        }
        if (property_exists($data, 'signInEachLocation')) {
            $object->setSignInEachLocation($data->{'signInEachLocation'});
        }
        if (property_exists($data, 'signingGroupId')) {
            $object->setSigningGroupId($data->{'signingGroupId'});
        }
        if (property_exists($data, 'signingGroupName')) {
            $object->setSigningGroupName($data->{'signingGroupName'});
        }
        if (property_exists($data, 'signingGroupUsers')) {
            $values_4 = [];
            foreach ($data->{'signingGroupUsers'} as $value_4) {
                $values_4[] = $this->serializer->deserialize($value_4, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context);
            }
            $object->setSigningGroupUsers($values_4);
        }
        if (property_exists($data, 'smsAuthentication')) {
            $object->setSmsAuthentication($this->serializer->deserialize($data->{'smsAuthentication'}, 'Surex\\DocuSign\\Model\\RecipientSMSAuthentication', 'raw', $context));
        }
        if (property_exists($data, 'socialAuthentications')) {
            $values_5 = [];
            foreach ($data->{'socialAuthentications'} as $value_5) {
                $values_5[] = $this->serializer->deserialize($value_5, 'Surex\\DocuSign\\Model\\SocialAuthentication', 'raw', $context);
            }
            $object->setSocialAuthentications($values_5);
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'tabs')) {
            $object->setTabs($this->serializer->deserialize($data->{'tabs'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'raw', $context));
        }
        if (property_exists($data, 'templateLocked')) {
            $object->setTemplateLocked($data->{'templateLocked'});
        }
        if (property_exists($data, 'templateRequired')) {
            $object->setTemplateRequired($data->{'templateRequired'});
        }
        if (property_exists($data, 'totalTabCount')) {
            $object->setTotalTabCount($data->{'totalTabCount'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCode()) {
            $data->{'accessCode'} = $object->getAccessCode();
        }
        if (null !== $object->getAddAccessCodeToEmail()) {
            $data->{'addAccessCodeToEmail'} = $object->getAddAccessCodeToEmail();
        }
        if (null !== $object->getAutoNavigation()) {
            $data->{'autoNavigation'} = $object->getAutoNavigation();
        }
        if (null !== $object->getCanSignOffline()) {
            $data->{'canSignOffline'} = $object->getCanSignOffline();
        }
        if (null !== $object->getClientUserId()) {
            $data->{'clientUserId'} = $object->getClientUserId();
        }
        if (null !== $object->getCreationReason()) {
            $data->{'creationReason'} = $object->getCreationReason();
        }
        if (null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $value;
            }
            $data->{'customFields'} = $values;
        }
        if (null !== $object->getDeclinedDateTime()) {
            $data->{'declinedDateTime'} = $object->getDeclinedDateTime();
        }
        if (null !== $object->getDeclinedReason()) {
            $data->{'declinedReason'} = $object->getDeclinedReason();
        }
        if (null !== $object->getDefaultRecipient()) {
            $data->{'defaultRecipient'} = $object->getDefaultRecipient();
        }
        if (null !== $object->getDeliveredDateTime()) {
            $data->{'deliveredDateTime'} = $object->getDeliveredDateTime();
        }
        if (null !== $object->getDeliveryMethod()) {
            $data->{'deliveryMethod'} = $object->getDeliveryMethod();
        }
        if (null !== $object->getDocumentVisibility()) {
            $values_1 = [];
            foreach ($object->getDocumentVisibility() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'documentVisibility'} = $values_1;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEmailNotification()) {
            $data->{'emailNotification'} = $this->serializer->serialize($object->getEmailNotification(), 'raw', $context);
        }
        if (null !== $object->getEmbeddedRecipientStartURL()) {
            $data->{'embeddedRecipientStartURL'} = $object->getEmbeddedRecipientStartURL();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getFaxNumber()) {
            $data->{'faxNumber'} = $object->getFaxNumber();
        }
        if (null !== $object->getHostEmail()) {
            $data->{'hostEmail'} = $object->getHostEmail();
        }
        if (null !== $object->getHostName()) {
            $data->{'hostName'} = $object->getHostName();
        }
        if (null !== $object->getIdCheckConfigurationName()) {
            $data->{'idCheckConfigurationName'} = $object->getIdCheckConfigurationName();
        }
        if (null !== $object->getIdCheckInformationInput()) {
            $data->{'idCheckInformationInput'} = $this->serializer->serialize($object->getIdCheckInformationInput(), 'raw', $context);
        }
        if (null !== $object->getInheritEmailNotificationConfiguration()) {
            $data->{'inheritEmailNotificationConfiguration'} = $object->getInheritEmailNotificationConfiguration();
        }
        if (null !== $object->getInPersonSigningType()) {
            $data->{'inPersonSigningType'} = $object->getInPersonSigningType();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNotaryHost()) {
            $data->{'notaryHost'} = $this->serializer->serialize($object->getNotaryHost(), 'raw', $context);
        }
        if (null !== $object->getNote()) {
            $data->{'note'} = $object->getNote();
        }
        if (null !== $object->getPhoneAuthentication()) {
            $data->{'phoneAuthentication'} = $this->serializer->serialize($object->getPhoneAuthentication(), 'raw', $context);
        }
        if (null !== $object->getRecipientAttachments()) {
            $values_2 = [];
            foreach ($object->getRecipientAttachments() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'recipientAttachments'} = $values_2;
        }
        if (null !== $object->getRecipientAuthenticationStatus()) {
            $data->{'recipientAuthenticationStatus'} = $this->serializer->serialize($object->getRecipientAuthenticationStatus(), 'raw', $context);
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getRecipientIdGuid()) {
            $data->{'recipientIdGuid'} = $object->getRecipientIdGuid();
        }
        if (null !== $object->getRecipientSignatureProviders()) {
            $values_3 = [];
            foreach ($object->getRecipientSignatureProviders() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'recipientSignatureProviders'} = $values_3;
        }
        if (null !== $object->getRecipientSuppliesTabs()) {
            $data->{'recipientSuppliesTabs'} = $object->getRecipientSuppliesTabs();
        }
        if (null !== $object->getRequireIdLookup()) {
            $data->{'requireIdLookup'} = $object->getRequireIdLookup();
        }
        if (null !== $object->getRequireSignerCertificate()) {
            $data->{'requireSignerCertificate'} = $object->getRequireSignerCertificate();
        }
        if (null !== $object->getRequireSignOnPaper()) {
            $data->{'requireSignOnPaper'} = $object->getRequireSignOnPaper();
        }
        if (null !== $object->getRoleName()) {
            $data->{'roleName'} = $object->getRoleName();
        }
        if (null !== $object->getRoutingOrder()) {
            $data->{'routingOrder'} = $object->getRoutingOrder();
        }
        if (null !== $object->getSamlAuthentication()) {
            $data->{'samlAuthentication'} = $this->serializer->serialize($object->getSamlAuthentication(), 'raw', $context);
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getSignatureInfo()) {
            $data->{'signatureInfo'} = $this->serializer->serialize($object->getSignatureInfo(), 'raw', $context);
        }
        if (null !== $object->getSignedDateTime()) {
            $data->{'signedDateTime'} = $object->getSignedDateTime();
        }
        if (null !== $object->getSignerEmail()) {
            $data->{'signerEmail'} = $object->getSignerEmail();
        }
        if (null !== $object->getSignerName()) {
            $data->{'signerName'} = $object->getSignerName();
        }
        if (null !== $object->getSignInEachLocation()) {
            $data->{'signInEachLocation'} = $object->getSignInEachLocation();
        }
        if (null !== $object->getSigningGroupId()) {
            $data->{'signingGroupId'} = $object->getSigningGroupId();
        }
        if (null !== $object->getSigningGroupName()) {
            $data->{'signingGroupName'} = $object->getSigningGroupName();
        }
        if (null !== $object->getSigningGroupUsers()) {
            $values_4 = [];
            foreach ($object->getSigningGroupUsers() as $value_4) {
                $values_4[] = $this->serializer->serialize($value_4, 'raw', $context);
            }
            $data->{'signingGroupUsers'} = $values_4;
        }
        if (null !== $object->getSmsAuthentication()) {
            $data->{'smsAuthentication'} = $this->serializer->serialize($object->getSmsAuthentication(), 'raw', $context);
        }
        if (null !== $object->getSocialAuthentications()) {
            $values_5 = [];
            foreach ($object->getSocialAuthentications() as $value_5) {
                $values_5[] = $this->serializer->serialize($value_5, 'raw', $context);
            }
            $data->{'socialAuthentications'} = $values_5;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTabs()) {
            $data->{'tabs'} = $this->serializer->serialize($object->getTabs(), 'raw', $context);
        }
        if (null !== $object->getTemplateLocked()) {
            $data->{'templateLocked'} = $object->getTemplateLocked();
        }
        if (null !== $object->getTemplateRequired()) {
            $data->{'templateRequired'} = $object->getTemplateRequired();
        }
        if (null !== $object->getTotalTabCount()) {
            $data->{'totalTabCount'} = $object->getTotalTabCount();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
