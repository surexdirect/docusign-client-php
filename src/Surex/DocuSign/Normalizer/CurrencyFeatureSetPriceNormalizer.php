<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CurrencyFeatureSetPriceNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CurrencyFeatureSetPrice' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CurrencyFeatureSetPrice) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CurrencyFeatureSetPrice();
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'currencySymbol')) {
            $object->setCurrencySymbol($data->{'currencySymbol'});
        }
        if (property_exists($data, 'envelopeFee')) {
            $object->setEnvelopeFee($data->{'envelopeFee'});
        }
        if (property_exists($data, 'fixedFee')) {
            $object->setFixedFee($data->{'fixedFee'});
        }
        if (property_exists($data, 'seatFee')) {
            $object->setSeatFee($data->{'seatFee'});
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
        if (null !== $object->getEnvelopeFee()) {
            $data->{'envelopeFee'} = $object->getEnvelopeFee();
        }
        if (null !== $object->getFixedFee()) {
            $data->{'fixedFee'} = $object->getFixedFee();
        }
        if (null !== $object->getSeatFee()) {
            $data->{'seatFee'} = $object->getSeatFee();
        }

        return $data;
    }
}
