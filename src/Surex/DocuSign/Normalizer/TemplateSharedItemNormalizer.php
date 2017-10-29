<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateSharedItemNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateSharedItem' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateSharedItem) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateSharedItem();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'sharedGroups')) {
            $values = [];
            foreach ($data->{'sharedGroups'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\MemberGroupSharedItem', 'raw', $context);
            }
            $object->setSharedGroups($values);
        }
        if (property_exists($data, 'sharedUsers')) {
            $values_1 = [];
            foreach ($data->{'sharedUsers'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\UserSharedItem', 'raw', $context);
            }
            $object->setSharedUsers($values_1);
        }
        if (property_exists($data, 'templateId')) {
            $object->setTemplateId($data->{'templateId'});
        }
        if (property_exists($data, 'templateName')) {
            $object->setTemplateName($data->{'templateName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getSharedGroups()) {
            $values = [];
            foreach ($object->getSharedGroups() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'sharedGroups'} = $values;
        }
        if (null !== $object->getSharedUsers()) {
            $values_1 = [];
            foreach ($object->getSharedUsers() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'sharedUsers'} = $values_1;
        }
        if (null !== $object->getTemplateId()) {
            $data->{'templateId'} = $object->getTemplateId();
        }
        if (null !== $object->getTemplateName()) {
            $data->{'templateName'} = $object->getTemplateName();
        }

        return $data;
    }
}
