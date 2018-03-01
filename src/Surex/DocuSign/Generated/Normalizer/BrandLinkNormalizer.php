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

class BrandLinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BrandLink' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BrandLink;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BrandLink();
        if (property_exists($data, 'linkText')) {
            $object->setLinkText($data->{'linkText'});
        }
        if (property_exists($data, 'linkType')) {
            $object->setLinkType($data->{'linkType'});
        }
        if (property_exists($data, 'showLink')) {
            $object->setShowLink($data->{'showLink'});
        }
        if (property_exists($data, 'urlOrMailTo')) {
            $object->setUrlOrMailTo($data->{'urlOrMailTo'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLinkText()) {
            $data->{'linkText'} = $object->getLinkText();
        }
        if (null !== $object->getLinkType()) {
            $data->{'linkType'} = $object->getLinkType();
        }
        if (null !== $object->getShowLink()) {
            $data->{'showLink'} = $object->getShowLink();
        }
        if (null !== $object->getUrlOrMailTo()) {
            $data->{'urlOrMailTo'} = $object->getUrlOrMailTo();
        }

        return $data;
    }
}
