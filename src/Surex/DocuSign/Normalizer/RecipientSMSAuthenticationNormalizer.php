<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientSMSAuthenticationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientSMSAuthentication' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientSMSAuthentication) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientSMSAuthentication();
        if (property_exists($data, 'senderProvidedNumbers')) {
            $values = [];
            foreach ($data->{'senderProvidedNumbers'} as $value) {
                $values[] = $value;
            }
            $object->setSenderProvidedNumbers($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSenderProvidedNumbers()) {
            $values = [];
            foreach ($object->getSenderProvidedNumbers() as $value) {
                $values[] = $value;
            }
            $data->{'senderProvidedNumbers'} = $values;
        }

        return $data;
    }
}
