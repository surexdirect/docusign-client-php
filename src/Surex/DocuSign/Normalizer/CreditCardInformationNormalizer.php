<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CreditCardInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CreditCardInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CreditCardInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CreditCardInformation();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'Surex\\DocuSign\\Model\\AddressInformation', 'raw', $context));
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
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
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
