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

class MergeFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\MergeField' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\MergeField;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\MergeField();
        if (property_exists($data, 'allowSenderToEdit')) {
            $object->setAllowSenderToEdit($data->{'allowSenderToEdit'});
        }
        if (property_exists($data, 'configurationType')) {
            $object->setConfigurationType($data->{'configurationType'});
        }
        if (property_exists($data, 'path')) {
            $object->setPath($data->{'path'});
        }
        if (property_exists($data, 'row')) {
            $object->setRow($data->{'row'});
        }
        if (property_exists($data, 'writeBack')) {
            $object->setWriteBack($data->{'writeBack'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowSenderToEdit()) {
            $data->{'allowSenderToEdit'} = $object->getAllowSenderToEdit();
        }
        if (null !== $object->getConfigurationType()) {
            $data->{'configurationType'} = $object->getConfigurationType();
        }
        if (null !== $object->getPath()) {
            $data->{'path'} = $object->getPath();
        }
        if (null !== $object->getRow()) {
            $data->{'row'} = $object->getRow();
        }
        if (null !== $object->getWriteBack()) {
            $data->{'writeBack'} = $object->getWriteBack();
        }

        return $data;
    }
}
