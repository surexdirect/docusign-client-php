<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountWatermarksNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountWatermarks' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountWatermarks) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
