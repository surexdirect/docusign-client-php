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

class RecipientAttachmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\RecipientAttachment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\RecipientAttachment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\RecipientAttachment();
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
