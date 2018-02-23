<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserSettingsInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\UserSettingsInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\UserSettingsInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\UserSettingsInformation();
        if (property_exists($data, 'accountManagementGranular')) {
            $object->setAccountManagementGranular($this->denormalizer->denormalize($data->{'accountManagementGranular'}, 'Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation', 'json', $context));
        }
        if (property_exists($data, 'senderEmailNotifications')) {
            $object->setSenderEmailNotifications($this->denormalizer->denormalize($data->{'senderEmailNotifications'}, 'Surex\\DocuSign\\Model\\SenderEmailNotifications', 'json', $context));
        }
        if (property_exists($data, 'signerEmailNotifications')) {
            $object->setSignerEmailNotifications($this->denormalizer->denormalize($data->{'signerEmailNotifications'}, 'Surex\\DocuSign\\Model\\SignerEmailNotifications', 'json', $context));
        }
        if (property_exists($data, 'userSettings')) {
            $values = [];
            foreach ($data->{'userSettings'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setUserSettings($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountManagementGranular()) {
            $data->{'accountManagementGranular'} = $this->normalizer->normalize($object->getAccountManagementGranular(), 'json', $context);
        }
        if (null !== $object->getSenderEmailNotifications()) {
            $data->{'senderEmailNotifications'} = $this->normalizer->normalize($object->getSenderEmailNotifications(), 'json', $context);
        }
        if (null !== $object->getSignerEmailNotifications()) {
            $data->{'signerEmailNotifications'} = $this->normalizer->normalize($object->getSignerEmailNotifications(), 'json', $context);
        }
        if (null !== $object->getUserSettings()) {
            $values = [];
            foreach ($object->getUserSettings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'userSettings'} = $values;
        }

        return $data;
    }
}
