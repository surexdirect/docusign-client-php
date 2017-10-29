<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CurrencyPlanPriceNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CurrencyPlanPrice' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CurrencyPlanPrice) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CurrencyPlanPrice();
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'currencySymbol')) {
            $object->setCurrencySymbol($data->{'currencySymbol'});
        }
        if (property_exists($data, 'perSeatPrice')) {
            $object->setPerSeatPrice($data->{'perSeatPrice'});
        }
        if (property_exists($data, 'supportedCardTypes')) {
            $object->setSupportedCardTypes($this->serializer->deserialize($data->{'supportedCardTypes'}, 'Surex\\DocuSign\\Model\\CreditCardTypes', 'raw', $context));
        }
        if (property_exists($data, 'supportIncidentFee')) {
            $object->setSupportIncidentFee($data->{'supportIncidentFee'});
        }
        if (property_exists($data, 'supportPlanFee')) {
            $object->setSupportPlanFee($data->{'supportPlanFee'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCurrencySymbol()) {
            $data->{'currencySymbol'} = $object->getCurrencySymbol();
        }
        if (null !== $object->getPerSeatPrice()) {
            $data->{'perSeatPrice'} = $object->getPerSeatPrice();
        }
        if (null !== $object->getSupportedCardTypes()) {
            $data->{'supportedCardTypes'} = $this->serializer->serialize($object->getSupportedCardTypes(), 'raw', $context);
        }
        if (null !== $object->getSupportIncidentFee()) {
            $data->{'supportIncidentFee'} = $object->getSupportIncidentFee();
        }
        if (null !== $object->getSupportPlanFee()) {
            $data->{'supportPlanFee'} = $object->getSupportPlanFee();
        }

        return $data;
    }
}
