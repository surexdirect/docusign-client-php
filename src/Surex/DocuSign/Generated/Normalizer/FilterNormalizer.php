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

class FilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Filter' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Filter;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Filter();
        if (property_exists($data, 'actionRequired')) {
            $object->setActionRequired($data->{'actionRequired'});
        }
        if (property_exists($data, 'expires')) {
            $object->setExpires($data->{'expires'});
        }
        if (property_exists($data, 'folderIds')) {
            $object->setFolderIds($data->{'folderIds'});
        }
        if (property_exists($data, 'fromDateTime')) {
            $object->setFromDateTime($data->{'fromDateTime'});
        }
        if (property_exists($data, 'isTemplate')) {
            $object->setIsTemplate($data->{'isTemplate'});
        }
        if (property_exists($data, 'order')) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'orderBy')) {
            $object->setOrderBy($data->{'orderBy'});
        }
        if (property_exists($data, 'searchTarget')) {
            $object->setSearchTarget($data->{'searchTarget'});
        }
        if (property_exists($data, 'searchText')) {
            $object->setSearchText($data->{'searchText'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'toDateTime')) {
            $object->setToDateTime($data->{'toDateTime'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActionRequired()) {
            $data->{'actionRequired'} = $object->getActionRequired();
        }
        if (null !== $object->getExpires()) {
            $data->{'expires'} = $object->getExpires();
        }
        if (null !== $object->getFolderIds()) {
            $data->{'folderIds'} = $object->getFolderIds();
        }
        if (null !== $object->getFromDateTime()) {
            $data->{'fromDateTime'} = $object->getFromDateTime();
        }
        if (null !== $object->getIsTemplate()) {
            $data->{'isTemplate'} = $object->getIsTemplate();
        }
        if (null !== $object->getOrder()) {
            $data->{'order'} = $object->getOrder();
        }
        if (null !== $object->getOrderBy()) {
            $data->{'orderBy'} = $object->getOrderBy();
        }
        if (null !== $object->getSearchTarget()) {
            $data->{'searchTarget'} = $object->getSearchTarget();
        }
        if (null !== $object->getSearchText()) {
            $data->{'searchText'} = $object->getSearchText();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getToDateTime()) {
            $data->{'toDateTime'} = $object->getToDateTime();
        }

        return $data;
    }
}
