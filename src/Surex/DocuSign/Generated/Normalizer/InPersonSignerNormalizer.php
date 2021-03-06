<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InPersonSignerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\InPersonSigner' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\InPersonSigner;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\InPersonSigner();
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\DocumentVisibility', 'json', $context);
            }
            $object->setDocumentVisibility($values_1);
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'emailNotification')) {
            $object->setEmailNotification($this->denormalizer->denormalize($data->{'emailNotification'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientEmailNotification', 'json', $context));
        }
        if (property_exists($data, 'embeddedRecipientStartURL')) {
            $object->setEmbeddedRecipientStartURL($data->{'embeddedRecipientStartURL'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
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
            $object->setIdCheckInformationInput($this->denormalizer->denormalize($data->{'idCheckInformationInput'}, 'Surex\\DocuSign\\Generated\\Model\\IdCheckInformationInput', 'json', $context));
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
            $object->setNotaryHost($this->denormalizer->denormalize($data->{'notaryHost'}, 'Surex\\DocuSign\\Generated\\Model\\NotaryHost', 'json', $context));
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'phoneAuthentication')) {
            $object->setPhoneAuthentication($this->denormalizer->denormalize($data->{'phoneAuthentication'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientPhoneAuthentication', 'json', $context));
        }
        if (property_exists($data, 'recipientAttachments')) {
            $values_2 = [];
            foreach ($data->{'recipientAttachments'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Generated\\Model\\RecipientAttachment', 'json', $context);
            }
            $object->setRecipientAttachments($values_2);
        }
        if (property_exists($data, 'recipientAuthenticationStatus')) {
            $object->setRecipientAuthenticationStatus($this->denormalizer->denormalize($data->{'recipientAuthenticationStatus'}, 'Surex\\DocuSign\\Generated\\Model\\AuthenticationStatus', 'json', $context));
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
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureProvider', 'json', $context);
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
            $object->setSamlAuthentication($this->denormalizer->denormalize($data->{'samlAuthentication'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientSAMLAuthentication', 'json', $context));
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'signatureInfo')) {
            $object->setSignatureInfo($this->denormalizer->denormalize($data->{'signatureInfo'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureInformation', 'json', $context));
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
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Surex\\DocuSign\\Generated\\Model\\UserInfo', 'json', $context);
            }
            $object->setSigningGroupUsers($values_4);
        }
        if (property_exists($data, 'smsAuthentication')) {
            $object->setSmsAuthentication($this->denormalizer->denormalize($data->{'smsAuthentication'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientSMSAuthentication', 'json', $context));
        }
        if (property_exists($data, 'socialAuthentications')) {
            $values_5 = [];
            foreach ($data->{'socialAuthentications'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Surex\\DocuSign\\Generated\\Model\\SocialAuthentication', 'json', $context);
            }
            $object->setSocialAuthentications($values_5);
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'tabs')) {
            $object->setTabs($this->denormalizer->denormalize($data->{'tabs'}, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeRecipientTabs', 'json', $context));
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
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'documentVisibility'} = $values_1;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEmailNotification()) {
            $data->{'emailNotification'} = $this->normalizer->normalize($object->getEmailNotification(), 'json', $context);
        }
        if (null !== $object->getEmbeddedRecipientStartURL()) {
            $data->{'embeddedRecipientStartURL'} = $object->getEmbeddedRecipientStartURL();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
            $data->{'idCheckInformationInput'} = $this->normalizer->normalize($object->getIdCheckInformationInput(), 'json', $context);
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
            $data->{'notaryHost'} = $this->normalizer->normalize($object->getNotaryHost(), 'json', $context);
        }
        if (null !== $object->getNote()) {
            $data->{'note'} = $object->getNote();
        }
        if (null !== $object->getPhoneAuthentication()) {
            $data->{'phoneAuthentication'} = $this->normalizer->normalize($object->getPhoneAuthentication(), 'json', $context);
        }
        if (null !== $object->getRecipientAttachments()) {
            $values_2 = [];
            foreach ($object->getRecipientAttachments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'recipientAttachments'} = $values_2;
        }
        if (null !== $object->getRecipientAuthenticationStatus()) {
            $data->{'recipientAuthenticationStatus'} = $this->normalizer->normalize($object->getRecipientAuthenticationStatus(), 'json', $context);
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
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
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
            $data->{'samlAuthentication'} = $this->normalizer->normalize($object->getSamlAuthentication(), 'json', $context);
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getSignatureInfo()) {
            $data->{'signatureInfo'} = $this->normalizer->normalize($object->getSignatureInfo(), 'json', $context);
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
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'signingGroupUsers'} = $values_4;
        }
        if (null !== $object->getSmsAuthentication()) {
            $data->{'smsAuthentication'} = $this->normalizer->normalize($object->getSmsAuthentication(), 'json', $context);
        }
        if (null !== $object->getSocialAuthentications()) {
            $values_5 = [];
            foreach ($object->getSocialAuthentications() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'socialAuthentications'} = $values_5;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTabs()) {
            $data->{'tabs'} = $this->normalizer->normalize($object->getTabs(), 'json', $context);
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
