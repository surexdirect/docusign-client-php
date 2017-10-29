<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class NewAccountDefinitionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\NewAccountDefinition' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\NewAccountDefinition) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\NewAccountDefinition();
        if (property_exists($data, 'accountName')) {
            $object->setAccountName($data->{'accountName'});
        }
        if (property_exists($data, 'accountSettings')) {
            $values = [];
            foreach ($data->{'accountSettings'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setAccountSettings($values);
        }
        if (property_exists($data, 'addressInformation')) {
            $object->setAddressInformation($this->serializer->deserialize($data->{'addressInformation'}, 'Surex\\DocuSign\\Model\\AccountAddress', 'raw', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->serializer->deserialize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Model\\CreditCardInformation', 'raw', $context));
        }
        if (property_exists($data, 'distributorCode')) {
            $object->setDistributorCode($data->{'distributorCode'});
        }
        if (property_exists($data, 'distributorPassword')) {
            $object->setDistributorPassword($data->{'distributorPassword'});
        }
        if (property_exists($data, 'initialUser')) {
            $object->setInitialUser($this->serializer->deserialize($data->{'initialUser'}, 'Surex\\DocuSign\\Model\\Users', 'raw', $context));
        }
        if (property_exists($data, 'PaymentProcessorInformation')) {
            $object->setPaymentProcessorInformation($this->serializer->deserialize($data->{'PaymentProcessorInformation'}, 'Surex\\DocuSign\\Model\\PaymentProcessorInformation', 'raw', $context));
        }
        if (property_exists($data, 'planInformation')) {
            $object->setPlanInformation($this->serializer->deserialize($data->{'planInformation'}, 'Surex\\DocuSign\\Model\\PlanInformation', 'raw', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->serializer->deserialize($data->{'referralInformation'}, 'Surex\\DocuSign\\Model\\ReferralInformation', 'raw', $context));
        }
        if (property_exists($data, 'socialAccountInformation')) {
            $object->setSocialAccountInformation($this->serializer->deserialize($data->{'socialAccountInformation'}, 'Surex\\DocuSign\\Model\\UserSocialAccountLogins', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountName()) {
            $data->{'accountName'} = $object->getAccountName();
        }
        if (null !== $object->getAccountSettings()) {
            $values = [];
            foreach ($object->getAccountSettings() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'accountSettings'} = $values;
        }
        if (null !== $object->getAddressInformation()) {
            $data->{'addressInformation'} = $this->serializer->serialize($object->getAddressInformation(), 'raw', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->serializer->serialize($object->getCreditCardInformation(), 'raw', $context);
        }
        if (null !== $object->getDistributorCode()) {
            $data->{'distributorCode'} = $object->getDistributorCode();
        }
        if (null !== $object->getDistributorPassword()) {
            $data->{'distributorPassword'} = $object->getDistributorPassword();
        }
        if (null !== $object->getInitialUser()) {
            $data->{'initialUser'} = $this->serializer->serialize($object->getInitialUser(), 'raw', $context);
        }
        if (null !== $object->getPaymentProcessorInformation()) {
            $data->{'PaymentProcessorInformation'} = $this->serializer->serialize($object->getPaymentProcessorInformation(), 'raw', $context);
        }
        if (null !== $object->getPlanInformation()) {
            $data->{'planInformation'} = $this->serializer->serialize($object->getPlanInformation(), 'raw', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->serializer->serialize($object->getReferralInformation(), 'raw', $context);
        }
        if (null !== $object->getSocialAccountInformation()) {
            $data->{'socialAccountInformation'} = $this->serializer->serialize($object->getSocialAccountInformation(), 'raw', $context);
        }

        return $data;
    }
}
