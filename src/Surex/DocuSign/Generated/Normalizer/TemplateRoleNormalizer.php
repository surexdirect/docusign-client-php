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

class TemplateRoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\TemplateRole' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\TemplateRole;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\TemplateRole();
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
            $object->setEmailNotification($this->denormalizer->denormalize($data->{'emailNotification'}, 'Surex\\DocuSign\\Generated\\Model\\RecipientEmailNotification', 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureProvider', 'json', $context);
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
            $object->setTabs($this->denormalizer->denormalize($data->{'tabs'}, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeRecipientTabs', 'json', $context));
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
            $data->{'emailNotification'} = $this->normalizer->normalize($object->getEmailNotification(), 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
            $data->{'tabs'} = $this->normalizer->normalize($object->getTabs(), 'json', $context);
        }

        return $data;
    }
}
