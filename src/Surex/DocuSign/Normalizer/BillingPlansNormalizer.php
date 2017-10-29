<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlansNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlans' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlans) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlans();
        if (property_exists($data, 'billingAddress')) {
            $object->setBillingAddress($this->serializer->deserialize($data->{'billingAddress'}, 'Surex\\DocuSign\\Model\\AccountAddress', 'raw', $context));
        }
        if (property_exists($data, 'billingAddressIsCreditCardAddress')) {
            $object->setBillingAddressIsCreditCardAddress($data->{'billingAddressIsCreditCardAddress'});
        }
        if (property_exists($data, 'billingPlan')) {
            $object->setBillingPlan($this->serializer->deserialize($data->{'billingPlan'}, 'Surex\\DocuSign\\Model\\AccountBillingPlan', 'raw', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->serializer->deserialize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Model\\CreditCardInformation', 'raw', $context));
        }
        if (property_exists($data, 'paymentProcessorInformation')) {
            $object->setPaymentProcessorInformation($this->serializer->deserialize($data->{'paymentProcessorInformation'}, 'Surex\\DocuSign\\Model\\PaymentProcessorInformation', 'raw', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->serializer->deserialize($data->{'referralInformation'}, 'Surex\\DocuSign\\Model\\ReferralInformation', 'raw', $context));
        }
        if (property_exists($data, 'successorPlans')) {
            $values = [];
            foreach ($data->{'successorPlans'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BillingPlan', 'raw', $context);
            }
            $object->setSuccessorPlans($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingAddress()) {
            $data->{'billingAddress'} = $this->serializer->serialize($object->getBillingAddress(), 'raw', $context);
        }
        if (null !== $object->getBillingAddressIsCreditCardAddress()) {
            $data->{'billingAddressIsCreditCardAddress'} = $object->getBillingAddressIsCreditCardAddress();
        }
        if (null !== $object->getBillingPlan()) {
            $data->{'billingPlan'} = $this->serializer->serialize($object->getBillingPlan(), 'raw', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->serializer->serialize($object->getCreditCardInformation(), 'raw', $context);
        }
        if (null !== $object->getPaymentProcessorInformation()) {
            $data->{'paymentProcessorInformation'} = $this->serializer->serialize($object->getPaymentProcessorInformation(), 'raw', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->serializer->serialize($object->getReferralInformation(), 'raw', $context);
        }
        if (null !== $object->getSuccessorPlans()) {
            $values = [];
            foreach ($object->getSuccessorPlans() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'successorPlans'} = $values;
        }

        return $data;
    }
}
