<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecipientPhoneAuthenticationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\RecipientPhoneAuthentication' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\RecipientPhoneAuthentication;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\RecipientPhoneAuthentication();
        if (property_exists($data, 'recipMayProvideNumber')) {
            $object->setRecipMayProvideNumber($data->{'recipMayProvideNumber'});
        }
        if (property_exists($data, 'recordVoicePrint')) {
            $object->setRecordVoicePrint($data->{'recordVoicePrint'});
        }
        if (property_exists($data, 'senderProvidedNumbers')) {
            $values = [];
            foreach ($data->{'senderProvidedNumbers'} as $value) {
                $values[] = $value;
            }
            $object->setSenderProvidedNumbers($values);
        }
        if (property_exists($data, 'validateRecipProvidedNumber')) {
            $object->setValidateRecipProvidedNumber($data->{'validateRecipProvidedNumber'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRecipMayProvideNumber()) {
            $data->{'recipMayProvideNumber'} = $object->getRecipMayProvideNumber();
        }
        if (null !== $object->getRecordVoicePrint()) {
            $data->{'recordVoicePrint'} = $object->getRecordVoicePrint();
        }
        if (null !== $object->getSenderProvidedNumbers()) {
            $values = [];
            foreach ($object->getSenderProvidedNumbers() as $value) {
                $values[] = $value;
            }
            $data->{'senderProvidedNumbers'} = $values;
        }
        if (null !== $object->getValidateRecipProvidedNumber()) {
            $data->{'validateRecipProvidedNumber'} = $object->getValidateRecipProvidedNumber();
        }

        return $data;
    }
}
