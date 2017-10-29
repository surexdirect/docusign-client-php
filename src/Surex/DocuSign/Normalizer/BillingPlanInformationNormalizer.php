<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlanInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlanInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlanInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlanInformation();
        if (property_exists($data, 'appStoreReceipt')) {
            $object->setAppStoreReceipt($this->serializer->deserialize($data->{'appStoreReceipt'}, 'Surex\\DocuSign\\Model\\AppStoreReceipt', 'raw', $context));
        }
        if (property_exists($data, 'billingAddress')) {
            $object->setBillingAddress($this->serializer->deserialize($data->{'billingAddress'}, 'Surex\\DocuSign\\Model\\AccountAddress', 'raw', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->serializer->deserialize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Model\\CreditCardInformation', 'raw', $context));
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
            $object->setPaymentProcessorInformation($this->serializer->deserialize($data->{'paymentProcessorInformation'}, 'Surex\\DocuSign\\Model\\PaymentProcessorInformation', 'raw', $context));
        }
        if (property_exists($data, 'planInformation')) {
            $object->setPlanInformation($this->serializer->deserialize($data->{'planInformation'}, 'Surex\\DocuSign\\Model\\PlanInformation', 'raw', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->serializer->deserialize($data->{'referralInformation'}, 'Surex\\DocuSign\\Model\\ReferralInformation', 'raw', $context));
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
            $data->{'appStoreReceipt'} = $this->serializer->serialize($object->getAppStoreReceipt(), 'raw', $context);
        }
        if (null !== $object->getBillingAddress()) {
            $data->{'billingAddress'} = $this->serializer->serialize($object->getBillingAddress(), 'raw', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->serializer->serialize($object->getCreditCardInformation(), 'raw', $context);
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
            $data->{'paymentProcessorInformation'} = $this->serializer->serialize($object->getPaymentProcessorInformation(), 'raw', $context);
        }
        if (null !== $object->getPlanInformation()) {
            $data->{'planInformation'} = $this->serializer->serialize($object->getPlanInformation(), 'raw', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->serializer->serialize($object->getReferralInformation(), 'raw', $context);
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
