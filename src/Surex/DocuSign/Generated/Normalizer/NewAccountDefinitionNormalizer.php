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

class NewAccountDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\NewAccountDefinition' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\NewAccountDefinition;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\NewAccountDefinition();
        if (property_exists($data, 'accountName')) {
            $object->setAccountName($data->{'accountName'});
        }
        if (property_exists($data, 'accountSettings')) {
            $values = [];
            foreach ($data->{'accountSettings'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\NameValue', 'json', $context);
            }
            $object->setAccountSettings($values);
        }
        if (property_exists($data, 'addressInformation')) {
            $object->setAddressInformation($this->denormalizer->denormalize($data->{'addressInformation'}, 'Surex\\DocuSign\\Generated\\Model\\AccountAddress', 'json', $context));
        }
        if (property_exists($data, 'creditCardInformation')) {
            $object->setCreditCardInformation($this->denormalizer->denormalize($data->{'creditCardInformation'}, 'Surex\\DocuSign\\Generated\\Model\\CreditCardInformation', 'json', $context));
        }
        if (property_exists($data, 'distributorCode')) {
            $object->setDistributorCode($data->{'distributorCode'});
        }
        if (property_exists($data, 'distributorPassword')) {
            $object->setDistributorPassword($data->{'distributorPassword'});
        }
        if (property_exists($data, 'initialUser')) {
            $object->setInitialUser($this->denormalizer->denormalize($data->{'initialUser'}, 'Surex\\DocuSign\\Generated\\Model\\Users', 'json', $context));
        }
        if (property_exists($data, 'PaymentProcessorInformation')) {
            $object->setPaymentProcessorInformation($this->denormalizer->denormalize($data->{'PaymentProcessorInformation'}, 'Surex\\DocuSign\\Generated\\Model\\PaymentProcessorInformation', 'json', $context));
        }
        if (property_exists($data, 'planInformation')) {
            $object->setPlanInformation($this->denormalizer->denormalize($data->{'planInformation'}, 'Surex\\DocuSign\\Generated\\Model\\PlanInformation', 'json', $context));
        }
        if (property_exists($data, 'referralInformation')) {
            $object->setReferralInformation($this->denormalizer->denormalize($data->{'referralInformation'}, 'Surex\\DocuSign\\Generated\\Model\\ReferralInformation', 'json', $context));
        }
        if (property_exists($data, 'socialAccountInformation')) {
            $object->setSocialAccountInformation($this->denormalizer->denormalize($data->{'socialAccountInformation'}, 'Surex\\DocuSign\\Generated\\Model\\UserSocialAccountLogins', 'json', $context));
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'accountSettings'} = $values;
        }
        if (null !== $object->getAddressInformation()) {
            $data->{'addressInformation'} = $this->normalizer->normalize($object->getAddressInformation(), 'json', $context);
        }
        if (null !== $object->getCreditCardInformation()) {
            $data->{'creditCardInformation'} = $this->normalizer->normalize($object->getCreditCardInformation(), 'json', $context);
        }
        if (null !== $object->getDistributorCode()) {
            $data->{'distributorCode'} = $object->getDistributorCode();
        }
        if (null !== $object->getDistributorPassword()) {
            $data->{'distributorPassword'} = $object->getDistributorPassword();
        }
        if (null !== $object->getInitialUser()) {
            $data->{'initialUser'} = $this->normalizer->normalize($object->getInitialUser(), 'json', $context);
        }
        if (null !== $object->getPaymentProcessorInformation()) {
            $data->{'PaymentProcessorInformation'} = $this->normalizer->normalize($object->getPaymentProcessorInformation(), 'json', $context);
        }
        if (null !== $object->getPlanInformation()) {
            $data->{'planInformation'} = $this->normalizer->normalize($object->getPlanInformation(), 'json', $context);
        }
        if (null !== $object->getReferralInformation()) {
            $data->{'referralInformation'} = $this->normalizer->normalize($object->getReferralInformation(), 'json', $context);
        }
        if (null !== $object->getSocialAccountInformation()) {
            $data->{'socialAccountInformation'} = $this->normalizer->normalize($object->getSocialAccountInformation(), 'json', $context);
        }

        return $data;
    }
}
