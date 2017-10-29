<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ExternalDocServiceErrorDetailsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ExternalDocServiceErrorDetails' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ExternalDocServiceErrorDetails) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
