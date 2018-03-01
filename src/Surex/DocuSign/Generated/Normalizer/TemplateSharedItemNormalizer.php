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

class TemplateSharedItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\TemplateSharedItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\TemplateSharedItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\TemplateSharedItem();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Surex\\DocuSign\\Generated\\Model\\UserInfo', 'json', $context));
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'sharedGroups')) {
            $values = [];
            foreach ($data->{'sharedGroups'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\MemberGroupSharedItem', 'json', $context);
            }
            $object->setSharedGroups($values);
        }
        if (property_exists($data, 'sharedUsers')) {
            $values_1 = [];
            foreach ($data->{'sharedUsers'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\UserSharedItem', 'json', $context);
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getSharedGroups()) {
            $values = [];
            foreach ($object->getSharedGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'sharedGroups'} = $values;
        }
        if (null !== $object->getSharedUsers()) {
            $values_1 = [];
            foreach ($object->getSharedUsers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
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
