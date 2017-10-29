<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BrandLinkNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BrandLink' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BrandLink) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BrandLink();
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
