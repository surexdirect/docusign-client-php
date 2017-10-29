<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientSignatureProviderOptionsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientSignatureProviderOptions' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientSignatureProviderOptions) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientSignatureProviderOptions();
        if (property_exists($data, 'cpfNumber')) {
            $object->setCpfNumber($data->{'cpfNumber'});
        }
        if (property_exists($data, 'oneTimePassword')) {
            $object->setOneTimePassword($data->{'oneTimePassword'});
        }
        if (property_exists($data, 'signerRole')) {
            $object->setSignerRole($data->{'signerRole'});
        }
        if (property_exists($data, 'sms')) {
            $object->setSms($data->{'sms'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCpfNumber()) {
            $data->{'cpfNumber'} = $object->getCpfNumber();
        }
        if (null !== $object->getOneTimePassword()) {
            $data->{'oneTimePassword'} = $object->getOneTimePassword();
        }
        if (null !== $object->getSignerRole()) {
            $data->{'signerRole'} = $object->getSignerRole();
        }
        if (null !== $object->getSms()) {
            $data->{'sms'} = $object->getSms();
        }

        return $data;
    }
}
