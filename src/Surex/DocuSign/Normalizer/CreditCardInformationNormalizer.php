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

class CreditCardInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CreditCardInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CreditCardInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\CreditCardInformation();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Surex\\DocuSign\\Model\\AddressInformation', 'json', $context));
        }
        if (property_exists($data, 'cardNumber')) {
            $object->setCardNumber($data->{'cardNumber'});
        }
        if (property_exists($data, 'cardType')) {
            $object->setCardType($data->{'cardType'});
        }
        if (property_exists($data, 'expirationMonth')) {
            $object->setExpirationMonth($data->{'expirationMonth'});
        }
        if (property_exists($data, 'expirationYear')) {
            $object->setExpirationYear($data->{'expirationYear'});
        }
        if (property_exists($data, 'nameOnCard')) {
            $object->setNameOnCard($data->{'nameOnCard'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getCardNumber()) {
            $data->{'cardNumber'} = $object->getCardNumber();
        }
        if (null !== $object->getCardType()) {
            $data->{'cardType'} = $object->getCardType();
        }
        if (null !== $object->getExpirationMonth()) {
            $data->{'expirationMonth'} = $object->getExpirationMonth();
        }
        if (null !== $object->getExpirationYear()) {
            $data->{'expirationYear'} = $object->getExpirationYear();
        }
        if (null !== $object->getNameOnCard()) {
            $data->{'nameOnCard'} = $object->getNameOnCard();
        }

        return $data;
    }
}
