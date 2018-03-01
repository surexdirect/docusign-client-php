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

class BillingPlansNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingPlans' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingPlans;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingPlans();
        if (property_exists($data, 'billingAddress')) {
            $object->setBillingAddress($this->denormalizer->denormalize($data->{'billingAddress'}, 'Surex\\DocuSign\\Generated\\Model\\AccountAddress', 'json', $context));
        }
        if (property_exists($data, 'billingAddressIsCreditCardAddress')) {
            $object->setBillingAddressIsCreditCardAddress($data->{'billingAddressIsCreditCardAddress'});
        }
        if (property_exists($data, 'billingPlan')) {
            $object->setBillingPlan($this->denormalizer->denormalize($data->{'billingPlan'}, 'Surex\\DocuSign\\Generated\\Model\\AccountBillingPlan', 'json', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->denormalizer->denormalize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Generated\\Model\\CreditCardInformation', 'json', $context));
        }
        if (property_exists($data, 'paymentProcessorInformation')) {
            $object->setPaymentProcessorInformation($this->denormalizer->denormalize($data->{'paymentProcessorInformation'}, 'Surex\\DocuSign\\Generated\\Model\\PaymentProcessorInformation', 'json', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->denormalizer->denormalize($data->{'referralInformation'}, 'Surex\\DocuSign\\Generated\\Model\\ReferralInformation', 'json', $context));
        }
        if (property_exists($data, 'successorPlans')) {
            $values = [];
            foreach ($data->{'successorPlans'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\BillingPlan', 'json', $context);
            }
            $object->setSuccessorPlans($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingAddress()) {
            $data->{'billingAddress'} = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getBillingAddressIsCreditCardAddress()) {
            $data->{'billingAddressIsCreditCardAddress'} = $object->getBillingAddressIsCreditCardAddress();
        }
        if (null !== $object->getBillingPlan()) {
            $data->{'billingPlan'} = $this->normalizer->normalize($object->getBillingPlan(), 'json', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->normalizer->normalize($object->getCreditCardInformation(), 'json', $context);
        }
        if (null !== $object->getPaymentProcessorInformation()) {
            $data->{'paymentProcessorInformation'} = $this->normalizer->normalize($object->getPaymentProcessorInformation(), 'json', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->normalizer->normalize($object->getReferralInformation(), 'json', $context);
        }
        if (null !== $object->getSuccessorPlans()) {
            $values = [];
            foreach ($object->getSuccessorPlans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'successorPlans'} = $values;
        }

        return $data;
    }
}
