<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BrandResourcesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BrandResources' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BrandResources) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BrandResources();
        if (property_exists($data, 'createdByUserInfo')) {
            $object->setCreatedByUserInfo($this->serializer->deserialize($data->{'createdByUserInfo'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'createdDate')) {
            $object->setCreatedDate($data->{'createdDate'});
        }
        if (property_exists($data, 'modifiedByUserInfo')) {
            $object->setModifiedByUserInfo($this->serializer->deserialize($data->{'modifiedByUserInfo'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
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
            $data->{'createdByUserInfo'} = $this->serializer->serialize($object->getCreatedByUserInfo(), 'raw', $context);
        }
        if (null !== $object->getCreatedDate()) {
            $data->{'createdDate'} = $object->getCreatedDate();
        }
        if (null !== $object->getModifiedByUserInfo()) {
            $data->{'modifiedByUserInfo'} = $this->serializer->serialize($object->getModifiedByUserInfo(), 'raw', $context);
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
