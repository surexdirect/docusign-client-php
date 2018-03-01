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

class BillingChargeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingCharge' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingCharge;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingCharge();
        if (property_exists($data, 'allowedQuantity')) {
            $object->setAllowedQuantity($data->{'allowedQuantity'});
        }
        if (property_exists($data, 'blocked')) {
            $object->setBlocked($data->{'blocked'});
        }
        if (property_exists($data, 'chargeName')) {
            $object->setChargeName($data->{'chargeName'});
        }
        if (property_exists($data, 'chargeType')) {
            $object->setChargeType($data->{'chargeType'});
        }
        if (property_exists($data, 'chargeUnitOfMeasure')) {
            $object->setChargeUnitOfMeasure($data->{'chargeUnitOfMeasure'});
        }
        if (property_exists($data, 'discounts')) {
            $values = [];
            foreach ($data->{'discounts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\BillingDiscount', 'json', $context);
            }
            $object->setDiscounts($values);
        }
        if (property_exists($data, 'firstEffectiveDate')) {
            $object->setFirstEffectiveDate($data->{'firstEffectiveDate'});
        }
        if (property_exists($data, 'includedQuantity')) {
            $object->setIncludedQuantity($data->{'includedQuantity'});
        }
        if (property_exists($data, 'incrementalQuantity')) {
            $object->setIncrementalQuantity($data->{'incrementalQuantity'});
        }
        if (property_exists($data, 'lastEffectiveDate')) {
            $object->setLastEffectiveDate($data->{'lastEffectiveDate'});
        }
        if (property_exists($data, 'prices')) {
            $values_1 = [];
            foreach ($data->{'prices'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\BillingPrice', 'json', $context);
            }
            $object->setPrices($values_1);
        }
        if (property_exists($data, 'unitPrice')) {
            $object->setUnitPrice($data->{'unitPrice'});
        }
        if (property_exists($data, 'usedQuantity')) {
            $object->setUsedQuantity($data->{'usedQuantity'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowedQuantity()) {
            $data->{'allowedQuantity'} = $object->getAllowedQuantity();
        }
        if (null !== $object->getBlocked()) {
            $data->{'blocked'} = $object->getBlocked();
        }
        if (null !== $object->getChargeName()) {
            $data->{'chargeName'} = $object->getChargeName();
        }
        if (null !== $object->getChargeType()) {
            $data->{'chargeType'} = $object->getChargeType();
        }
        if (null !== $object->getChargeUnitOfMeasure()) {
            $data->{'chargeUnitOfMeasure'} = $object->getChargeUnitOfMeasure();
        }
        if (null !== $object->getDiscounts()) {
            $values = [];
            foreach ($object->getDiscounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'discounts'} = $values;
        }
        if (null !== $object->getFirstEffectiveDate()) {
            $data->{'firstEffectiveDate'} = $object->getFirstEffectiveDate();
        }
        if (null !== $object->getIncludedQuantity()) {
            $data->{'includedQuantity'} = $object->getIncludedQuantity();
        }
        if (null !== $object->getIncrementalQuantity()) {
            $data->{'incrementalQuantity'} = $object->getIncrementalQuantity();
        }
        if (null !== $object->getLastEffectiveDate()) {
            $data->{'lastEffectiveDate'} = $object->getLastEffectiveDate();
        }
        if (null !== $object->getPrices()) {
            $values_1 = [];
            foreach ($object->getPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'prices'} = $values_1;
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unitPrice'} = $object->getUnitPrice();
        }
        if (null !== $object->getUsedQuantity()) {
            $data->{'usedQuantity'} = $object->getUsedQuantity();
        }

        return $data;
    }
}
