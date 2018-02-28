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

class CloudStorageProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CloudStorageProvider' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CloudStorageProvider;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\CloudStorageProvider();
        if (property_exists($data, 'authenticationUrl')) {
            $object->setAuthenticationUrl($data->{'authenticationUrl'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
