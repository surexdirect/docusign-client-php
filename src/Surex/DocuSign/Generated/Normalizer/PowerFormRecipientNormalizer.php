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

class PowerFormRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\PowerFormRecipient' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\PowerFormRecipient;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\PowerFormRecipient();
        if (property_exists($data, 'accessCode')) {
            $object->setAccessCode($data->{'accessCode'});
        }
        if (property_exists($data, 'accessCodeLocked')) {
            $object->setAccessCodeLocked($data->{'accessCodeLocked'});
        }
        if (property_exists($data, 'accessCodeRequired')) {
            $object->setAccessCodeRequired($data->{'accessCodeRequired'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'emailLocked')) {
            $object->setEmailLocked($data->{'emailLocked'});
        }
        if (property_exists($data, 'idCheckConfigurationName')) {
            $object->setIdCheckConfigurationName($data->{'idCheckConfigurationName'});
        }
        if (property_exists($data, 'idCheckRequired')) {
            $object->setIdCheckRequired($data->{'idCheckRequired'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'recipientType')) {
            $object->setRecipientType($data->{'recipientType'});
        }
        if (property_exists($data, 'roleName')) {
            $object->setRoleName($data->{'roleName'});
        }
        if (property_exists($data, 'routingOrder')) {
            $object->setRoutingOrder($data->{'routingOrder'});
        }
        if (property_exists($data, 'templateRequiresIdLookup')) {
            $object->setTemplateRequiresIdLookup($data->{'templateRequiresIdLookup'});
        }
        if (property_exists($data, 'userNameLocked')) {
            $object->setUserNameLocked($data->{'userNameLocked'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCode()) {
            $data->{'accessCode'} = $object->getAccessCode();
        }
        if (null !== $object->getAccessCodeLocked()) {
            $data->{'accessCodeLocked'} = $object->getAccessCodeLocked();
        }
        if (null !== $object->getAccessCodeRequired()) {
            $data->{'accessCodeRequired'} = $object->getAccessCodeRequired();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEmailLocked()) {
            $data->{'emailLocked'} = $object->getEmailLocked();
        }
        if (null !== $object->getIdCheckConfigurationName()) {
            $data->{'idCheckConfigurationName'} = $object->getIdCheckConfigurationName();
        }
        if (null !== $object->getIdCheckRequired()) {
            $data->{'idCheckRequired'} = $object->getIdCheckRequired();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRecipientType()) {
            $data->{'recipientType'} = $object->getRecipientType();
        }
        if (null !== $object->getRoleName()) {
            $data->{'roleName'} = $object->getRoleName();
        }
        if (null !== $object->getRoutingOrder()) {
            $data->{'routingOrder'} = $object->getRoutingOrder();
        }
        if (null !== $object->getTemplateRequiresIdLookup()) {
            $data->{'templateRequiresIdLookup'} = $object->getTemplateRequiresIdLookup();
        }
        if (null !== $object->getUserNameLocked()) {
            $data->{'userNameLocked'} = $object->getUserNameLocked();
        }

        return $data;
    }
}
