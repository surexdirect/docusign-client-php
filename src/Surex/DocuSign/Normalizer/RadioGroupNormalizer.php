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

class RadioGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\RadioGroup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\RadioGroup;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\RadioGroup();
        if (property_exists($data, 'conditionalParentLabel')) {
            $object->setConditionalParentLabel($data->{'conditionalParentLabel'});
        }
        if (property_exists($data, 'conditionalParentValue')) {
            $object->setConditionalParentValue($data->{'conditionalParentValue'});
        }
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'groupName')) {
            $object->setGroupName($data->{'groupName'});
        }
        if (property_exists($data, 'radios')) {
            $values = [];
            foreach ($data->{'radios'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Radio', 'json', $context);
            }
            $object->setRadios($values);
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'requireAll')) {
            $object->setRequireAll($data->{'requireAll'});
        }
        if (property_exists($data, 'requireInitialOnSharedChange')) {
            $object->setRequireInitialOnSharedChange($data->{'requireInitialOnSharedChange'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConditionalParentLabel()) {
            $data->{'conditionalParentLabel'} = $object->getConditionalParentLabel();
        }
        if (null !== $object->getConditionalParentValue()) {
            $data->{'conditionalParentValue'} = $object->getConditionalParentValue();
        }
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getGroupName()) {
            $data->{'groupName'} = $object->getGroupName();
        }
        if (null !== $object->getRadios()) {
            $values = [];
            foreach ($object->getRadios() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'radios'} = $values;
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getRequireAll()) {
            $data->{'requireAll'} = $object->getRequireAll();
        }
        if (null !== $object->getRequireInitialOnSharedChange()) {
            $data->{'requireInitialOnSharedChange'} = $object->getRequireInitialOnSharedChange();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }

        return $data;
    }
}
