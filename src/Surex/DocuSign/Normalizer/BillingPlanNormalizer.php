<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlanNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlan' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlan) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlan();
        if (property_exists($data, 'appStoreProducts')) {
            $values = [];
            foreach ($data->{'appStoreProducts'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\AppStoreProduct', 'raw', $context);
            }
            $object->setAppStoreProducts($values);
        }
        if (property_exists($data, 'currencyPlanPrices')) {
            $values_1 = [];
            foreach ($data->{'currencyPlanPrices'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\CurrencyPlanPrice', 'raw', $context);
            }
            $object->setCurrencyPlanPrices($values_1);
        }
        if (property_exists($data, 'enableSupport')) {
            $object->setEnableSupport($data->{'enableSupport'});
        }
        if (property_exists($data, 'includedSeats')) {
            $object->setIncludedSeats($data->{'includedSeats'});
        }
        if (property_exists($data, 'otherDiscountPercent')) {
            $object->setOtherDiscountPercent($data->{'otherDiscountPercent'});
        }
        if (property_exists($data, 'paymentCycle')) {
            $object->setPaymentCycle($data->{'paymentCycle'});
        }
        if (property_exists($data, 'paymentMethod')) {
            $object->setPaymentMethod($data->{'paymentMethod'});
        }
        if (property_exists($data, 'perSeatPrice')) {
            $object->setPerSeatPrice($data->{'perSeatPrice'});
        }
        if (property_exists($data, 'planClassification')) {
            $object->setPlanClassification($data->{'planClassification'});
        }
        if (property_exists($data, 'planFeatureSets')) {
            $values_2 = [];
            foreach ($data->{'planFeatureSets'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\FeatureSet', 'raw', $context);
            }
            $object->setPlanFeatureSets($values_2);
        }
        if (property_exists($data, 'planId')) {
            $object->setPlanId($data->{'planId'});
        }
        if (property_exists($data, 'planName')) {
            $object->setPlanName($data->{'planName'});
        }
        if (property_exists($data, 'seatDiscounts')) {
            $values_3 = [];
            foreach ($data->{'seatDiscounts'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Surex\\DocuSign\\Model\\SeatDiscount', 'raw', $context);
            }
            $object->setSeatDiscounts($values_3);
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
        if (null !== $object->getAppStoreProducts()) {
            $values = [];
            foreach ($object->getAppStoreProducts() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'appStoreProducts'} = $values;
        }
        if (null !== $object->getCurrencyPlanPrices()) {
            $values_1 = [];
            foreach ($object->getCurrencyPlanPrices() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'currencyPlanPrices'} = $values_1;
        }
        if (null !== $object->getEnableSupport()) {
            $data->{'enableSupport'} = $object->getEnableSupport();
        }
        if (null !== $object->getIncludedSeats()) {
            $data->{'includedSeats'} = $object->getIncludedSeats();
        }
        if (null !== $object->getOtherDiscountPercent()) {
            $data->{'otherDiscountPercent'} = $object->getOtherDiscountPercent();
        }
        if (null !== $object->getPaymentCycle()) {
            $data->{'paymentCycle'} = $object->getPaymentCycle();
        }
        if (null !== $object->getPaymentMethod()) {
            $data->{'paymentMethod'} = $object->getPaymentMethod();
        }
        if (null !== $object->getPerSeatPrice()) {
            $data->{'perSeatPrice'} = $object->getPerSeatPrice();
        }
        if (null !== $object->getPlanClassification()) {
            $data->{'planClassification'} = $object->getPlanClassification();
        }
        if (null !== $object->getPlanFeatureSets()) {
            $values_2 = [];
            foreach ($object->getPlanFeatureSets() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'planFeatureSets'} = $values_2;
        }
        if (null !== $object->getPlanId()) {
            $data->{'planId'} = $object->getPlanId();
        }
        if (null !== $object->getPlanName()) {
            $data->{'planName'} = $object->getPlanName();
        }
        if (null !== $object->getSeatDiscounts()) {
            $values_3 = [];
            foreach ($object->getSeatDiscounts() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'seatDiscounts'} = $values_3;
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