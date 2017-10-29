<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlanUpdateResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlanUpdateResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlanUpdateResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlanUpdateResponse();
        if (property_exists($data, 'accountPaymentMethod')) {
            $object->setAccountPaymentMethod($data->{'accountPaymentMethod'});
        }
        if (property_exists($data, 'billingPlanPreview')) {
            $object->setBillingPlanPreview($this->serializer->deserialize($data->{'billingPlanPreview'}, 'Surex\\DocuSign\\Model\\BillingPlanPreview', 'raw', $context));
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'includedSeats')) {
            $object->setIncludedSeats($data->{'includedSeats'});
        }
        if (property_exists($data, 'paymentCycle')) {
            $object->setPaymentCycle($data->{'paymentCycle'});
        }
        if (property_exists($data, 'paymentMethod')) {
            $object->setPaymentMethod($data->{'paymentMethod'});
        }
        if (property_exists($data, 'planId')) {
            $object->setPlanId($data->{'planId'});
        }
        if (property_exists($data, 'planName')) {
            $object->setPlanName($data->{'planName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountPaymentMethod()) {
            $data->{'accountPaymentMethod'} = $object->getAccountPaymentMethod();
        }
        if (null !== $object->getBillingPlanPreview()) {
            $data->{'billingPlanPreview'} = $this->serializer->serialize($object->getBillingPlanPreview(), 'raw', $context);
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getIncludedSeats()) {
            $data->{'includedSeats'} = $object->getIncludedSeats();
        }
        if (null !== $object->getPaymentCycle()) {
            $data->{'paymentCycle'} = $object->getPaymentCycle();
        }
        if (null !== $object->getPaymentMethod()) {
            $data->{'paymentMethod'} = $object->getPaymentMethod();
        }
        if (null !== $object->getPlanId()) {
            $data->{'planId'} = $object->getPlanId();
        }
        if (null !== $object->getPlanName()) {
            $data->{'planName'} = $object->getPlanName();
        }

        return $data;
    }
}
