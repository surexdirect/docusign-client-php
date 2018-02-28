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

class CurrencyPlanPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CurrencyPlanPrice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CurrencyPlanPrice;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
            $object->setSupportedCardTypes($this->denormalizer->denormalize($data->{'supportedCardTypes'}, 'Surex\\DocuSign\\Model\\CreditCardTypes', 'json', $context));
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
            $data->{'supportedCardTypes'} = $this->normalizer->normalize($object->getSupportedCardTypes(), 'json', $context);
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
