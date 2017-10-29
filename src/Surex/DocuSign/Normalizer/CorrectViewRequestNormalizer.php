<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CorrectViewRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CorrectViewRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CorrectViewRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CorrectViewRequest();
        if (property_exists($data, 'returnUrl')) {
            $object->setReturnUrl($data->{'returnUrl'});
        }
        if (property_exists($data, 'suppressNavigation')) {
            $object->setSuppressNavigation($data->{'suppressNavigation'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReturnUrl()) {
            $data->{'returnUrl'} = $object->getReturnUrl();
        }
        if (null !== $object->getSuppressNavigation()) {
            $data->{'suppressNavigation'} = $object->getSuppressNavigation();
        }

        return $data;
    }
}
