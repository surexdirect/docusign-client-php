<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BrandResourceUrlsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BrandResourceUrls' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BrandResourceUrls) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BrandResourceUrls();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'sending')) {
            $object->setSending($data->{'sending'});
        }
        if (property_exists($data, 'signing')) {
            $object->setSigning($data->{'signing'});
        }
        if (property_exists($data, 'signingCaptive')) {
            $object->setSigningCaptive($data->{'signingCaptive'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getSending()) {
            $data->{'sending'} = $object->getSending();
        }
        if (null !== $object->getSigning()) {
            $data->{'signing'} = $object->getSigning();
        }
        if (null !== $object->getSigningCaptive()) {
            $data->{'signingCaptive'} = $object->getSigningCaptive();
        }

        return $data;
    }
}
