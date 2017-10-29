<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserSettingsInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserSettingsInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserSettingsInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserSettingsInformation();
        if (property_exists($data, 'accountManagementGranular')) {
            $object->setAccountManagementGranular($this->serializer->deserialize($data->{'accountManagementGranular'}, 'Surex\\DocuSign\\Model\\UserAccountManagementGranularInformation', 'raw', $context));
        }
        if (property_exists($data, 'senderEmailNotifications')) {
            $object->setSenderEmailNotifications($this->serializer->deserialize($data->{'senderEmailNotifications'}, 'Surex\\DocuSign\\Model\\SenderEmailNotifications', 'raw', $context));
        }
        if (property_exists($data, 'signerEmailNotifications')) {
            $object->setSignerEmailNotifications($this->serializer->deserialize($data->{'signerEmailNotifications'}, 'Surex\\DocuSign\\Model\\SignerEmailNotifications', 'raw', $context));
        }
        if (property_exists($data, 'userSettings')) {
            $values = [];
            foreach ($data->{'userSettings'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setUserSettings($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountManagementGranular()) {
            $data->{'accountManagementGranular'} = $this->serializer->serialize($object->getAccountManagementGranular(), 'raw', $context);
        }
        if (null !== $object->getSenderEmailNotifications()) {
            $data->{'senderEmailNotifications'} = $this->serializer->serialize($object->getSenderEmailNotifications(), 'raw', $context);
        }
        if (null !== $object->getSignerEmailNotifications()) {
            $data->{'signerEmailNotifications'} = $this->serializer->serialize($object->getSignerEmailNotifications(), 'raw', $context);
        }
        if (null !== $object->getUserSettings()) {
            $values = [];
            foreach ($object->getUserSettings() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'userSettings'} = $values;
        }

        return $data;
    }
}
