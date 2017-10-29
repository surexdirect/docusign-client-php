<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingChargeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingCharge' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingCharge) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingCharge();
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
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BillingDiscount', 'raw', $context);
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
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\BillingPrice', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
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
