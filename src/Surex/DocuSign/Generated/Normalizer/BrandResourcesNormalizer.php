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

class BrandResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BrandResources' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BrandResources;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BrandResources();
        if (property_exists($data, 'createdByUserInfo')) {
            $object->setCreatedByUserInfo($this->denormalizer->denormalize($data->{'createdByUserInfo'}, 'Surex\\DocuSign\\Generated\\Model\\UserInfo', 'json', $context));
        }
        if (property_exists($data, 'createdDate')) {
            $object->setCreatedDate($data->{'createdDate'});
        }
        if (property_exists($data, 'modifiedByUserInfo')) {
            $object->setModifiedByUserInfo($this->denormalizer->denormalize($data->{'modifiedByUserInfo'}, 'Surex\\DocuSign\\Generated\\Model\\UserInfo', 'json', $context));
        }
        if (property_exists($data, 'modifiedDate')) {
            $object->setModifiedDate($data->{'modifiedDate'});
        }
        if (property_exists($data, 'modifiedTemplates')) {
            $values = [];
            foreach ($data->{'modifiedTemplates'} as $value) {
                $values[] = $value;
            }
            $object->setModifiedTemplates($values);
        }
        if (property_exists($data, 'resourcesContentType')) {
            $object->setResourcesContentType($data->{'resourcesContentType'});
        }
        if (property_exists($data, 'resourcesContentUri')) {
            $object->setResourcesContentUri($data->{'resourcesContentUri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedByUserInfo()) {
            $data->{'createdByUserInfo'} = $this->normalizer->normalize($object->getCreatedByUserInfo(), 'json', $context);
        }
        if (null !== $object->getCreatedDate()) {
            $data->{'createdDate'} = $object->getCreatedDate();
        }
        if (null !== $object->getModifiedByUserInfo()) {
            $data->{'modifiedByUserInfo'} = $this->normalizer->normalize($object->getModifiedByUserInfo(), 'json', $context);
        }
        if (null !== $object->getModifiedDate()) {
            $data->{'modifiedDate'} = $object->getModifiedDate();
        }
        if (null !== $object->getModifiedTemplates()) {
            $values = [];
            foreach ($object->getModifiedTemplates() as $value) {
                $values[] = $value;
            }
            $data->{'modifiedTemplates'} = $values;
        }
        if (null !== $object->getResourcesContentType()) {
            $data->{'resourcesContentType'} = $object->getResourcesContentType();
        }
        if (null !== $object->getResourcesContentUri()) {
            $data->{'resourcesContentUri'} = $object->getResourcesContentUri();
        }

        return $data;
    }
}
