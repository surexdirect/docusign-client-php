<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AttachmentNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Attachment' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Attachment) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Attachment();
        if (property_exists($data, 'accessControl')) {
            $object->setAccessControl($data->{'accessControl'});
        }
        if (property_exists($data, 'attachmentId')) {
            $object->setAttachmentId($data->{'attachmentId'});
        }
        if (property_exists($data, 'attachmentType')) {
            $object->setAttachmentType($data->{'attachmentType'});
        }
        if (property_exists($data, 'data')) {
            $object->setData($data->{'data'});
        }
        if (property_exists($data, 'label')) {
            $object->setLabel($data->{'label'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'remoteUrl')) {
            $object->setRemoteUrl($data->{'remoteUrl'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessControl()) {
            $data->{'accessControl'} = $object->getAccessControl();
        }
        if (null !== $object->getAttachmentId()) {
            $data->{'attachmentId'} = $object->getAttachmentId();
        }
        if (null !== $object->getAttachmentType()) {
            $data->{'attachmentType'} = $object->getAttachmentType();
        }
        if (null !== $object->getData()) {
            $data->{'data'} = $object->getData();
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRemoteUrl()) {
            $data->{'remoteUrl'} = $object->getRemoteUrl();
        }

        return $data;
    }
}