<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContactsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Contacts' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Contacts) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Contacts();
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'contactPhoneNumbers')) {
            $values = [];
            foreach ($data->{'contactPhoneNumbers'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ContactPhoneNumber', 'raw', $context);
            }
            $object->setContactPhoneNumbers($values);
        }
        if (property_exists($data, 'contactUri')) {
            $object->setContactUri($data->{'contactUri'});
        }
        if (property_exists($data, 'emails')) {
            $values_1 = [];
            foreach ($data->{'emails'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEmails($values_1);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'organization')) {
            $object->setOrganization($data->{'organization'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'signingGroup')) {
            $object->setSigningGroup($data->{'signingGroup'});
        }
        if (property_exists($data, 'signingGroupName')) {
            $object->setSigningGroupName($data->{'signingGroupName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContactId()) {
            $data->{'contactId'} = $object->getContactId();
        }
        if (null !== $object->getContactPhoneNumbers()) {
            $values = [];
            foreach ($object->getContactPhoneNumbers() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'contactPhoneNumbers'} = $values;
        }
        if (null !== $object->getContactUri()) {
            $data->{'contactUri'} = $object->getContactUri();
        }
        if (null !== $object->getEmails()) {
            $values_1 = [];
            foreach ($object->getEmails() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'emails'} = $values_1;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOrganization()) {
            $data->{'organization'} = $object->getOrganization();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getSigningGroup()) {
            $data->{'signingGroup'} = $object->getSigningGroup();
        }
        if (null !== $object->getSigningGroupName()) {
            $data->{'signingGroupName'} = $object->getSigningGroupName();
        }

        return $data;
    }
}
