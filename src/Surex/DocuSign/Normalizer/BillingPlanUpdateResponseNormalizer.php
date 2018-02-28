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

class BillingPlanUpdateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingPlanUpdateResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingPlanUpdateResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingPlanUpdateResponse();
        if (property_exists($data, 'accountPaymentMethod')) {
            $object->setAccountPaymentMethod($data->{'accountPaymentMethod'});
        }
        if (property_exists($data, 'billingPlanPreview')) {
            $object->setBillingPlanPreview($this->denormalizer->denormalize($data->{'billingPlanPreview'}, 'Surex\\DocuSign\\Model\\BillingPlanPreview', 'json', $context));
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
            $data->{'billingPlanPreview'} = $this->normalizer->normalize($object->getBillingPlanPreview(), 'json', $context);
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
