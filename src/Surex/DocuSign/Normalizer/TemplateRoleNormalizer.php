<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateRoleNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateRole' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateRole) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateRole();
        if (property_exists($data, 'accessCode')) {
            $object->setAccessCode($data->{'accessCode'});
        }
        if (property_exists($data, 'clientUserId')) {
            $object->setClientUserId($data->{'clientUserId'});
        }
        if (property_exists($data, 'defaultRecipient')) {
            $object->setDefaultRecipient($data->{'defaultRecipient'});
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
        if (property_exists($data, 'inPersonSignerName')) {
            $object->setInPersonSignerName($data->{'inPersonSignerName'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'recipientSignatureProviders')) {
            $values = [];
            foreach ($data->{'recipientSignatureProviders'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\RecipientSignatureProvider', 'raw', $context);
            }
            $object->setRecipientSignatureProviders($values);
        }
        if (property_exists($data, 'roleName')) {
            $object->setRoleName($data->{'roleName'});
        }
        if (property_exists($data, 'routingOrder')) {
            $object->setRoutingOrder($data->{'routingOrder'});
        }
        if (property_exists($data, 'signingGroupId')) {
            $object->setSigningGroupId($data->{'signingGroupId'});
        }
        if (property_exists($data, 'tabs')) {
            $object->setTabs($this->serializer->deserialize($data->{'tabs'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCode()) {
            $data->{'accessCode'} = $object->getAccessCode();
        }
        if (null !== $object->getClientUserId()) {
            $data->{'clientUserId'} = $object->getClientUserId();
        }
        if (null !== $object->getDefaultRecipient()) {
            $data->{'defaultRecipient'} = $object->getDefaultRecipient();
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
        if (null !== $object->getInPersonSignerName()) {
            $data->{'inPersonSignerName'} = $object->getInPersonSignerName();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRecipientSignatureProviders()) {
            $values = [];
            foreach ($object->getRecipientSignatureProviders() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'recipientSignatureProviders'} = $values;
        }
        if (null !== $object->getRoleName()) {
            $data->{'roleName'} = $object->getRoleName();
        }
        if (null !== $object->getRoutingOrder()) {
            $data->{'routingOrder'} = $object->getRoutingOrder();
        }
        if (null !== $object->getSigningGroupId()) {
            $data->{'signingGroupId'} = $object->getSigningGroupId();
        }
        if (null !== $object->getTabs()) {
            $data->{'tabs'} = $this->serializer->serialize($object->getTabs(), 'raw', $context);
        }

        return $data;
    }
}
