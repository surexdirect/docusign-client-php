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

class BillingPlanInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingPlanInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingPlanInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingPlanInformation();
        if (property_exists($data, 'appStoreReceipt')) {
            $object->setAppStoreReceipt($this->denormalizer->denormalize($data->{'appStoreReceipt'}, 'Surex\\DocuSign\\Model\\AppStoreReceipt', 'json', $context));
        }
        if (property_exists($data, 'billingAddress')) {
            $object->setBillingAddress($this->denormalizer->denormalize($data->{'billingAddress'}, 'Surex\\DocuSign\\Model\\AccountAddress', 'json', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->denormalizer->denormalize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Model\\CreditCardInformation', 'json', $context));
        }
        if (property_exists($data, 'downgradeReason')) {
            $object->setDowngradeReason($data->{'downgradeReason'});
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
        if (property_exists($data, 'paymentProcessorInformation')) {
            $object->setPaymentProcessorInformation($this->denormalizer->denormalize($data->{'paymentProcessorInformation'}, 'Surex\\DocuSign\\Model\\PaymentProcessorInformation', 'json', $context));
        }
        if (property_exists($data, 'planInformation')) {
            $object->setPlanInformation($this->denormalizer->denormalize($data->{'planInformation'}, 'Surex\\DocuSign\\Model\\PlanInformation', 'json', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->denormalizer->denormalize($data->{'referralInformation'}, 'Surex\\DocuSign\\Model\\ReferralInformation', 'json', $context));
        }
        if (property_exists($data, 'renewalStatus')) {
            $object->setRenewalStatus($data->{'renewalStatus'});
        }
        if (property_exists($data, 'saleDiscountAmount')) {
            $object->setSaleDiscountAmount($data->{'saleDiscountAmount'});
        }
        if (property_exists($data, 'saleDiscountFixedAmount')) {
            $object->setSaleDiscountFixedAmount($data->{'saleDiscountFixedAmount'});
        }
        if (property_exists($data, 'saleDiscountPercent')) {
            $object->setSaleDiscountPercent($data->{'saleDiscountPercent'});
        }
        if (property_exists($data, 'saleDiscountPeriods')) {
            $object->setSaleDiscountPeriods($data->{'saleDiscountPeriods'});
        }
        if (property_exists($data, 'saleDiscountSeatPriceOverride')) {
            $object->setSaleDiscountSeatPriceOverride($data->{'saleDiscountSeatPriceOverride'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAppStoreReceipt()) {
            $data->{'appStoreReceipt'} = $this->normalizer->normalize($object->getAppStoreReceipt(), 'json', $context);
        }
        if (null !== $object->getBillingAddress()) {
            $data->{'billingAddress'} = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->normalizer->normalize($object->getCreditCardInformation(), 'json', $context);
        }
        if (null !== $object->getDowngradeReason()) {
            $data->{'downgradeReason'} = $object->getDowngradeReason();
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
        if (null !== $object->getPaymentProcessorInformation()) {
            $data->{'paymentProcessorInformation'} = $this->normalizer->normalize($object->getPaymentProcessorInformation(), 'json', $context);
        }
        if (null !== $object->getPlanInformation()) {
            $data->{'planInformation'} = $this->normalizer->normalize($object->getPlanInformation(), 'json', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->normalizer->normalize($object->getReferralInformation(), 'json', $context);
        }
        if (null !== $object->getRenewalStatus()) {
            $data->{'renewalStatus'} = $object->getRenewalStatus();
        }
        if (null !== $object->getSaleDiscountAmount()) {
            $data->{'saleDiscountAmount'} = $object->getSaleDiscountAmount();
        }
        if (null !== $object->getSaleDiscountFixedAmount()) {
            $data->{'saleDiscountFixedAmount'} = $object->getSaleDiscountFixedAmount();
        }
        if (null !== $object->getSaleDiscountPercent()) {
            $data->{'saleDiscountPercent'} = $object->getSaleDiscountPercent();
        }
        if (null !== $object->getSaleDiscountPeriods()) {
            $data->{'saleDiscountPeriods'} = $object->getSaleDiscountPeriods();
        }
        if (null !== $object->getSaleDiscountSeatPriceOverride()) {
            $data->{'saleDiscountSeatPriceOverride'} = $object->getSaleDiscountSeatPriceOverride();
        }

        return $data;
    }
}
