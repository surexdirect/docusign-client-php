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

class ExternalDocServiceErrorDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ExternalDocServiceErrorDetails' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ExternalDocServiceErrorDetails;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ExternalDocServiceErrorDetails();
        if (property_exists($data, 'authenticationUrl')) {
            $object->setAuthenticationUrl($data->{'authenticationUrl'});
        }
        if (property_exists($data, 'errorCode')) {
            $object->setErrorCode($data->{'errorCode'});
        }
        if (property_exists($data, 'message')) {
            $object->setMessage($data->{'message'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAuthenticationUrl()) {
            $data->{'authenticationUrl'} = $object->getAuthenticationUrl();
        }
        if (null !== $object->getErrorCode()) {
            $data->{'errorCode'} = $object->getErrorCode();
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $object->getMessage();
        }

        return $data;
    }
}
