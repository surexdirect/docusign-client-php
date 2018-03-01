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

class OauthAccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\OauthAccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\OauthAccess;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\OauthAccess();
        if (property_exists($data, 'access_token')) {
            $object->setAccessToken($data->{'access_token'});
        }
        if (property_exists($data, 'data')) {
            $values = [];
            foreach ($data->{'data'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\NameValue', 'json', $context);
            }
            $object->setData($values);
        }
        if (property_exists($data, 'expires_in')) {
            $object->setExpiresIn($data->{'expires_in'});
        }
        if (property_exists($data, 'refresh_token')) {
            $object->setRefreshToken($data->{'refresh_token'});
        }
        if (property_exists($data, 'scope')) {
            $object->setScope($data->{'scope'});
        }
        if (property_exists($data, 'token_type')) {
            $object->setTokenType($data->{'token_type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessToken()) {
            $data->{'access_token'} = $object->getAccessToken();
        }
        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'data'} = $values;
        }
        if (null !== $object->getExpiresIn()) {
            $data->{'expires_in'} = $object->getExpiresIn();
        }
        if (null !== $object->getRefreshToken()) {
            $data->{'refresh_token'} = $object->getRefreshToken();
        }
        if (null !== $object->getScope()) {
            $data->{'scope'} = $object->getScope();
        }
        if (null !== $object->getTokenType()) {
            $data->{'token_type'} = $object->getTokenType();
        }

        return $data;
    }
}
