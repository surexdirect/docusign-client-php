<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BrandResourceUrlsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BrandResourceUrls' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BrandResourceUrls;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
