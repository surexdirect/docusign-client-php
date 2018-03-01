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

class ContactsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Contacts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Contacts;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Contacts();
        if (property_exists($data, 'contactId')) {
            $object->setContactId($data->{'contactId'});
        }
        if (property_exists($data, 'contactPhoneNumbers')) {
            $values = [];
            foreach ($data->{'contactPhoneNumbers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\ContactPhoneNumber', 'json', $context);
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
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
