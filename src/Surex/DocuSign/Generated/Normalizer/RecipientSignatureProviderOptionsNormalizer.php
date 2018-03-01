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

class RecipientSignatureProviderOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\RecipientSignatureProviderOptions' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\RecipientSignatureProviderOptions;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\RecipientSignatureProviderOptions();
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
