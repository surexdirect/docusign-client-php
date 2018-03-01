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

class BillingPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingPlan' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingPlan;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingPlan();
        if (property_exists($data, 'appStoreProducts')) {
            $values = [];
            foreach ($data->{'appStoreProducts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\AppStoreProduct', 'json', $context);
            }
            $object->setAppStoreProducts($values);
        }
        if (property_exists($data, 'currencyPlanPrices')) {
            $values_1 = [];
            foreach ($data->{'currencyPlanPrices'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\CurrencyPlanPrice', 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Generated\\Model\\FeatureSet', 'json', $context);
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
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Surex\\DocuSign\\Generated\\Model\\SeatDiscount', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'appStoreProducts'} = $values;
        }
        if (null !== $object->getCurrencyPlanPrices()) {
            $values_1 = [];
            foreach ($object->getCurrencyPlanPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
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
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
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
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
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
