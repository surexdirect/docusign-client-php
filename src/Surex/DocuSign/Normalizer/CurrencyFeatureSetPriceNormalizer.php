<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CurrencyFeatureSetPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CurrencyFeatureSetPrice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CurrencyFeatureSetPrice;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
