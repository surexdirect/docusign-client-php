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

class FeatureSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\FeatureSet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\FeatureSet;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\FeatureSet();
        if (property_exists($data, 'currencyFeatureSetPrices')) {
            $values = [];
            foreach ($data->{'currencyFeatureSetPrices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\CurrencyFeatureSetPrice', 'json', $context);
            }
            $object->setCurrencyFeatureSetPrices($values);
        }
        if (property_exists($data, 'envelopeFee')) {
            $object->setEnvelopeFee($data->{'envelopeFee'});
        }
        if (property_exists($data, 'featureSetId')) {
            $object->setFeatureSetId($data->{'featureSetId'});
        }
        if (property_exists($data, 'fixedFee')) {
            $object->setFixedFee($data->{'fixedFee'});
        }
        if (property_exists($data, 'is21CFRPart11')) {
            $object->setIs21CFRPart11($data->{'is21CFRPart11'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'isEnabled')) {
            $object->setIsEnabled($data->{'isEnabled'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'seatFee')) {
            $object->setSeatFee($data->{'seatFee'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrencyFeatureSetPrices()) {
            $values = [];
            foreach ($object->getCurrencyFeatureSetPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'currencyFeatureSetPrices'} = $values;
        }
        if (null !== $object->getEnvelopeFee()) {
            $data->{'envelopeFee'} = $object->getEnvelopeFee();
        }
        if (null !== $object->getFeatureSetId()) {
            $data->{'featureSetId'} = $object->getFeatureSetId();
        }
        if (null !== $object->getFixedFee()) {
            $data->{'fixedFee'} = $object->getFixedFee();
        }
        if (null !== $object->getIs21CFRPart11()) {
            $data->{'is21CFRPart11'} = $object->getIs21CFRPart11();
        }
        if (null !== $object->getIsActive()) {
            $data->{'isActive'} = $object->getIsActive();
        }
        if (null !== $object->getIsEnabled()) {
            $data->{'isEnabled'} = $object->getIsEnabled();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getSeatFee()) {
            $data->{'seatFee'} = $object->getSeatFee();
        }

        return $data;
    }
}
