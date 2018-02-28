<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SettingsMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\SettingsMetadata' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\SettingsMetadata;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\SettingsMetadata();
        if (property_exists($data, 'is21CFRPart11')) {
            $object->setIs21CFRPart11($data->{'is21CFRPart11'});
        }
        if (property_exists($data, 'options')) {
            $values = [];
            foreach ($data->{'options'} as $value) {
                $values[] = $value;
            }
            $object->setOptions($values);
        }
        if (property_exists($data, 'rights')) {
            $object->setRights($data->{'rights'});
        }
        if (property_exists($data, 'uiHint')) {
            $object->setUiHint($data->{'uiHint'});
        }
        if (property_exists($data, 'uiOrder')) {
            $object->setUiOrder($data->{'uiOrder'});
        }
        if (property_exists($data, 'uiType')) {
            $object->setUiType($data->{'uiType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIs21CFRPart11()) {
            $data->{'is21CFRPart11'} = $object->getIs21CFRPart11();
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $value;
            }
            $data->{'options'} = $values;
        }
        if (null !== $object->getRights()) {
            $data->{'rights'} = $object->getRights();
        }
        if (null !== $object->getUiHint()) {
            $data->{'uiHint'} = $object->getUiHint();
        }
        if (null !== $object->getUiOrder()) {
            $data->{'uiOrder'} = $object->getUiOrder();
        }
        if (null !== $object->getUiType()) {
            $data->{'uiType'} = $object->getUiType();
        }

        return $data;
    }
}
