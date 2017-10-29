<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AuthenticationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Authentication' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Authentication) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Authentication();
        if (property_exists($data, 'apiPassword')) {
            $object->setApiPassword($data->{'apiPassword'});
        }
        if (property_exists($data, 'loginAccounts')) {
            $values = [];
            foreach ($data->{'loginAccounts'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\LoginAccount', 'raw', $context);
            }
            $object->setLoginAccounts($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApiPassword()) {
            $data->{'apiPassword'} = $object->getApiPassword();
        }
        if (null !== $object->getLoginAccounts()) {
            $values = [];
            foreach ($object->getLoginAccounts() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'loginAccounts'} = $values;
        }

        return $data;
    }
}
