<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CloudStorageProviderNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CloudStorageProvider' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CloudStorageProvider) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CloudStorageProvider();
        if (property_exists($data, 'authenticationUrl')) {
            $object->setAuthenticationUrl($data->{'authenticationUrl'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'redirectUrl')) {
            $object->setRedirectUrl($data->{'redirectUrl'});
        }
        if (property_exists($data, 'service')) {
            $object->setService($data->{'service'});
        }
        if (property_exists($data, 'serviceId')) {
            $object->setServiceId($data->{'serviceId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAuthenticationUrl()) {
            $data->{'authenticationUrl'} = $object->getAuthenticationUrl();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getRedirectUrl()) {
            $data->{'redirectUrl'} = $object->getRedirectUrl();
        }
        if (null !== $object->getService()) {
            $data->{'service'} = $object->getService();
        }
        if (null !== $object->getServiceId()) {
            $data->{'serviceId'} = $object->getServiceId();
        }

        return $data;
    }
}
