<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class OauthAccessNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\OauthAccess' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\OauthAccess) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\OauthAccess();
        if (property_exists($data, 'access_token')) {
            $object->setAccessToken($data->{'access_token'});
        }
        if (property_exists($data, 'data')) {
            $values = [];
            foreach ($data->{'data'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
