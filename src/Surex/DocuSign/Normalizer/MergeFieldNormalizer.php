<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class MergeFieldNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\MergeField' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\MergeField) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\MergeField();
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
