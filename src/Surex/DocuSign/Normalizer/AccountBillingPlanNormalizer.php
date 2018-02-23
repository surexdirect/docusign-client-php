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

class AccountBillingPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountBillingPlan' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountBillingPlan;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountBillingPlan();
        if (property_exists($data, 'addOns')) {
            $values = [];
            foreach ($data->{'addOns'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\AddOn', 'json', $context);
            }
            $object->setAddOns($values);
        }
        if (property_exists($data, 'canCancelRenewal')) {
            $object->setCanCancelRenewal($data->{'canCancelRenewal'});
        }
        if (property_exists($data, 'canUpgrade')) {
            $object->setCanUpgrade($data->{'canUpgrade'});
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'enableSupport')) {
            $object->setEnableSupport($data->{'enableSupport'});
        }
        if (property_exists($data, 'includedSeats')) {
            $object->setIncludedSeats($data->{'includedSeats'});
        }
        if (property_exists($data, 'incrementalSeats')) {
            $object->setIncrementalSeats($data->{'incrementalSeats'});
        }
        if (property_exists($data, 'isDowngrade')) {
            $object->setIsDowngrade($data->{'isDowngrade'});
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
            $values_1 = [];
            foreach ($data->{'planFeatureSets'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\FeatureSet', 'json', $context);
            }
            $object->setPlanFeatureSets($values_1);
        }
        if (property_exists($data, 'planId')) {
            $object->setPlanId($data->{'planId'});
        }
        if (property_exists($data, 'planName')) {
            $object->setPlanName($data->{'planName'});
        }
        if (property_exists($data, 'renewalStatus')) {
            $object->setRenewalStatus($data->{'renewalStatus'});
        }
        if (property_exists($data, 'seatDiscounts')) {
            $values_2 = [];
            foreach ($data->{'seatDiscounts'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Model\\SeatDiscount', 'json', $context);
            }
            $object->setSeatDiscounts($values_2);
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
        if (null !== $object->getAddOns()) {
            $values = [];
            foreach ($object->getAddOns() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'addOns'} = $values;
        }
        if (null !== $object->getCanCancelRenewal()) {
            $data->{'canCancelRenewal'} = $object->getCanCancelRenewal();
        }
        if (null !== $object->getCanUpgrade()) {
            $data->{'canUpgrade'} = $object->getCanUpgrade();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getEnableSupport()) {
            $data->{'enableSupport'} = $object->getEnableSupport();
        }
        if (null !== $object->getIncludedSeats()) {
            $data->{'includedSeats'} = $object->getIncludedSeats();
        }
        if (null !== $object->getIncrementalSeats()) {
            $data->{'incrementalSeats'} = $object->getIncrementalSeats();
        }
        if (null !== $object->getIsDowngrade()) {
            $data->{'isDowngrade'} = $object->getIsDowngrade();
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
            $values_1 = [];
            foreach ($object->getPlanFeatureSets() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'planFeatureSets'} = $values_1;
        }
        if (null !== $object->getPlanId()) {
            $data->{'planId'} = $object->getPlanId();
        }
        if (null !== $object->getPlanName()) {
            $data->{'planName'} = $object->getPlanName();
        }
        if (null !== $object->getRenewalStatus()) {
            $data->{'renewalStatus'} = $object->getRenewalStatus();
        }
        if (null !== $object->getSeatDiscounts()) {
            $values_2 = [];
            foreach ($object->getSeatDiscounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'seatDiscounts'} = $values_2;
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
