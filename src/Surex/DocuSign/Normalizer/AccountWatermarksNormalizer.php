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

class AccountWatermarksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountWatermarks' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountWatermarks;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountWatermarks();
        if (property_exists($data, 'displayAngle')) {
            $object->setDisplayAngle($data->{'displayAngle'});
        }
        if (property_exists($data, 'enabled')) {
            $object->setEnabled($data->{'enabled'});
        }
        if (property_exists($data, 'font')) {
            $object->setFont($data->{'font'});
        }
        if (property_exists($data, 'fontColor')) {
            $object->setFontColor($data->{'fontColor'});
        }
        if (property_exists($data, 'fontSize')) {
            $object->setFontSize($data->{'fontSize'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'imageBase64')) {
            $object->setImageBase64($data->{'imageBase64'});
        }
        if (property_exists($data, 'transparency')) {
            $object->setTransparency($data->{'transparency'});
        }
        if (property_exists($data, 'watermarkText')) {
            $object->setWatermarkText($data->{'watermarkText'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisplayAngle()) {
            $data->{'displayAngle'} = $object->getDisplayAngle();
        }
        if (null !== $object->getEnabled()) {
            $data->{'enabled'} = $object->getEnabled();
        }
        if (null !== $object->getFont()) {
            $data->{'font'} = $object->getFont();
        }
        if (null !== $object->getFontColor()) {
            $data->{'fontColor'} = $object->getFontColor();
        }
        if (null !== $object->getFontSize()) {
            $data->{'fontSize'} = $object->getFontSize();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getImageBase64()) {
            $data->{'imageBase64'} = $object->getImageBase64();
        }
        if (null !== $object->getTransparency()) {
            $data->{'transparency'} = $object->getTransparency();
        }
        if (null !== $object->getWatermarkText()) {
            $data->{'watermarkText'} = $object->getWatermarkText();
        }

        return $data;
    }
}
